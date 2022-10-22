<?php
require 'inc/header.php';

?>
<div class="cart">
    <h2 class="cart-title">Giỏ hàng</h2>
    <?php if (isset($_SESSION['cart'])) { ?>
        <div class="cart-table">
            <div class="cart-cell cart-head">
                Mã sản phẩm
            </div>
            <div class="cart-cell cart-head">
                Ảnh sản phẩm
            </div>
            <div class="cart-cell cart-head">
                Tên sản phẩm
            </div>
            <div class="cart-cell cart-head">
                Giá sản phẩm
            </div>
            <div class="cart-cell cart-head">
                số lượng
            </div>
            <div class="cart-cell cart-head">
                thành tiền
            </div>
            <div class="cart-cell cart-head">
                Xóa
            </div>
            <?php
            foreach ($_SESSION['cart'] as $item) {
                $product = get_product_by_id($item['product_id']);
            ?>
                <div class="cart-cell cart-code">
                    <?php echo $product['product_code'] ?>
                </div>
                <div class="cart-cell cart-image">
                    <img src="<?php echo $product['product_image'] ?>" alt="">
                </div>
                <div class="cart-cell">
                    <a class="cart-detail" href="<?php echo $product['url_detail'] ?>"><?php echo $product['product_name'] ?></a>
                </div>
                <div class="cart-cell cart-price"><?php echo number_format($product['product_price']) ?>đ</div>
                <div class="cart-cell cart-total">
                    <input data-id="<?php echo $product['product_id'] ?>" type="number" min='1' value="<?php echo $item['total'] ?>">
                </div>
                <div class="cart-cell cart-cost"><?php echo number_format($item['total'] * $product['product_price']) ?>đ</div>
                <a href="<?php echo $product['url_remove'] ?>" class="cart-cell cart-remove">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <title>Trash Bin</title>
                        <path d="M432 144l-28.67 275.74A32 32 0 01371.55 448H140.46a32 32 0 01-31.78-28.26L80 144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <rect x="32" y="64" width="448" height="80" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M312 240L200 352M312 352L200 240" />
                    </svg>
                </a>
            <?php
            }
            ?>
        </div>
    <?php
    }
    ?>
    <div class="cart-footer">
        <span class="cart-money">Tổng tiền: <?php echo number_format(get_total_money()) ?>đ</span>
        <a href="#" class="cart-checkout">Thanh Toán</a>
    </div>
</div>
<script src="public/js/main.js"></script>
<?php require 'inc/footer.php' ?>