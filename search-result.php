<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Парфюмерия';
$page = 'search-result';
$img = 'main';
$url = 'https://';
$pageActive = "7";


include "partials/header.php" ?>

<main>

    <section>
        <div class="container-fluid">
            <h2 class="search-title">Результаты поиска</h2>
            <div class="search-inputs">
                <input type="text" placeholder="поиск">
                <button type="submit">Найти</button>
            </div>
            <div class="result__input">
                <p>Результаты поиска по запросу</p>
                <div class="result__input-text">
                    <span>“</span>крем для рук<span>”</span>
                </div>
            </div>
        </div>
            <div class="catalog__page">
                <?php include "includes/filter.php" ?>
                <div class="catalog">
                    <div class="mainSection__wrapper">
                        <div class="catalogTitle-line">

                            <button class="dropdownActivator">
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#filter-logo"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="catalog-cont">
                            <?php for ($i = 0; $i < 15; $i++) : ?>
                                <div class="catalogCard">
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
                            <?php endfor ?>
                        </div>
                    </div>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled" aria-disabled="true">
                                <svg class="page-link arrow" aria-hidden="true">
                                    <use xlink:href="/assets/icons/sprite.svg#arrow-left"></use>
                                </svg>
                            </li>
                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="">2</a></li>
                            <li class="page-item"><a class="page-link" href="">3</a></li>
                            <li class="page-item"><a class="page-link" href="">4</a></li>
                            <li class="page-item"><a class="page-link" href="">5</a></li>
                            <li class="page-item">
                                <a class="" href="" rel="next" aria-label="Next »">
                                    <svg class="page-link arrow" aria-hidden="true">
                                        <use xlink:href="/assets/icons/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="layer"></div>
    </section>

    <!-- нижние две блоки появляются тогда когда нет резльтатов поиска -->

    <div class="container-fluid">
        <div class="not__search__result">
            <div class="not__search__result-text">
                К сожалению, по вашему запросу ничего не найдено. Попробуйте другой
            </div>
        </div>
    </div>

    <section class="mainSection popular">
            <div class="mainSection__wrapper">
                <h3>Вам может понравиться</h3>
                <div class="swiper mySwiperPopular">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                            <div class="swiper-slide">
                                <div class="prodcutCard">
                                    <?php $isFav = false;
                                    $isCart = false;
                                    include "includes/cardButtons.php" ?>
                                    <a href="#!" class="prodcutCard__item <?= $i == 0 ?  'first' : '' ?>">
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

        </section>


</main>



<?php include "partials/footer.php" ?>