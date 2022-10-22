<?php
session_start();
require '../../data/product_db.php';
require '../../lib/cart.php';
require '../../lib/data.php';

foreach ($_SESSION['cart'] as &$cart) {
    if ($cart['product_id'] === $_POST['product_id']) {
        $cart['total'] = $_POST['total'];
        break;
    }
}

$product = get_product_by_id($_POST['product_id']);
$total_money_all = get_total_money();
$total_money_product = $product['product_price'] * $_POST['total'];
$total_cart = get_total_product();

echo json_encode(['total_money_all' => $total_money_all, 'total_money_product' => $total_money_product, 'total_cart' => $total_cart]);
