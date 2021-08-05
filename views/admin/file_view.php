<?php include('common/header_view.php'); ?>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/file">檔案管理</a>
        <span class="divider">/</span>
        資料列表
    </ul>
    
    <div class="row-fluid">
        <iframe frameborder="0" allowtransparency="true" tabindex="0" src="<?=base_url_plugin() ?>/ckfinder/ckfinder.html" style="width: 100%;height:600px" role="region" title=" "></iframe>
    </div>
    
<?php include('common/footer_view.php'); ?>