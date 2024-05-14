<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Регистрация';
$page = 'login-confirm';
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
                    <a href="/registration.php" class="login__part1-back">
                        <svg>
                            <use xlink:href="/assets/icons/sprite.svg#arrow-left"></use>
                        </svg>
                    </a>
                    <div class="login__form">
                        <div class="login__form-title">Регистрация</div>
                        <section class="confirm">
                            <h3 class="confirm-title">
                                На номер
                                <span class="confirm-title__number">+998 (99) 123 45 67</span>
                                отправлен 4 - х значный код
                            </h3>

                            <form class="confirm-form" action="">
                                <div class="confirm-form__content">
                                    <input type="text" id="input1" maxlength="1" size="1" pattern="[0-9]" required placeholder="" oninput="moveToNextOrPreviousInput(event, this)">
                                    <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="" oninput="moveToNextOrPreviousInput(event, this)">
                                    <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="" oninput="moveToNextOrPreviousInput(event, this)">
                                    <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="" oninput="moveToNextOrPreviousInput(event, this)">
                                </div>
                                <p class="error__message">Вы ввели неверный код!</p>
                                <a class="getcode_again-text">Отправить заново через: <span>00:<div id="getcode-timer__second">60</div></span></a>
                                <a href="" class="getcode_again-link ">Отправить код заново</a>
                                <button type="submit" class="login__btn">Войти</button>
                            </form>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

<script>
    window.addEventListener('load', (event) => {
        // Получаем ссылку на первый input элемент
        const firstInput = document.getElementById('input1');
        // Устанавливаем фокус на первый input элемент
        firstInput.focus();
    });
</script>

<script>
    // скрипт для страницы получить код

    let seconds = document.querySelector('#getcode-timer__second');
    let resenCode = document.querySelector('.getcode_again-link');
    let sec = 3
    window.addEventListener('load', () => {
        let interval = setInterval(() => {
            sec--;
            if (sec < 10) {
                sec = '0' + sec;
            }

            seconds.innerHTML = sec;
            if (sec <= 0) {
                resenCode.classList.add('active');
                clearInterval(interval);
            }
        }, 1000);
    });
</script>

<?php include "partials/footer.php" ?>