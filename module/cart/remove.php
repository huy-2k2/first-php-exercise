<?php
$product_id = $_GET['id'];
remove_cart($product_id);
header('Location: ?mod=cart&act=show');
