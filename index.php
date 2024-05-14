<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Главная';
$page = 'index';
$img = 'main';
$url = 'https://';

include "partials/header.php" ?>

<main>
    <section class="categoryIndex">
        <div class="categoryIndex__wrapper">
            <div class="swiper mySwiperCategoryIndex">
                <div class="swiper-wrapper">
                    <?php for ($i = 1; $i < 20; $i++) : ?>
                        <div class="swiper-slide">
                            <a href="/catalog_inner.php" class="categoryIndex__card">
                                <div class="categoryIndex__card_img img">
                                    <img data-lazy="/assets/images/category.png" alt="img">
                                </div>
                                <div class="categoryIndex__card_text">
                                    Все для макияжа
                                </div>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
            <?php $navigation = "categoryIndex";
            include "includes/swiperButtons.php" ?>
        </div>
    </section>
    <section class="advertising">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <?php for ($i = 0; $i < 2; $i++) : ?>
                    <div class="col-12 col-md-6">
                        <a href="/catalogCard_inner.php" class="advertising__img img">
                            <img data-lazy="/assets/images/index-photo.png" alt="img">
                        </a>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>
    <section class="mainSection popular">
        <div class="mainSection__wrapper">
            <?php $linkName = "Популярное";
            $linkHref = "/catalog_inner.php";
            include "includes/mainSectionTitle.php" ?>
            <div class="swiper mySwiperPopular">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="swiper-slide">
                            <div  class="prodcutCard">
                                <?php $isFav = false;
                                $isCart = false;
                                include "includes/cardButtons.php" ?>
                                <a href="/catalogCard_inner.php" class="prodcutCard__item <?= $i == 0 ?  'first' : '' ?>">
                                    <div class="prodcutCard__item_top">
                                        <div class="prodcutCard__item_img img">
                                            <img data-lazy="/assets/images/product.png" alt="img">
                                        </div>
                                        <div class="prodcutCard__item_name">
                                            <p>Блеск для губ Kiss buttons lips</p>
                                        </div>
                                    </div>
                                    <div class="prodcutCard__item_bottom">
                                        <div class="prodcutCard__item_brand">Growing haicare</div>
                                        <div class="prodcutCard__item_price">
                                            <span class="prodcutCard__item_price_item prodcutCard__item_price_item-old">1 300 000 сум</span>
                                            <span class="prodcutCard__item_price_item prodcutCard__item_price_item-new">1 250 000 сум</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <?php $navigation = "popular";
                include "includes/swiperButtons.php" ?>
            </div>
        </div>
    </section>
    <section class="mainSection brands swiperLinear">
        <div class="mainSection__wrapper">
            <?php $linkName = "Бренды";
            $linkHref = "/brands.php";
            include "includes/mainSectionTitle.php" ?>
            <div class="swiper mySwiperBrands">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="swiper-slide">
                            <a href="/brands-product.php" class="brandsCard <?= $i == 0 ? 'first' : '' ?>">
                                <div class="brandsCard__img img">
                                    <img data-lazy="/assets/images/brand.png" alt="img">
                                </div>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
                <?php $navigation = "brands";
                include "includes/swiperButtons.php" ?>
            </div>
        </div>
    </section>
    <section class="mainSection newProduct">
        <div class="mainSection__wrapper">
            <?php $linkName = "Новые поступления";
            $linkHref = "/catalog_inner_details.php";
            include "includes/mainSectionTitle.php" ?>
            <div class="swiper mySwiperNewProduct">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="swiper-slide">
                            <div class="prodcutCard">
                                <?php $isFav = false;
                                $isCart = false;
                                include "includes/cardButtons.php" ?>
                                <a href="/catalogCard_inner.php" class="prodcutCard__item <?= $i == 0 ?  'first' : '' ?>">
                                    <div class="prodcutCard__item_top">
                                        <div class="prodcutCard__item_img img">
                                            <img data-lazy="/assets/images/product-new.png" alt="img">
                                        </div>
                                        <div class="prodcutCard__item_name">
                                            <p>Блеск для губ Kiss buttons lips</p>
                                        </div>
                                    </div>
                                    <div class="prodcutCard__item_bottom">
                                        <div class="prodcutCard__item_brand">Growing haicare</div>
                                        <div class="prodcutCard__item_price">
                                            <span class="prodcutCard__item_price_item prodcutCard__item_price_item-old">1 300 000 сум</span>
                                            <span class="prodcutCard__item_price_item prodcutCard__item_price_item-new">1 250 000 сум</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <?php $navigation = "newProduct";
                include "includes/swiperButtons.php" ?>
            </div>
        </div>
    </section>
    <section class="mainSection bestSeller">
        <div class="mainSection__wrapper">
            <?php $linkName = "Бестселлеры";
            $linkHref = "/catalog_inner_details.php";
            include "includes/mainSectionTitle.php" ?>
            <div class="swiper mySwiperBestSeller">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="swiper-slide">
                            <div class="prodcutCard">
                                <?php $isFav = false;
                                $isCart = false;
                                include "includes/cardButtons.php" ?>
                                <a href="/catalogCard_inner.php" class="prodcutCard__item <?= $i == 0 ?  'first' : '' ?>">
                                    <div class="prodcutCard__item_top">
                                        <div class="prodcutCard__item_img img">
                                            <img data-lazy="/assets/images/product-best.png" alt="img">
                                        </div>
                                        <div class="prodcutCard__item_name">
                                            <p>Блеск для губ Kiss buttons lips</p>
                                        </div>
                                    </div>
                                    <div class="prodcutCard__item_bottom">
                                        <div class="prodcutCard__item_brand">Growing haicare</div>
                                        <div class="prodcutCard__item_price">
                                            <span class="prodcutCard__item_price_item prodcutCard__item_price_item-old">1 300 000 сум</span>
                                            <span class="prodcutCard__item_price_item prodcutCard__item_price_item-new">1 250 000 сум</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <?php $navigation = "bestSeller";
                include "includes/swiperButtons.php" ?>
            </div>
        </div>
    </section>
    <section class="mainSection news">
        <div class="mainSection__wrapper">
            <?php $linkName = "Из мира парфюмерии и косметики";
            $linkHref = "/news.php";
            include "includes/mainSectionTitle.php" ?>
            <div class="mainSection__wrapper_container">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="prodcutCard">
                        <a href="/news-details.php" class="prodcutCard__item">
                            <div class="prodcutCard__item_top">
                                <div class="prodcutCard__item_img img">
                                    <img data-lazy="/assets/images/product-news.png" alt="img">
                                </div>
                                <div class="prodcutCard__item_name">
                                    <p>Выведена новая формула современного крема для ухода за кожей лица</p>
                                </div>
                            </div>
                            <div class="prodcutCard__item_bottom">
                                <div class="prodcutCard__item_brand">02/03/2024</div>
                            </div>
                        </a>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </section>
</main>


<?php include "partials/footer.php" ?>