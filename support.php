<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Поддержка';
$page = 'support';
$img = 'main';
$url = 'https://';
$pageActive = "4";


include "partials/header.php" ?>


<main class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-10">
                <h1>Поддержка</h1>
                <section class="support">
                    <div class="support__top">
                        <div class="support__top-text">
                            Напишите нам в тех.поддержку Telegram и мы ответим на все ваши вопросы и сориентируем по вашему заказу
                        </div>
                        <a href="https://t.me/MRX010101010" class="support__top-link">
                            <p>Написать в поддержку</p>
                            <svg class="support__top-link-icon" aria-hidden="true">
                                <use xlink:href="/assets/icons/sprite.svg#telegram"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="support__bottom">
                        <div class="support__bottom-text">
                            Или обратитесь к нам по следующим контактам:
                        </div>
                        <div class="support__bottom__row">
                            <a href="tel:+998 90 990 90 90" class="support__bottom__row-tel">
                                <svg class="support__bottom__row-tel-icon" aria-hidden="true">
                                    <use xlink:href="/assets/icons/sprite.svg#tel"></use>
                                </svg>
                                <p>+998 90 990 90 90</p>
                            </a>
                            <a href="mailto:mialine@office.uz" class="support__bottom__row-tel">
                                <svg class="support__bottom__row-tel-icon" aria-hidden="true">
                                    <use xlink:href="/assets/icons/sprite.svg#mail"></use>
                                </svg>
                                <p>mialine@office.uz</p>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
</main>


<?php include "partials/footer.php" ?>