$(function(){
    $(".hits").click(function() {
        var id = $(this).attr('bid');
        
        $.post( "banner/hits", { id: id } );
    });
});