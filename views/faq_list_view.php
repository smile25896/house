<?php include('common/header_view.php'); ?>
    
    <!-- WRAPPER -->
    <div class="wrapper border">
    
    	<!-- HEADCONTENT -->
    	<div class="headcontent">
    		<div class="container">
    			<div class="col-sm-6">
    				<h1>FAQ</h1>
    			</div>
    		</div>
    	</div>
    	<!-- /.headcontent -->
    
    	<!-- CONTAINER -->
    	<div class="container no-padding sm-padding-top inforow">
    		<div class="col-sm-6">
    			<ul class="nav-category">
    				<li><a href="#all" class="filter active" data-filter="*">全部</a></li>
    			</ul>
    		</div>
    		<div class="col-sm-6 text-right">
    			<ul class="nav-expand flat">
    				<li><a href="" class="expand-link"><i class="fa fa-angle-double-down"></i> 全部展開</a></li>
    				<li><a href="" class="collapse-link"><i class="fa fa-angle-double-up"></i> 全部摺疊</a></li>
    			</ul>
    		</div>
    	</div>
    	<!-- /.container -->
        
    	<!-- CONTAINER -->
    	<div class="container mix-list faq">
    		<div class="col-sm-12">
                <?php
                    $i = 0;
                    foreach ($result as $item):
                ?>
                    <div class="mix <?php if($i % 2 == 0) echo 'a1'; else echo 'a2'; ?>">
        				<h4 data-toggle="collapse" class="text-primary" data-target="#faq-<?=$i ?>">
        					<i class="fa fa-folder-open-o fa-fw"></i><?=$item['question'] ?>
        				</h4>
        				<div class="panel-body collapse in" id="faq-<?=$i ?>">
        					<p><?=$item['answer'] ?></p>
        				</div>
        			</div>
                <?php
                        $i++;
                    endforeach
                ?>
    		</div>
    	</div>
    	<!-- /.container -->
    </div>
    <!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>