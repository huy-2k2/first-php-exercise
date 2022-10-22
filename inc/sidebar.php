<?php
$links = [
    ['url' => '?', 'title' => 'Trang chủ'],
    ['url' => '?mod=post&id=1', 'title' => 'Giới thiệu'],
    ['url' => '?mod=product&cat_id=2', 'title' => 'Macbook'],
    ['url' => '?mod=product&cat_id=1', 'title' => 'Điện thoại'],
    ['url' => '?mod=post&id=2', 'title' => 'Liên hệ'],
]
?>

<ul class="sidebar">
    <?php foreach ($links as $link) {
    ?>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
        </li>
    <?php
    } ?>
</ul>