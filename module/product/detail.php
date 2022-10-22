<?php
require 'inc/header.php';
$product_id = $_GET['id'];
$product = get_product_by_id($product_id);
?>

<div class="content">
    <div class="content-left">
        <?php require 'inc/sidebar.php' ?>
    </div>
    <div class="content-right">
        <div class="product">
            <img class="product-image" src="<?php echo $product['product_image'] ?>" alt="">
            <div class="product-content">
                <h3 class="product-name"><?php echo $product['product_name'] ?></h3>
                <p class="product-price"><?php echo number_format($product['product_price']) ?>đ</p>
                <div class="product-code">Mã sản phẩm <strong><?php echo $product['product_code'] ?></strong></div>
                <p class="product-desc"><?php echo $product['product_desc'] ?></p>
                <a class="product-button" href="<?php echo $product['url_add'] ?>">Thêm giỏ hàng</a>
            </div>
        </div>
    </div>
</div>


<?php require 'inc/footer.php' ?>