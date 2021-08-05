<?php include('common/header_view.php'); ?>

  <div class="wrapper border">
      <!-- HEADCONTENT -->
      <div class="headcontent">
          <div class="container">
              <div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
                  <h1>聯絡我們</h1>
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
                    聯絡我們</p>
                </ul>
           </div>
           <br>
           <div class="col-md-5" style="padding-left: 30px; padding-right: 30px;">
              <h4>台灣中油股份有限公司潤滑油事業部</h4>
              <dl class="dl-horizontal">
                  <p>地址：高雄市前鎮區成功二路 15 號 6 樓</p>
                  <p>電話：07-5361510</p>
                  <p>傳真：07-5361442</p>
              </dl>
              <br>
              <h2>聯絡我們</h2>
              <form id="my_form" method="post" action="<?=current_url() ?>">
                <div>
                  姓名
                  <input type="text" name="txt_name"/>
                </div>
                <div>
                  電子郵件
                  <input type="text" name="txt_email"/>
                </div>
                <div>
                  電話
                  <input type="text" name="txt_tel"/>
                </div>
                <div>
                  留言
                  <textarea name="txt_message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">確定</button>
              </form>
			  <br>
           </div>
		   
           <div class="col-md-7"style="padding-left: 30px; padding-right: 30px;">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14732.751222657418!2d120.29914299999999!3d22.609461!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8746bd6a88cb6184!2z5Y-w54Gj5Lit5rK56IKh5Lu95pyJ6ZmQ5YWs5Y-4IOa9pOa7keayueS6i-alremDqA!5e0!3m2!1szh-TW!2stw!4v1543559460577" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe> 
           </div>
       </div>
	  <!-- /.container -->
      
      <!-- MAP -->
        <!--iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14732.751222657418!2d120.29914299999999!3d22.609461!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8746bd6a88cb6184!2z5Y-w54Gj5Lit5rK56IKh5Lu95pyJ6ZmQ5YWs5Y-4IOa9pOa7keayueS6i-alremDqA!5e0!3m2!1szh-TW!2stw!4v1543559460577" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <!-- /.google-map -->

      <!-- CONTAINER -->
      <!--div class="container inforow">
        <div class="col-md-4 col-sm-5">
          <h2>連繫資訊</h2>
          <h4>台灣中油股份有限公司潤滑油事業部</h4>
          <dl class="dl-horizontal">
              <p>地址：高雄市前鎮區成功二路 15 號 6 樓</p>
              <p>電話：07-5361510</p>
              <p>傳真：07-5361442</p>
          </dl>
        </div>
        <div class="col-sm-7 col-md-offset-1">
          <form id="my_form" method="post" action="<?=current_url() ?>">
            <div>
              姓名
              <input type="text" name="txt_name"/>
            </div>
            <div>
              電子郵件
              <input type="text" name="txt_email"/>
            </div>
            <div>
              電話
              <input type="text" name="txt_tel"/>
            </div>
            <div>
              留言
              <textarea name="txt_message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">確定</button>
          </form>
        </div>
      </div>
      <!-- /.container -->
  </div>
    <!-- /.wrapper -->

    <script>
        $(function () {
            $("#my_form").validate({
                rules: {
                    txt_name: "required",
                    txt_email: "required email"
                }
            });
        });
    </script>

<?php include('common/footer_view.php'); ?>