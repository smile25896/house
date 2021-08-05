/*
 * Aj-Thumbnails
 * @author  Allen J, <uuuiii00@gmail.com>
 * @blog    http://www.allenj.net
 * @version 1.0.0
 * @date    2015-04-13
 */

;(function($) {
    $.fn.ajthumbnails = function(settings) {
        var _defaultSettings = {};
        var _settings = $.extend(_defaultSettings, settings);
        var _handler = function() {
            
            //init
            var container = this;
            var json = $(this).attr('data');
            var json_list = $.parseJSON(json);
            count = $(this).attr('count') || 0;
            
            //parse json, init data
            for(var i=0; i<json_list.length; i++) {
                var filename = base_url_upload_images + json_list[i];
                
                var li = $(".thumbnails-template", container).clone().removeClass("thumbnails-template").removeClass("hide").appendTo(container);
                    li.find(".thumbnail-file").val(filename);
                    li.find(".thumbnail-box-add").hide();
                    li.find(".thumbnail-box-del").css("background-image", "url('" + filename + "')");
                    li.find(".btn-thumbnail-del").bind("click", ThumbnailDel);
                    li.find(".btn-thumbnail-big").attr("href", filename);
                
                index++;                                    
            }
            
            //empty
            if(count == 0 || $(".thumbnails:not(.thumbnails-template)").length < count) {
                var li = $(".thumbnails-template", container).clone().removeClass("thumbnails-template").removeClass("hide").appendTo(container);
                    li.find(".thumbnail-box-del").hide();
                    li.find(".btn-thumbnail-add").attr("href", "javascript:BrowseServer('thumbnails_" + index + "');");
                    li.find(".btn-thumbnail-del").bind("click", ThumbnailDel);
                    li.attr("id", "thumbnails_" + index);
                
                index++;
            }
            
            $(".btn-thumbnail-big").colorbox();
        };
        return this.each(_handler);
    };
})(jQuery);

var index = 0;
var count;
var finder = new CKFinder();

function BrowseServer(element) {
    finder.basePath = '/plugin/ckfinder/';
    finder.selectActionFunction = SetFileField;
    finder.selectActionData = element;
    finder.popup();
}

function SetFileField(fileUrl, data) {
    var element = data.selectActionData;
    var li = $("#" + element);
        li.find(".thumbnail-file").val(fileUrl);
        li.find(".thumbnail-box-add").hide();
        li.find(".thumbnail-box-del").show();
        li.find(".thumbnail-box-del").css("background-image", "url('" + fileUrl + "')"); 
        li.find(".btn-thumbnail-del").bind("click", ThumbnailDel);
        li.find(".btn-thumbnail-big").attr("href", fileUrl);
    
    var ul = li.parent();
    
    //empty
    if(count == 0 || $(".thumbnails:not(.thumbnails-template)").length < count) {
        var li = $(".thumbnails-template", ul).clone().removeClass("thumbnails-template").removeClass("hide").appendTo(ul);
            li.find(".thumbnail-box-del").hide();
            li.find(".btn-thumbnail-add").attr("href", "javascript:BrowseServer('thumbnails_" + index + "');");
            li.attr("id", "thumbnails_" + index);
        
        index++;
    }
    
    finder.api.closePopup();
}

function ThumbnailDel() {
    var li = $(this).parentsUntil("ul.thumbnails-gallery");
    var ul = li.parent();
    li.remove();
    
    //empty
    if($(".thumbnails:not(.thumbnails-template)").length == 0) {
        var li = $(".thumbnails-template", ul).clone().removeClass("thumbnails-template").removeClass("hide").appendTo(ul);
            li.find(".thumbnail-box-del").hide();
            li.find(".btn-thumbnail-add").attr("href", "javascript:BrowseServer('thumbnails_" + index + "');");
            li.attr("id", "thumbnails_" + index);
        
        index++;
    }
}  