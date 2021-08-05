$(function(){
    $(".addcart").click(function(){
        var cart = new Cart(JSON.parse($.cookie('cart')));
        var pid = parseInt($(this).attr('pid')) || 0;
        var stock = parseInt($(this).attr('stock')) || 0;
        
        if(stock == 0) {
            alert('無庫存');
        } else if(pid == 0) {
            alert('無法選購');
        } else {
            var item = new Item();
                item.pid = pid;
            
            cart.addItem(item);
            
            $.cookie('cart', JSON.stringify(cart), { expires: 7, path: '/' });
            alert('已加入購物車');
        }
    });
    
    $(".addgocart").click(function(){
        var cart = new Cart(JSON.parse($.cookie('cart')));
        var pid = parseInt($(this).attr('pid')) || 0;
        
        if(pid) {
            var item = new Item();
            item.pid = parseInt(pid);
            
            cart.addItem(item);
            
            $.cookie('cart', JSON.stringify(cart), { expires: 7, path: '/' });
        }
        
        location.href = '/cart/';
    });
    
    $(".amount").change(function(){
        var pid = parseInt($(this).attr('pid')) || 0;
        var price = parseInt($(this).attr('price')) || 0;
        var amount = parseInt($(this).val()) || 0;
        
        var cart = new Cart(JSON.parse($.cookie('cart')));
        
        //小計
        var subtotal = price * amount;
        $(this).parent().parent().find(".subtotal").text(subtotal);
        
        for(var i = 0; i < cart.list.length; i++) {
            if(cart.list[i].pid == pid) {
                cart.list[i].amount = parseInt(amount);
            }
        }
        
        //總計
        var allamount = 0;
        var total = 0;
        
        $(".subtotal").each(function(){
            total += parseInt($(this).text());
            allamount++;
        });
        
        $(".allamount").text(allamount);
        $(".total").text(total);
        
        $.cookie('cart', JSON.stringify(cart), { expires: 7, path: '/' });
    }).change();
    
    $(".delcart").click(function(){
        var cart = new Cart(JSON.parse($.cookie('cart')));
        var pid = parseInt($(this).attr('pid')) || 0;
                
        cart.list = cart.list.filter(function(item){
            if(pid != item.pid) return true;
            
            return false;
        });
        
        $.cookie('cart', JSON.stringify(cart), { expires: 7, path: '/' });
        location.reload();
    });
    
    //加入追蹤清單
    $(".addtrace").click(function(){
        var mid = parseInt($(this).attr('mid')) || 0;
        var pid = parseInt($(this).attr('pid')) || 0;
        
        if(mid == '0'){
            alert('請先登入');
        } else {
            location.href = base_url + 'trace/add/' + pid;
        }
    });
});

// ------------------------------------------------------------------------

var Item = function(param)
{
    this.pid = (param && param.pid) ? param.pid : 0;
    this.amount = (param && param.amount) ? param.amount : 1;
}

var Cart = function(param)
{
    this.list = (param && param.list) ? param.list : new Array();
}

Cart.prototype = 
{
    addItem : function(item_add){
        this.list = this.list.filter(function(item){
            if(item_add.pid != item.pid) return true;
            
            return false;
        });
                
        this.list.push(item_add);
    },
}
