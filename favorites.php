<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Парфюмерия';
$page = 'favorites';
$img = 'main';
$url = 'https://';
$pageActive = "6";


include "partials/header.php" ?>

<main>

    <section>
        <div class="container-self">
            <div class="catalog__page">
                <div class="catalog">
                    <h2 class="main-title">Изранное</h2>
                    <div class="mainSection__wrapper">

                        <div class="catalog-cont ">
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
                        <!-- блок появляется когда нет избранного -->
                        <div class="container-fluid">
                           <div class="not__favorites">
                            <div class="not__favorites__text">
                                <div class="not__favorites__text-top">
                                    В избранном пока пусто
                                </div>
                                <div class="not__favorites__text-button">
                                    Перейдите в каталог, чтобы сохранить понравившиеся товары
                                </div>
                            </div>
                        </div> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="layer"></div>
    </section>

</main>



<?php include "partials/footer.php" ?>