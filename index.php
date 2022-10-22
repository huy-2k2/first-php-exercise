<?php
session_start();
require 'data/product_db.php';
require 'data/category_db.php';
require 'data/post_db.php';
require 'lib/data.php';
require 'lib/cart.php';
$module = $_GET['mod'] ?? 'home';
$action = $_GET['act'] ?? 'main';
$path = "module/$module/$action.php";


require $path;
