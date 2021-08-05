$(function(){
    
    setTimeout("$('.mynoty').trigger('click')", 800);
    $(".form-view").colorbox({iframe:true, width:"70%", height:"95%"});
    $(".iframe").colorbox({iframe:true, width:"800px", height:"700px"});
    
    // ------------------------------------------------------------------------    
    //倒數計時
    
    function countdown() {
        if (total_second <= 0) location.href = base_url_admin + '/logout';

        var hour = parseInt(total_second / 60 / 60);
        var temp_second = parseInt(total_second % 3600);
        var minute = parseInt(temp_second / 60);
        var second = temp_second % 60;
        
        $("#countdown").html(padLeft(hour, 2) + ':' + padLeft(minute, 2) + ':' + padLeft(second, 2));
        total_second--;
    }

    $('body').everyTime('1s', countdown);
    countdown();

	//倒數計時
    // ------------------------------------------------------------------------    
    //現在時間
    
    function now() {
        var d = new Date();
        
        var year = d.getFullYear();
        var month = d.getMonth() + 1;
        var day = d.getDate();
        var hours = d.getHours();
        var minutes = d.getMinutes();
        var seconds = d.getSeconds();
        
        $("#now").html('現在時間：' + year + '/' + padLeft(month, 2) + '/' + padLeft(day, 2) + ' ' + padLeft(hours, 2) + ':' + padLeft(minutes, 2) + ':' + padLeft(seconds, 2));
    }

    $('body').everyTime('1s', now);
    now();

	//現在時間
    // ------------------------------------------------------------------------
    //左邊選單
    
    $('.menu-a').on('click', function () {
        $(this).next('ul.nav-list').toggle();
        $(this).children('i.icon-chevron').toggleClass('icon-chevron-down');
    });
    
    if($('ul.breadcrumb a').length > 1) {
        var menu_a_href = $('ul.breadcrumb a').eq(1).attr('href');
        var menu_li = $('.main-menu a[href$="' + menu_a_href + '"]');
        
        menu_li.parent().parent().parent().addClass('active');
        menu_li.parent().addClass('active');
        menu_li.parent().parent().prev().trigger("click");
    }
    
    //左邊選單
    // ------------------------------------------------------------------------
    //搜尋
    
    $('.form-query').on('click', function(){
        var url = $(location).attr('href').split('?')[0];
        var q = getFormQuery();
        
        location.href = url + q.remove('p').toString();
        return false;
    });
    
    $('.form-export').on('click', function(){
        var url = $(location).attr('href').split('?')[0];
        var q = getFormQuery();
        
        location.href = url + '/export' + q.remove('p').toString();
        return false;
    });
    
    function getFormQuery(){
        var q = $.query;
        
        $('.query_field').each(function() {
            if($(this).val())
                q = q.set($(this).attr('name'), $(this).val());
            else
                q = q.remove($(this).attr('name'));
        });
        
        return q;
    }
    
    //搜尋
    // ------------------------------------------------------------------------
    //列表排序
    
    if($.query.get('s1')) {
        var s1 = $.query.get('s1');
        var s2 = $.query.get('s2');
    
        var element = $('th.query_sort[s1="' + s1 + '"]');

        if(s2 == 'asc')
            element.html(element.html() + '▾');
        else
            element.html(element.html() + '▴');
    }
    
    $('.query_sort').on('click', function(){
        var url = $(location).attr('href').split('?')[0];
        var q = $.query;
            q = q.set('s1', $(this).attr('s1'));
        
        if($.query.get('s1') == $(this).attr('s1')) {
            if($.query.get('s2') == 'asc')
                q = q.set('s2', 'desc');
            else
                q = q.set('s2', 'asc');
        } else {
            q = q.set('s2', 'desc');
        }
        
        location.href = url + q.toString();
    });
});