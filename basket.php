<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Корзина';
$page = 'basket';
$img = 'main';
$url = 'https://';
$pageActive = "9";


include "partials/header.php" ?>

<main class="main">
    <div class="container-fluid">
        <section class="basket">
            <div class="basket-title">Корзина</div>
            <div class="basket__content">
                <div class="basket__content__cards">
                    <div class="basket__cards__card">
                        <div class="basket__card__left">
                            <div class="basket__cards__card-cancel">
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#cancel"></use>
                                </svg>
                            </div>
                            <div class="basket__cards__card-img">
                                <img src="/assets/images/product.png" alt="">
                            </div>
                            <div class="basket__cards__card-text">
                                <div class="basket__product-name">Лак для ногтей Essie Gel Couture 50 мл</div>
                                <div class="basket__product-brand">Growing haicare</div>
                            </div>
                        </div>
                        <div class="basket__card__right">
                            <div class="basket__card__right__counter">
                                <div class="minus">
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#minus"></use>
                                    </svg>
                                </div>
                                <input  id="people-counter" type="number" style="background: transparent; outline: none; border: none; color: white; width: 33px;text-align: center;" class="people-number" value="1">
                                <div class="plus">
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#plus"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="basket__card__right-price">2 400 000<span>сум</span></div>

                        </div>
                        <!-- если товара нет на складе -->
                        <div class="not__product">
                            <p>Товара временно нет на складе</p>
                        </div>
                    </div>
                    <div class="basket__cards__card">
                        <div class="basket__card__left">
                            <div class="basket__cards__card-cancel">
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#cancel"></use>
                                </svg>
                            </div>
                            <div class="basket__cards__card-img">
                                <img src="/assets/images/product.png" alt="">
                            </div>
                            <div class="basket__cards__card-text">
                                <div class="basket__product-name">Лак для ногтей Essie Gel Couture 50 мл</div>
                                <div class="basket__product-brand">Growing haicare</div>
                            </div>
                        </div>
                        <div class="basket__card__right">
                            <div class="basket__card__right__counter">
                                <div class="minus">
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#minus"></use>
                                    </svg>
                                </div>
                                <input id="people-counter" type="number" style="background: transparent; outline: none; border: none; color: white; width: 33px;text-align: center;" class="people-number" value="1">
                                <div class="plus">
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#plus"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="basket__card__right-price">2 400 000<span>сум</span></div>

                        </div>

                    </div>
                    <div class="basket__cards__card">
                        <div class="basket__card__left">
                            <div class="basket__cards__card-cancel">
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#cancel"></use>
                                </svg>
                            </div>
                            <div class="basket__cards__card-img">
                                <img src="/assets/images/product.png" alt="">
                            </div>
                            <div class="basket__cards__card-text">
                                <div class="basket__product-name">Лак для ногтей Essie Gel Couture 50 мл</div>
                                <div class="basket__product-brand">Growing haicare</div>
                            </div>
                        </div>
                        <div class="basket__card__right">
                            <div class="basket__card__right__counter">
                                <div class="minus">
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#minus"></use>
                                    </svg>
                                </div>
                                <input id="people-counter" type="number" style="background: transparent; outline: none; border: none; color: white; width: 33px;text-align: center;" class="people-number" value="1">
                                <div class="plus">
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#plus"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="basket__card__right-price">2 400 000<span>сум</span></div>

                        </div>

                    </div>

                </div>
                <div class="basket__content__check">
                    <div class="basket__content__check-number">
                        Итого: <span>8 700 000</span> сум
                    </div>
                    <a href="/decor.php" class="basket__content__check-btn">Оформить заказ</a>
                </div>
            </div>
            <!-- если нет товара в корзинке -->
            <div class="basket__notbasket">
                <div>Ваша корзина пуста</div>
                <a href="./index.php">Вернуться к покупкам</a>
            </div>
        </section>
    </div>


</main>


<?php include "partials/footer.php" ?>