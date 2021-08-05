<?php include('common/header_view.php'); ?>

    <!-- WRAPPER -->
    <div class="wrapper">
    	<!-- banner -->
        <!--div class="container" style="width: 100%;">
			<?php
              $banner_item = get_banner_item_by_code(413);
               if($banner_item && $banner_item['path']) :
			?>
				   <img alt="<?=web_config('site_name') ?>" src="<?=base_url_upload_images().$banner_item['path'] ?>" style="width:100%;"/>
		
			<?php endif; ?>
        </div-->
        <!-- banner -->
			<!-- HEADCONTENT -->
            <div class="headcontent" style=" background-color: #e70012;">
                <div class="container">
                    <div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
                        <h1>APEX機車用油專賣店</h1>
                    </div>
                </div>
            </div>
            <!-- /.headcontent -->
			
			<!-- CONTAINER -->
			<div class="container post format-standart">
            	<div id="navbar" class="navbar-collapse collapse">	
                    <ul class="nav navbar-nav">
                        <p><i class="fas fa-home"></i>首頁
                        <i class="fas fa-angle-right"></i>
                        美耐吉
                        <i class="fas fa-angle-right"></i>
                        經銷通路
                        <i class="fas fa-angle-right"></i>
                        APEX機車用油專賣店</p>
                    </ul>
                </div>
                <br>
				<div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
					<?php include('common/MiRAGEdealer_sidebar_view.php'); ?>
				</div>
				<div class="col-sm-9" style="padding-left: 30px; padding-right: 30px;">
                    <form name="表單" method="post" action="MiRAGEscooter">
                    	<font size="+3">請選擇查詢的地區：</font>
                    	<select name="area" class="input-lg">
                        	<option value="">請選擇</option>
                            <option value="0" o="台北市" >台北市</option>
                            <option value="1" o="基隆市" >基隆市</option>
                            <option value="2" o="台北縣" >新北市</option>
                            <option value="3" o="宜蘭縣" >宜蘭縣</option>
                            <option value="4" o="新竹市" >新竹市</option>
                            <option value="5" o="新竹縣" >新竹縣</option>
                            <option value="6" o="桃園縣" >桃園縣</option>
                            <option value="7" o="苗栗縣" >苗栗縣</option>
                            <option value="8" o="台中縣" >台中市</option>
                            <option value="9" o="彰化縣" >彰化縣</option>
                            <option value="10" o="南投縣" >南投縣</option>
                            <option value="11" o="嘉義市" >嘉義市</option>
                            <option value="12" o="嘉義縣" >嘉義縣</option>
                            <option value="13" o="雲林縣" >雲林縣</option>
                            <option value="14" o="台南市" >台南市</option>
                            <option value="15" o="高雄市" >高雄市</option>
                            <option value="16" o="屏東縣" >屏東縣</option>
                            <option value="17" o="屏東縣" >屏東市</option>
                    	</select>
                        <input type="submit" class="btn btn-info" value="查詢">
                    </form>
                    <br><hr />
                    <?php include('area.php'); ?>
                    <br>
                    <br>
				</div>
			</div>
			<!-- /.container -->
		 </div>
    </div>
    <!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>