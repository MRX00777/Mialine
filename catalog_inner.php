<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Парфюмерия';
$page = 'catalog_inner';
$img = 'main';
$url = 'https://';


include "partials/header.php" ?>

<main>
    <div class="container-fluid">
        <div class="pages__name">
            <a href="/index.php" class="pages__name-info">Главная</a>
            <div class="pages__name-slash">/</div>
            <a href="/catalog_inner.php" class="pages__name-info">Парфюмерия</a>
        </div>
    </div>

    <section>
        <div class="container-self">
            <div class="catalog__page">
                <?php include "includes/filter.php" ?>
                <div class="catalog">
                    <h2 class="main-title">Парфюмерия</h2>
                    <div class="mainSection__wrapper">
                        <div class="catalogTitle-line">

                            <?php include "includes/status.php" ?>

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

</main>



<?php include "partials/footer.php" ?>