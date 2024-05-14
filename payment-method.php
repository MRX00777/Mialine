<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Оплата и доставка';
$page = 'payment-method';
$img = 'main';
$url = 'https://';
$pageActive = "2";


include "partials/header.php" ?>


<main class="main">
    <div class="container-fluid">


            <div class="col-lg-12 col-xl-10">
                <h2 class="main-title">Оплата и доставка</h2>

                <section class="top">
                    <div class="top__title">
                        <div class="top__title-icon">
                            <img src="/assets/icons/wallet.svg" alt="">
                        </div>
                        <div class="section-title">Для оплаты заказов в нашем интернет - магазине вам доступны способы оплаты:</div>
                    </div>
                    <div class="top__content">
                        <div class="top__content__item">
                            <p>Наличные или терминал</p>
                        </div>
                        <div class="top__content__item">
                            <img src="/assets/icons/payme.svg" alt="">
                        </div>
                        <div class="top__content__item">
                            <img src="/assets/icons/click.svg" alt="">
                        </div>
                        <div class="top__content__item">
                            <img src="/assets/icons/uzum.svg" alt="">
                        </div>
                    </div>
                    <div class="top-text">*Важно: после олучения заказа клиентом - заказ возврату не подлежит</div>
                </section>

                <section class="conditions">
                    <div class="top__title">
                        <div class="top__title-icon">
                            <img src="/assets/icons/cube.svg" alt="">
                        </div>
                        <div class="section-title">Условия доставки</div>
                    </div>
                    <ul>
                        <li>Срок доставки заказов, если есть в наличии на нашем складе: <span>1</span> день</li>
                        <li>Срок доставки заказов, если нет в наличии на нашем складе: до <span>14</span> дней</li>
                        <li>Если вы заказываете товары на сумму от <b><span>500 000</span> сум</b> - доставка <b>бесплатная</b>, если менее 500 000 сум - сумма доставки составляет <b><span>20 000</span> сум</b></li>
                    </ul>
                </section>

                <section class="bottom">
                    <div class="section-title bottom-text">
                        Если у вас возникли вопросы по нашему сервису, напишите нам в Telegram - поддержку
                    </div>
                    <a href="/registration.php" class="bottom__btn">
                        <p>Написать в поддержку</p>
                        <div class="bottom__btn-icon">
                            <svg class="page-link arrow" aria-hidden="true">
                                <use xlink:href="/assets/icons/sprite.svg#telegram"></use>
                            </svg>
                        </div>
                    </a>
                </section>
            </div>

        </div>
    </div>

</main>

<?php include "partials/footer.php" ?>