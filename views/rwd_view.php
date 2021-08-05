<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset=utf-8>
    <title>RWD 預覽</title>
    
    <script src="<?=base_url_js() ?>/admin/jquery-1.7.2.min.js"></script>
    
    <style>
        body, ul {
            margin: 0;
            padding: 0;
        }
        #top {
            background-color: #C5C5C5;
            margin: 0;
            padding: 12px 36px;
        }
        .logo {
            display: inline-block;
            width: 19%;
        }
        .devices {
            display: inline-block;
            margin: 0;
            padding: 0;
            text-align: right;
            width: 80%;
        }
        .devices li {
            display: inline-block;
            margin: 0 10px;
        }
        .remove {
            position: relative;
            right: -25px;
            top: -22px;
        }
        #device {
            text-align: center;
        }
        .web-frame {
            margin: 0;
            padding: 0;
        }
        .ipad-horizontal-frame {
            background-color: #333;
            border-radius: 3em;
            margin: 10px auto;
            padding: 40px 90px;
        }
        .ipad-vertical-frame {
            background-color: #333;
            border-radius: 3em;
            margin: 10px auto;
            padding: 90px 40px;
        }
        .iphone-vertical-frame {
            background-color: #333;
            border-radius: 3em;
            margin: 10px auto;
            padding: 70px 16px;
        }
        .iphone-horizontal-frame {
            background-color: #333;
            border-radius: 3em;
            margin: 10px auto;
            padding: 16px 70px;
        }
    </style>
    <script>
        $(function() {
            $('.web').click(function(){
                $('#main').prop('height',"850px");
                $('#main').prop('width',"100%");
                $("#main").prop('class',"web-frame");
            });
            
            $('.ipad-horizontal').click(function(){
                $("#main").prop('height',"768");
                $("#main").prop('width',"1024");
                $("#main").prop('class',"ipad-horizontal-frame");
            });
            
            $('.ipad-vertical').click(function(){
                $("#main").prop('height',"1024");
                $("#main").prop('width',"768");
                $("#main").prop('class',"ipad-vertical-frame");
            });
            
            $('.iphone-vertical').click(function(){
                $("#main").prop('height',"480");
                $("#main").prop('width',"320");
                $("#main").prop('class',"iphone-vertical-frame");
            });
            
            $('.iphone-horizontal').click(function(){
                $("#main").prop('height',"320");
                $("#main").prop('width',"480");
                $("#main").prop('class',"iphone-horizontal-frame");
            });
            
        });
    </script>
</head>
<body>
    
    <div id="top">
        <div class="logo">AJ 1.5</div>
        
        <div class="devices">
            <ul>
                <li><a class="web" href="#"><img src="<?=base_url_images() ?>/web/mac_client-48.png"/></a></li>
                <li><a class="ipad-horizontal" href="#"><img src="<?=base_url_images() ?>/web/iPad-48.png"/></a></li>
                <li><a class="ipad-vertical" href="#"><img src="<?=base_url_images() ?>/web/rotate_to_landscape-48.png"/></a></li>
                <li><a class="iphone-vertical" href="#"><img src="<?=base_url_images() ?>/web/iphone-48.png"/></a></li>
                <li><a class="iphone-horizontal" href="#"><img src="<?=base_url_images() ?>/web/rotate_to_portrait-48.png"/></a></li>
                <li><a class="remove" href="<?=$url ?>"><img src="<?=base_url_images() ?>/web/delete-26.png"/></a></li>
            </ul>
        </div>
    </div>
    
    <div id="device">
        <iframe id="main" class="web-frame" src="<?=$url ?>" width="100%" height="850px" frameborder="0"> </iframe>
    </div>
</body>
</html> 