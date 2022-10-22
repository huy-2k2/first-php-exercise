<?php
function add_cart($product_id)
{
    $_SESSION['cart'] = $_SESSION['cart'] ?? [];
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['product_id'] == $product_id) {
            $item['total']++;
            return;
        }
    }
    array_unshift($_SESSION['cart'], [
        'product_id' => $product_id,
        'total' => 1,
    ]);
}

function get_total_product()
{
    return isset($_SESSION['cart']) ? array_reduce($_SESSION['cart'], function ($acc, $item) {
        return $acc + $item['total'];
    }, 0) : 0;
}

function get_total_money()
{
    return isset($_SESSION['cart']) ? array_reduce($_SESSION['cart'], function ($acc, $item) {
        $product = get_product_by_id($item['product_id']);
        return $product['product_price'] * $item['total'] + $acc;
    }, 0) : 0;
}

function remove_cart($product_id)
{
    $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($product_id) {
        return $item['product_id'] != $product_id;
    });
}
