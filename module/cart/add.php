<?php
$product_id = $_GET['id'];
add_cart($product_id);
header("Location: ?mod=product&act=detail&id=$product_id");
