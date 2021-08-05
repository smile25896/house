<?php include('common/header_view.php'); ?>
    
    <a href="<?=base_url().'message/add' ?>">發送訊息</a>
    
    <?php if($result): ?>
        <table>
            <thead>
                <tr>
                    <th>發送管理員</th>
                    <th>接收管理員</th>
                    <th>訊息</th>
                    <th>發送時間</th>
                    <th>刪除</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $item): ?>
                    <tr>
                        <td><?=get_administrator_name($item['create_administrator']) ?></td>
                        <td><?=get_administrator_name($item['administrator_id']) ?></td>
                        <td><?=$item['message'] ?></td>
                        <td><?=$item['create_datetime'] ?></td>
                        <td><a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url() ?>/message/del/<?=$item['id'] ?>'}">刪除</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php else: ?>
        無資料
    <?php endif; ?>
    
    <?php include('common/page_bar_view.php'); ?>

<?php include('common/footer_view.php'); ?>