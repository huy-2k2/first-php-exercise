<?php
require 'inc/header.php';
$cat_id = $_GET['cat_id'];
$products_cat = get_product_by_cat_id($cat_id);
?>

<div class="content">
    <div class="content-left">
        <?php require 'inc/sidebar.php' ?>
    </div>
    <div class="content-right">
        <div class="products">
            <h2 class="products-title"><?php echo $products_cat['category']['cat_title'] ?></h2>
            <div class="products-list">
                <?php foreach ($products_cat['data'] as $product_cat) {
                ?>
                    <a href="<?php echo $product_cat['url_detail'] ?>" class="products-cart">
                        <img class="products-cart-image" src="<?php echo $product_cat['product_image'] ?>" alt="">
                        <p class="products-cart-name"><?php echo $product_cat['product_name'] ?></p>
                        <p class="products-cart-price"><?php echo $product_cat['product_price'] ?></p>
                    </a>
                <?php
                } ?>
            </div>
        </div>
    </div>
</div>

<?php require 'inc/footer.php' ?>