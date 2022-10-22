<?php
require 'inc/header.php';
$products_cats = get_products_by_id();
?>

<div class="content">
    <div class="content-left">
        <?php require 'inc/sidebar.php' ?>
    </div>
    <div class="content-right">
        <div class="home">
            <?php
            foreach ($products_cats as $products_cat) {
            ?>
                <div class="home-cat">
                    <h2 class="home-title"><?php echo $products_cat['category']['cat_title'] ?></h2>
                    <div class="home-list">
                        <?php
                        foreach ($products_cat['data'] as $product_cat) {
                        ?>
                            <a href="<?php echo $product_cat['url_detail'] ?>" class="home-cart">
                                <img class="home-cart-image" src="<?php echo $product_cat['product_image'] ?>" alt="">
                                <p class="home-cart-name"><?php echo $product_cat['product_name'] ?></p>
                                <p class="home-cart-price"><?php echo $product_cat['product_price'] ?></p>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php require 'inc/footer.php' ?>