
<div class="row">
	<div class="col-lg-offset-1 col-lg-2 col-sm-3 text-center">
	</div>
	<div class="col-md-8 col-sm-9">
		<div class="comments">
			<?php
				$list = get_product_comment_list_by_product_id_web($id);

				foreach ($list as $item) :
			?>
				<div class="comment clearfix">
					<div class="comment-text">
						<div class="comment-line">
							<p>
								<a href=""><?=$item['name'] ?></a>,
								<?=$item['create_date'] ?>
							</p>
						</div>
						<p><?=$item['comment'] ?></p>
					</div>
					<?php if($item['reply']) : ?>
						<div class="comment clearfix">
							<div class="comment-text">
								<div class="comment-line">
									<p>
										<a href=""><?=get_administrator_name($item['update_administrator']) ?></a>,
										<?=$item['update_datetime'] ?>
									</p>
								</div>
								<p><?=$item['reply'] ?></p>
							</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<script>
    $(function () {
        $("#my_form").validate({
            rules: {
                txt_name: "required",
                txt_email: "required email",
				txt_comment: "required"
			}
        });
    });
</script>

<div class="row">
	<div class="col-lg-offset-1 col-lg-2 col-sm-3 text-center">
		<h3>留言</h3>
	</div>
	<div class="col-md-8 col-sm-9">
		<form id="my_form" method="post" action="<?=base_url() ?>product/comment/<?=$id ?>">
			<div class="form-wrap">
				<div class="form-group">
					<?php if($login_member): ?>
						<input type="text" value="<?=$login_member['name'] ?>" disabled/>
						<input type="hidden" name="txt_name" value="<?=$login_member['name'] ?>"/>
					<?php else: ?>
						<input type="text" name="txt_name" placeholder="姓名"/>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<?php if($login_member): ?>
						<input type="text" value="<?=$login_member['email'] ?>" disabled/>
						<input type="hidden" name="txt_email" value="<?=$login_member['email'] ?>"/>
					<?php else: ?>
						<input type="text" name="txt_email" placeholder="Email"/>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<textarea name="txt_comment" placeholder="留言"></textarea>
				</div>
			</div>
            <?
			$is_login = $this->web_library->check_token();

			if ($is_login) {
			?>
			<button type="submit" class="btn btn-default">確定</button>
            <?
			} else {
			?>
            <a href="<?=base_url() ?>member">請先登入會員</a>
            <?
			}
			?>
		</form>
	</div>
</div>
