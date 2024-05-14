<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Войти';
$page = 'login';
$img = 'main';
$url = 'https://';


include "partials/header.php" ?>

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div class="welcome">
                    <img src="/assets/images/registration.png" alt="">

                    <div class="welcome__content">
                        <div class="welcome__content__top">
                            <div class="welcome__content__top-title">
                                Добро пожаловать в Mialine!
                            </div>
                            <div class="welcome__content__top-text">
                                Мир брендовых косметических средств
                            </div>
                        </div>

                        <div class="welcome__content__bottom">
                            <div class="welcome__content__bottom-number">
                                3 000 +
                            </div>
                            <div class="welcome__content__bottom-text">
                                товаров в нашем интернет - магазине
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <section class="login__part1">
                    <form action="" class="login__form">
                        <div class="login__form-title">Войти</div>
                        <div class="login__form__content">
                            <p>Номер телефона<span>*</span></p>
                            <div class="input">
                                <input type="tel" id="telIndex" class="telCountry" required>
                                <input class="info__fill_number" type="hidden" name="phone" pattern="[0-9]" required>
                                <p class="error__message">Аккаунт не найден!</p>
                            </div>
                            <div class="input">
                                <a href="/login-confirm.php" class="btn-login">получить код</a>
                            </div>
                            <div class="registration">
                                <p class="regitstration-question">Еще нет аккаунта?</p>
                                <a href="/registration.php" class="registration-btn">Зарегистрироваться</a>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</main>

<?php include "partials/footer.php" ?>