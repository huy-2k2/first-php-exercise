<?php
require 'inc/header.php';
$post_id = $_GET['id'];
$post = get_post_by_id($post_id);
?>

<div class="content">
    <div class="content-left">
        <?php require 'inc/sidebar.php' ?>
    </div>
    <div class="content-right">
        <div class="post">
            <h2 class="post-title"><?php echo $post['post_title'] ?></h2>
            <div class="post-time">
                <div class="post-time-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <title>Time</title>
                        <path d="M256 64C150 64 64 150 64 256s86 192 192 192 192-86 192-192S362 64 256 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 128v144h96" />
                    </svg>
                </div>
                <span class="post-time-detail"><?php echo $post['post_time'] ?></span>
            </div>
            <?php echo $post['post_content'] ?>
        </div>
    </div>
</div>

<?php require 'inc/footer.php' ?>