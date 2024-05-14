<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Оформление заказа';
$page = 'decor';
$img = 'main';
$url = 'https://';


include "partials/header.php" ?>

<main class="main">
    <div class="container-fluid">
        <h2 class="decor-title">Оформление заказа</h2>

        <form action="">
            <div class="row">
                <div class="col-lg-12 col-xl-9">

                    <div class="adres">
                        <div class="adres-title">Адрес доставки</div>
                        <div class="adres__cart">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47965.63083240166!2d69.23112155!3d41.290327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b084eab8999%3A0xb2d2bdd029eeec98!2sXalqlar%20Do&#39;stligi!5e0!3m2!1sen!2s!4v1712986747086!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="adres__inputs">
                            <div class="adres__inputs__item">
                                <p>Дом</p>
                                <input type="number" placeholder="Введите №" require>
                            </div>
                            <div class="adres__inputs__item">
                                <p>Этаж</p>
                                <input type="number" placeholder="Введите этаж" require>
                            </div>
                            <div class="adres__inputs__item">
                                <p>Подъезд</p>
                                <input type="number" placeholder="Введите №" require>
                            </div>
                            <div class="adres__inputs__item">
                                <p>Квартира</p>
                                <input type="number" placeholder="Введите №" require>
                            </div>
                        </div>

                        <div class="data__user">
                            <div class="adres-title data__user-title">Данные получателя</div>
                            <div class="data__user__row">
                                <div class="adres__inputs__item data__user__row-item">
                                    <p>Имя<span>*</span></p>
                                    <input type="text" placeholder="Введите имя" require>
                                </div>
                                <div class="adres__inputs__item data__user__row-item">
                                    <p>Фамилия<span>*</span></p>
                                    <input type="text" placeholder="Введите фамилию" require>
                                </div>
                            </div>

                            <div class="data__user__row">
                                <div class="adres__inputs__item">
                                    <p>Телефон<span>*</span></p>
                                    <div class="input">
                                        <input style="color: #091C43;font-size: 14px;width: 100%;" type="tel" id="telIndex" class="telCountry" required>
                                        <input class="info__fill_number" type="hidden" name="phone">
                                    </div>
                                </div>
                                <div class="adres__inputs__item data__user__row-item">
                                    <p>Номер паспорта или ID карты<span>*</span></p>
                                    <input type="text" placeholder="№ паспорта или ID карты"  require maxlength="15">
                                </div>
                            </div>

                        </div>

                        <div class="payment__method ">
                            <div class="adres-title payment__method-title">Способ оплаты</div>
                            <div class="payment__method__content">
                                <label class="round-checkbox">
                                    <input type="radio" name="myCheckbox" class="real-checkbox">
                                    <p>Наличные или терминал</p>
                                    <div class="unavailable">
                                        <div class="unavailable__content">
                                            <svg>
                                                <use xlink:href="/assets/icons/sprite.svg#question"></use>
                                            </svg>

                                            <div class="unavailable__content-text">
                                                В заказе присутствуют товары с доставкой 14 дней, которых пока нет на нашем
                                                складе. Оплата наличными или по терминалу недоступны.
                                            </div>
                                        </div>

                                    </div>
                                </label>
                                <label class="round-checkbox click">
                                    <input type="radio" name="myCheckbox" class="real-checkbox">
                                    <img src="/assets/images/payme-logo.svg" alt="">
                                </label>
                                <label class="round-checkbox payme">
                                    <input type="radio" name="myCheckbox" class="real-checkbox">
                                    <img src="/assets/images/click-logo.svg" alt="">
                                </label>
                                <label class="round-checkbox payme">
                                    <input type="radio" name="myCheckbox" class="real-checkbox">
                                    <img src="/assets/images/uzum-logo.svg" alt="">
                                </label>
                            </div>
                        </div>

                        <div class="basket__product">
                            <div class="adres-title basket__product-title">Товары в заказе</div>
                            <div class="basket__product__cards">
                                <div class="basket__product__cards-card">
                                    <div class="card__left">
                                        <img src="/assets/images/product.png" alt="">
                                        <div class="card__left__text">
                                            <div class="card__left__text-name">Тушь для ресниц Mascara</div>
                                            <div class="card__left__text-brand">Growing haicare</div>
                                        </div>
                                    </div>

                                    <div class="card__right">
                                        <div class="card__right-amount"><span>x</span> 10</div>
                                        <div class="card__right-money">4 500 000 <span>сум</span></div>
                                    </div>
                                </div>
                                <div class="basket__product__cards-card">
                                    <div class="card__left">
                                        <img src="/assets/images/product.png" alt="">
                                        <div class="card__left__text">
                                            <div class="card__left__text-name">Тушь для ресниц Mascara</div>
                                            <div class="card__left__text-brand">Growing haicare</div>
                                        </div>
                                    </div>

                                    <div class="card__right">
                                        <div class="card__right-amount"><span>x</span> 10</div>
                                        <div class="card__right-money">4 500 000 <span>сум</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-xl-3">
                    <div class="check ">
                        <div class="check__row">
                            <div class="check__row-text">Товары на сумму:</div>
                            <div class="check__row-number">8 800 000 <span>сум</span></div>
                        </div>
                        <div class="delivery">
                            *до бесплатной доставки осталось добавить товаров на
                            <span>90 000</span> сум
                        </div>
                        <div class="check__row">
                            <div class="check__row-text">Стоимость доставки:</div>
                            <div class="check__row-number">24 000 <span>сум</span></div>
                        </div>

                        <div class="result">
                            <div class="result__row">
                                <div class="result__row-text">Итого к оплате:</div>
                                <div class="result__row-number">8 800 000<span>сум</span></div>
                            </div>
                            <button type="submit" class="result-btn">Оформить заказ</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>

    <?php include "includes/modal__success.php" ?>

</main>


<?php include "partials/footer.php" ?>