<?php
function get_products_by_id()
{
    global $products, $categorys;
    $data = [];
    foreach ($categorys as $category) {
        $product_cat = [];
        foreach ($products as $product) {
            if ($product['cat_id'] == $category['cat_id']) {
                $product['url_detail'] = '?mod=product&act=detail&id=' . $product['product_id'];
                $product_cat[] = $product;
            }
        }
        $data[] = [
            'category' => $category,
            'data' => $product_cat,
        ];
    }
    return $data;
}

function get_product_by_cat_id($cat_id)
{
    global $products, $categorys;
    $data = [];
    $category = null;
    foreach ($categorys as $cat) {
        if ($cat['cat_id'] == $cat_id)
            $category = $cat;
    }
    foreach ($products as $product) {
        if ($product['cat_id'] == $cat_id) {
            $product['url_detail'] = '?mod=product&act=detail&id=' . $product['product_id'];
            $data[] = $product;
        }
    }
    $result = [
        'category' => $category,
        'data' => $data
    ];
    return $result;
}

function get_post_by_id($post_id)
{
    global $posts;
    foreach ($posts as $post) {
        if ($post['post_id'] == $post_id)
            return $post;
    }
}

function get_product_by_id($product_id)
{
    global $products;
    foreach ($products as $product) {
        if ($product['product_id'] == $product_id) {
            $product['url_detail'] = '?mod=product&act=detail&id=' . $product['product_id'];
            $product['url_remove'] = '?mod=cart&act=remove&id=' . $product['product_id'];
            $product['url_add'] = '?mod=cart&act=add&id=' . $product['product_id'];
            return $product;
        }
    }
}
