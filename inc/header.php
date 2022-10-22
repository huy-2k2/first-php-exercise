<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/inc/header.css">
    <link rel="stylesheet" href="public/css/inc/footer.css">
    <link rel="stylesheet" href="public/css/inc/sidebar.css">
    <link rel="stylesheet" href="public/css/module/home.css">
    <link rel="stylesheet" href="public/css/module/products.css">
    <link rel="stylesheet" href="public/css/module/post.css">
    <link rel="stylesheet" href="public/css/module/product_detail.css">
    <link rel="stylesheet" href="public/css/module/cart.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <a href="?" class="header-logo">unitop store</a>
        <a href="?mod=cart&act=show" class="header-cart">
            <div class="header-cart-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <title>Cart</title>
                    <circle cx="176" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                    <circle cx="400" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 80h64l48 272h256" />
                    <path d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                </svg>
            </div>
            <span class="header-cart-num"><?php echo get_total_product() ?></span>
        </a>
    </header>