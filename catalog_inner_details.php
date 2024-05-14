<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Парфюмерия';
$page = 'catalog_inner_details';
$img = 'main';
$url = 'https://';


include "partials/header.php" ?>

<main>
    <div class="container-fluid">
        <div class="pages__name">
            <a href="/index.php" class="pages__name-info">Главная</a>
            <div class="pages__name-slash">/</div>
            <a href="/catalog_inner.php" class="pages__name-info">Парфюмерия</a>
            <div class="pages__name-slash">/</div>
            <a href="/catalog_inner.php" class="pages__name-info">Парфюмированная вода</a>
        </div>
    </div>

    <section>
        <div class="container-self">
            <div class="container-fluid">
                <a href="/catalog_inner.php" class="back-page">
                    <div class="back-page-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.27361 14.4948C7.39242 14.376 7.39242 14.1834 7.27361 14.0646L0.859006 7.64996L0.852079 7.64325C0.832504 7.62488 0.816903 7.60269 0.806239 7.57805C0.795574 7.55342 0.790071 7.52686 0.790071 7.50001C0.790071 7.47317 0.795574 7.44661 0.806239 7.42197C0.816903 7.39734 0.832504 7.37515 0.852079 7.35678L0.859006 7.35007L7.27361 0.935462C7.39241 0.816658 7.39241 0.62404 7.27361 0.505236C7.15481 0.386433 6.96219 0.386433 6.84338 0.505236L0.431791 6.91683C0.353422 6.99137 0.290867 7.08096 0.247883 7.18025C0.204185 7.2812 0.18164 7.39002 0.18164 7.50001C0.18164 7.61001 0.204185 7.71883 0.247883 7.81977C0.290867 7.91906 0.353422 8.00865 0.431791 8.0832L6.84339 14.4948C6.96219 14.6136 7.15481 14.6136 7.27361 14.4948Z" fill="#000001" />
                        </svg>
                    </div>
                    <div class="back-page-title">
                        Парфюмерия
                    </div>
                </a>
                <div class="inner-title">Парфюмерованная вода</div>
            </div>




            <div class="catalog__page">
                <?php include "includes/filter.php" ?>
                <div class="catalog">
                    <h2 class="main-title">Парфюмированная вода</h2>
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