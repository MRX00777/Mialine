<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seo -->
    <meta name="keywords" content="<?= $kw ?>">
    <meta name="description" content="<?= $desc ?>">
    <title><?= $title ?></title>
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="yandex" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="og:locale" content="ru_RU">
    <meta name="og:type" content="website">
    <meta name="og:title" content="<?= $title ?>">
    <meta name="og:description" content="<?= $desc ?>">
    <meta name="og:url" content="<?= $url ?>">
    <meta name="og:image" content="<?= $img ?>">
    <meta name="canonical" href="<?= $url ?>">
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="/assets/icons/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/libraries/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <?php
    switch ($page) {
        case 'index':
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            break;
        case 'catalog_inner':
            echo '<link rel="stylesheet" href="/assets/css/pages/catalog_inner.css">';
            break;
        case 'catalog_inner_details':
            echo '<link rel="stylesheet" href="/assets/css/pages/catalog_inner-details.css">';
            break;
        case 'catalogCard_inner':
            echo '<link rel="stylesheet" href="/assets/css/pages/catalogCard_inner.css">';
            break;
        case 'basket':
            echo '<link rel="stylesheet" href="/assets/css/pages/basket.css">';
            break;
        case 'decor':
            echo '<link rel="stylesheet" href="/assets/css/pages/decor.css">';
            break;
        case 'profile':
            echo '<link rel="stylesheet" href="/assets/css/pages/profile.css">';
            break;
        case 'news':
            echo '<link rel="stylesheet" href="/assets/css/pages/news.css">';
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            echo '<link rel="stylesheet" href="/assets/css/pages/catalog_inner.css">';
            break;
        case 'news-details':
            echo '<link rel="stylesheet" href="/assets/css/pages/news-details.css">';
            break;
        case 'payment-method':
            echo '<link rel="stylesheet" href="/assets/css/pages/payment-method.css">';
            break;
        case 'questions':
            echo '<link rel="stylesheet" href="/assets/css/pages/questions.css">';
            break;
        case 'support':
            echo '<link rel="stylesheet" href="/assets/css/pages/support.css">';
            break;
        case 'oferta':
            echo '<link rel="stylesheet" href="/assets/css/pages/oferta.css">';
            break;
        case 'brands':
            echo '<link rel="stylesheet" href="/assets/css/pages/brands.css">';
            break;
        case 'registration':
            echo '<link rel="stylesheet" href="/assets/css/pages/registration.css">';
            break;
        case 'login':
            echo '<link rel="stylesheet" href="/assets/css/pages/login.css">';
            break;
        case 'login-confirm':
            echo '<link rel="stylesheet" href="/assets/css/pages/login-confirm.css">';
            break;
        case 'favorites':
            echo '<link rel="stylesheet" href="/assets/css/pages/favorites.css">';
            break;
        case 'brands-product':
            echo '<link rel="stylesheet" href="/assets/css/pages/brands-product.css">';
            break;
        case 'search-result':
            echo '<link rel="stylesheet" href="/assets/css/pages/search-result.css">';
            break;
    }
    ?>
</head>

<body>
    <div class="wrapper">
        <header class="header" id="header">
            <div class="header__wrapper">
                <!-- <div class="header__top" id="headerTop">
                    <div class="header__top_lang ">
                        
                    </div>
                </div> -->
                <div class="header__bottom">
                    <?php include "includes/header/navigation.php" ?>
                </div>




            </div>
        </header>