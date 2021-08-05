
<!-- COMMENTS -->
<div class="comments" id="comments">
	<h3>
        <?php
            $article_comment_count = get_article_comment_count_by_article_id_web($id);

            if($article_comment_count)
                echo $article_comment_count.'則留言';
            else
                echo '無留言';
        ?>
    </h3>

	<hr class="sm-margin"/>

    <?php
        $list = get_article_comment_list_by_article_id_web($id);

        foreach ($list as $item) :
    ?>
    	<div class="comment clearfix">
    		<div class="comment-text">
    			<div class="comment-line">
    				<p>
    					<a href=""><?=$item['name'] ?></a>,
    					<?=$item['create_datetime'] ?>
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
<!-- /.comments -->

<hr/>

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

<!-- Add Comment -->
<div class="add-comment" id="addcomment">
	<h3>留言</h3>
    <form id="my_form" method="post" action="<?=base_url() ?>article/news_comment/<?=$code ?>/<?=$id ?>" novalidate>
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
		<button type="submit" class="btn btn-primary">送出</button>
	</form>
</div>
<!-- /.add-comment -->
