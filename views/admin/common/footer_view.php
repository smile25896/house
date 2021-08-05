		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
			<!-- content ends -->
			</div><!--/#content.span10-->
		<?php } ?>
		</div><!--/fluid-row-->
		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
		
		<hr/>

		<footer>
			<p class="pull-right">程式維護：<a href="http://www.allenj.net/about" target="_blank">Allen J</a></p>
			<p class="pull-right">版本：AJ v2</p>
		</footer>
		<?php } ?>

	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery UI -->
	<script src="<?=base_url_js() ?>/admin/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?=base_url_js() ?>/admin/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?=base_url_js() ?>/admin/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?=base_url_js() ?>/admin/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?=base_url_js() ?>/admin/jquery.dataTables.min.js'></script>

	<!-- chart libraries start
	<script src="<?=base_url_js() ?>/admin/excanvas.js"></script>
	<script src="<?=base_url_js() ?>/admin/jquery.flot.min.js"></script>
	<script src="<?=base_url_js() ?>/admin/jquery.flot.pie.min.js"></script>
	<script src="<?=base_url_js() ?>/admin/jquery.flot.stack.js"></script>
	<script src="<?=base_url_js() ?>/admin/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?=base_url_js() ?>/admin/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?=base_url_js() ?>/admin/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?=base_url_js() ?>/admin/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?=base_url_js() ?>/admin/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?=base_url_js() ?>/admin/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?=base_url_js() ?>/admin/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?=base_url_js() ?>/admin/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?=base_url_js() ?>/admin/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?=base_url_js() ?>/admin/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?=base_url_js() ?>/admin/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?=base_url_js() ?>/admin/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?=base_url_js() ?>/admin/charisma.js"></script>
    
    <?php $message = $this->session->flashdata('message'); ?>
    
    <?php if ($message == 1): ?>
        <button class="btn btn-primary noty mynoty hidden" data-noty-options='{"text":"新增成功","layout":"topCenter","type":"success"}'></button>
    <?php elseif($message == 2): ?>
        <button class="btn btn-primary noty mynoty hidden" data-noty-options='{"text":"刪除成功","layout":"topCenter","type":"success"}'></button>
    <?php elseif($message == 3): ?>
        <button class="btn btn-primary noty mynoty hidden" data-noty-options='{"text":"更新成功","layout":"topCenter","type":"success"}'></button>
    <?php elseif($message == 4): ?>
        <button class="btn btn-primary noty mynoty hidden" data-noty-options='{"text":"寄送成功","layout":"topCenter","type":"success"}'></button>
    <?php elseif($message == 5): ?>
        <button class="btn btn-primary noty mynoty hidden" data-noty-options='{"text":"發生錯誤","layout":"topCenter","type":"error"}'></button>
    <?php elseif($message == 6): ?>
        <button class="btn btn-primary noty mynoty hidden" data-noty-options='{"text":"匯入成功","layout":"topCenter","type":"success"}'></button>
    <?php elseif($message == 7): ?>
        <button class="btn btn-primary noty mynoty hidden" data-noty-options='{"text":"上傳失敗","layout":"topCenter","type":"error"}'></button>
    <?php endif; ?>
</body>
</html>
