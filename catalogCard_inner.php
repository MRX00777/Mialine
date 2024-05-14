<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Парфюмерия';
$page = 'catalogCard_inner';
$img = 'main';
$url = 'https://';


include "partials/header.php" ?>

<main>
    <div class="container-fluid">
        <div class="pages__name">
            <a href="/index.php" class="pages__name-info">Главная</a>
            <div class="pages__name-slash">/</div>
            <a href="/news.php" class="pages__name-info">Парфюмерия</a>
            <div class="pages__name-slash">/</div>
            <a href="/news.php" class="pages__name-info">Парфюмированная вода</a>
            <div class="pages__name-slash">/</div>
            <a href="/news.php" class="pages__name-info">К от Dolce & Gabbana Intense</a>
        </div>
    </div>

    <section>
        <div class="container-fluid">
            <div class="images__row">

                <div class="add_in-basket">
                    <img src="/assets/icons/checked.svg" alt="">
                    <p>Добавлено в корзину</p>
                </div>

                <div class="images">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-fancybox="gallery" data-src="/assets/images/product3.png">
                                <img data-lazy="/assets/images/product3.png" />
                            </div>
                            <div class="swiper-slide" data-fancybox="gallery" data-src="/assets/images/product2.png">
                                <img data-lazy="/assets/images/product2.png" />
                            </div>
                            <div class="swiper-slide" data-fancybox="gallery" data-src="/assets/images/product.png">
                                <img data-lazy="/assets/images/product.png" />
                            </div>
                            <div class="swiper-slide" data-fancybox="gallery" data-src="/assets/images/product3.png">
                                <img data-lazy="/assets/images/product3.png" />
                            </div>
                            <div class="swiper-slide" data-fancybox="gallery" data-src="/assets/images/product2.png">
                                <img data-lazy="/assets/images/product2.png" />
                            </div>
                            <div class="swiper-slide">
                                <video src="/assets/vidio/video.mp4" controls style="width: 100%;"></video>
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/assets/images/product3.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/assets/images/product2.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/assets/images/product.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/assets/images/product3.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/assets/images/product2.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/assets/images/product.png" />
                                <div class="slider__video__icon">
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#video"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide">

                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <svg>
                                <use xlink:href="/assets/icons/sprite.svg#arrow-top"></use>
                            </svg>
                        </div>
                        <div class="swiper-button-prev">
                            <svg>
                                <use xlink:href="/assets/icons/sprite.svg#arrow-down"></use>
                            </svg>
                        </div>


                    </div>


                </div>

                <div class="parametr ">
                    <div class="parametr-title">Тушь для ресниц Mascara</div>
                    <div class="parametr-links">
                        <a href="/catalog_inner_details.php" class="parametr-links-link">Туши для ресниц</a>
                        <div class="parametr-links-border"></div>
                        <a href="/brands-product.php" class="parametr-links-link">Growing haicare</a>
                    </div>
                    <div class="parametr-info">
                        K Intense by Dolce&Gabbana – это сильный и харизматичный аромат для мужчин, объединяющий в себе соблазнительный древесно-кожаный аккорд с нотами шафрана и инжира. Композиция создана парфюмером Дафной Бюже эксклюзивно для Dolce&Gabbana. В верхних нотах звучит пряный аккорд шафрана.
                    </div>
                    <div class="parametr-border"></div>
                    <div class="parametr__form">
                        <div class="parametr__form__price">
                            <div class="parametr__form__price-origin"><span>1 000 000</span> сум</div>
                            <div class="parametr__form__price-old">1 300 000 <span>сум</span></div>
                        </div>
                        <div class="parametr__row">
                            <div class="parametr__form__counter">
                                <div class="minus">
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#minus"></use>
                                    </svg>
                                </div>
                                <input readonly id="people-counter" type="number" style="background: transparent; outline: none; border: none; color: white; width: 33px;text-align: center;" class="people-number" value="1">
                                <div class="plus">
                                    <svg>
                                        <use xlink:href="/assets/icons/sprite.svg#plus"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="parametr__form__right">
                                <a href="" class="parametr__form-submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.52103 4.16723H3.08124L2.24307 16.7943C2.19233 17.5386 2.29518 18.2855 2.5452 18.9884C2.79523 19.6913 3.1871 20.3353 3.69649 20.8805C4.20587 21.4256 4.82189 21.8601 5.50628 22.1572C6.19067 22.4542 6.92882 22.6073 7.67489 22.6071H15.7083C16.4534 22.6072 17.1906 22.4544 17.8742 22.158C18.5578 21.8617 19.1733 21.4281 19.6825 20.8842C20.1917 20.3403 20.5839 19.6976 20.8346 18.9959C21.0853 18.2943 21.1893 17.5487 21.1401 16.8052L20.2911 4.16723H13.4061H6.52103ZM4.10447 5.25577H6.52103V5.94155C6.52103 6.62056 6.65477 7.29292 6.91462 7.92025C7.17447 8.54757 7.55533 9.11757 8.03546 9.5977C8.51559 10.0778 9.08559 10.4587 9.71291 10.7185C10.3402 10.9784 11.0126 11.1121 11.6916 11.1121C12.3706 11.1121 13.043 10.9784 13.6703 10.7185C14.2976 10.4587 14.8676 10.0778 15.3477 9.5977C15.8279 9.11757 16.2087 8.54757 16.4686 7.92025C16.7284 7.29292 16.8622 6.62056 16.8622 5.94155V5.25577H19.2787L20.0625 16.8705C20.1028 17.4665 20.0201 18.0645 19.8194 18.6272C19.6187 19.1898 19.3043 19.7052 18.8959 20.1412C18.4875 20.5772 17.9938 20.9244 17.4454 21.1614C16.897 21.3984 16.3057 21.5199 15.7083 21.5186H7.67489C7.07841 21.5184 6.48832 21.3958 5.94122 21.1581C5.39413 20.9205 4.90168 20.573 4.49444 20.1372C4.0872 19.7014 3.77385 19.1865 3.57382 18.6246C3.37379 18.0627 3.29135 17.4656 3.33161 16.8705L4.10447 5.25577ZM7.60957 5.25577H15.7736V5.94155C15.7736 7.02418 15.3436 8.06245 14.578 8.82798C13.8125 9.59351 12.7742 10.0236 11.6916 10.0236C10.609 10.0236 9.5707 9.59351 8.80517 8.82798C8.03964 8.06245 7.60957 7.02418 7.60957 5.94155V5.25577Z" fill="white" />
                                    </svg>
                                </a>
                                <div class="parametr__form-like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                        <g clip-path="url(#clip0_287_2222)">
                                            <path d="M12.0567 23.7251C11.882 23.7264 11.7089 23.6929 11.5474 23.6264C11.3859 23.5599 11.2392 23.4619 11.1161 23.3381L2.15319 14.3685C1.34765 13.5609 0.746098 12.5731 0.39838 11.4867C0.0506612 10.4004 -0.0332207 9.24681 0.153682 8.12159C0.340585 6.99636 0.792893 5.93186 1.47314 5.01626C2.15339 4.10065 3.042 3.3603 4.06536 2.85653C5.35603 2.21089 6.81325 1.97531 8.24161 2.18139C9.66996 2.38746 11.0012 3.02534 12.0567 4.00947C13.1128 3.02635 14.4439 2.38916 15.872 2.18312C17.3001 1.97708 18.7571 2.21203 20.048 2.85653C21.0714 3.3603 21.96 4.10065 22.6403 5.01626C23.3205 5.93186 23.7728 6.99636 23.9597 8.12159C24.1466 9.24681 24.0627 10.4004 23.715 11.4867C23.3673 12.5731 22.7658 13.5609 21.9602 14.3685L12.9893 23.3381C12.8671 23.461 12.7217 23.5584 12.5617 23.6248C12.4016 23.6913 12.23 23.7253 12.0567 23.7251ZM7.1587 3.46122C6.29771 3.45644 5.44808 3.65779 4.6808 4.04844C3.83742 4.46678 3.10612 5.08046 2.54774 5.83843C1.98937 6.59641 1.62007 7.47676 1.47056 8.40625C1.33058 9.31121 1.40543 10.2364 1.68904 11.1071C1.97266 11.9778 2.4571 12.7696 3.10323 13.4185L12.0728 22.3881L21.0102 13.4185C21.6563 12.7696 22.1407 11.9778 22.4244 11.1071C22.708 10.2364 22.7828 9.31121 22.6428 8.40625C22.4933 7.47676 22.124 6.59641 21.5657 5.83843C21.0073 5.08046 20.276 4.46678 19.4326 4.04844C18.3392 3.52018 17.1082 3.34655 15.9113 3.5518C14.7145 3.75705 13.6117 4.33094 12.7568 5.19332C12.5699 5.37667 12.3185 5.47938 12.0567 5.47938C11.7949 5.47938 11.5435 5.37667 11.3566 5.19332C10.2376 4.08935 8.73063 3.46757 7.1587 3.46122Z" fill="#1C1F35" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_287_2222">
                                                <rect width="24" height="24" fill="red" transform="translate(0.0566406 0.917175)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="parametr-border"></div>
                    <div class="parametr__bottom">
                        <div class="parametr__bottom__content">
                            <div class="parametr__bottom__content-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                    <path d="M22.0566 5.81432V16.1594" stroke="#FF3F40" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M25.9355 32.97H32.4012" stroke="#FF3F40" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.24609 16.1593H38.8675V36.8494C38.8675 37.5353 38.595 38.1932 38.11 38.6782C37.6249 39.1632 36.9671 39.4357 36.2812 39.4357H7.83235C7.14643 39.4357 6.48861 39.1632 6.00359 38.6782C5.51857 38.1932 5.24609 37.5353 5.24609 36.8494V16.1593Z" stroke="#FF3F40" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.24609 16.1594L9.12548 8.68506C9.5437 7.84264 10.1837 7.1302 10.9766 6.62437C11.7695 6.11854 12.6854 5.83848 13.6256 5.81432H30.488C31.4503 5.81483 32.3934 6.08377 33.2112 6.59092C34.029 7.09806 34.6892 7.82329 35.1174 8.68506L38.8675 16.1594" stroke="#FF3F40" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="parametr__bottom__content-text">
                                <div class="term-text">Срок доставки:</div>
                                <div class="term-number"><span>14</span>дней</div>
                            </div>
                        </div>
                        <div class="parametr__bottom__content">
                            <div class="parametr__bottom__content-text">
                                <div class="term-text">Стоимость доставки:</div>
                                <div class="term-number">Бесплатно при заказе на сумму от<span>500 000</span>сум</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <div class="container-fluid ">
        <section class="options">
            <h2>Описание:</h2>
            <p>
                Даже самые маленькие реснички будут подчеркнуты по максимуму. Lancôme Lash Idôle – тушь для изогнутых и объемных ресниц, которая поразит вас с первого применения. Секрет всегда идеального результата – сочетание специальной щеточки и легкой гелевой текстуры, которая совершенно не утяжеляет ресницы, а наоборот, поднимает их на высоту, которой они никогда не достигали.
            </p>
            <h2>Характеристики:</h2>
            <ul>
                <li>Мгновенно приподнимает и удлиняет ресницы, придавая им объем.</li>
                <li>дает на 140% больше открытых глаз</li>
                <li>Мгновенно приподнимает и удлиняет ресницы, придавая им объем.</li>
                <li>дает на 140% больше открытых глаз</li>
                <li>Мгновенно приподнимает и удлиняет ресницы, придавая им объем.</li>
                <li>дает на 140% больше открытых глаз</li>
                <li>Мгновенно приподнимает и удлиняет ресницы, придавая им объем.</li>
                <li>дает на 140% больше открытых глаз</li>
                <li>Мгновенно приподнимает и удлиняет ресницы, придавая им объем.</li>
                <li>дает на 140% больше открытых глаз</li>
                <li>Мгновенно приподнимает и удлиняет ресницы, придавая им объем.</li>
                <li>дает на 140% больше открытых глаз</li>
            </ul>
            <h2>Результаты теста:</h2>
            <ul>
                <li>95% заметили, что тут же подняли ресницы</li>
                <li>90% сказали, что оно подчеркнуло ресницы с эффектом веера.</li>
                <li>95% заметили, что тут же подняли ресницы</li>
                <li>90% сказали, что оно подчеркнуло ресницы с эффектом веера.</li>
                <li>95% заметили, что тут же подняли ресницы</li>
                <li>90% сказали, что оно подчеркнуло ресницы с эффектом веера.</li>
            </ul>
            <h2>Как использовать:</h2>
            <p>Сначала нанесите праймер под тушь Lancôme Cils Booster XL. Удерживая ее в горизонтальном положении, нанесите тушь Lancôme Lash Idôle на корни ресниц и переместите ее к кончикам, перемещая щеточку вперед и назад. Дополнительные слои можно наносить в зависимости от желаемого результата.</p>

        </section>


        <section class="recall">
            <div class="recall__row">
                <div class="recall__row__left">
                    <div class="recall__row__left-title">Отзывы о товаре</div>
                    <div class="recall__row__left-text">Поделитесь своими впечатлениями о товаре</div>
                </div>
                <button class="recall__row-btn">Добавить отзыв</button>
            </div>

            <ul class="recall__list" id="myList">
                <li class="recall__list__item">
                    <div class="recall__list__item-name">Евгения</div>
                    <p class="recall__list__item-message">Именно тот момент. Когда захотелось оставить отзыв. И поаплодировать создателям!! Эта тушь как глоток свежего воздуха После ухода gosh Я не могла найти себе тушь. То они осыпались. То не хватало на целый день( панда). увеличивает даже мои тонкие светлые ресницы, которым не каждая тушь подходит. Мягкая щетка не царапает веко( у меня частая проблема, что щетка задевает веко, и начинает слезиться глаз и мейкап насмарку) Тушь хорошо смывается с глаза. Но при этом я даже в ней плавала в бассейне и все ок. Вообщем рекомендую. Красивая туба кстати в своей индивидуальной коробочке. </p>
                    <div class="recall__list__item-img">
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                    </div>
                </li>
                <li class="recall__list__item">
                    <div class="recall__list__item-name">Лазиза</div>
                    <p class="recall__list__item-message">Тушь удлиняет , прокрашивает , имеет приятный запах. Обычная качественная тушь. Брала по акции за 750₽. Больших денег не стала бы переплачивать за неё, потому что , как говорила ранее - обычная качественная тушь . Самое главное её достоинство , для меня лично , - она не аллергенная ! 🙏 много лет мучаюсь с разными тушами , по разным ценам. От всех слезятся и чешутся глаза - будь то за 400₽- или за 2500. Эту тушь решила попробовать ради интереса . Пользуюсь вторую неделю - глаза не слезятся !!!!!! Буду продолжать покупать её и дальше лишь за эффект «нечешушихся» и «неслезящихся» глаз . Какого вау эффекта нет . (Возможно это потому , что и ранее я заказывала хорошие туши и разницу особо не увидела в качестве между предыдущими и этой ). И ещё 1 момент . Скорее как субъективный недостаток. Именно этой тушью я каким-то образом «тыкаю и прокрашиваю» верхнее ВНУТРЕННЕ веко…. Не могу понять почему так происходит (то ли форма кисти у туши такая , что глубоко проходит к корню ресниц , то ли руки у меня такие …).   </p>
                </li>
                <li class="recall__list__item">
                    <div class="recall__list__item-name">Евгения</div>
                    <p class="recall__list__item-message">Именно тот момент. Когда захотелось оставить отзыв. И поаплодировать создателям!! Эта тушь как глоток свежего воздуха После ухода gosh Я не могла найти себе тушь. То они осыпались. То не хватало на целый день( панда). увеличивает даже мои тонкие светлые ресницы, которым не каждая тушь подходит. Мягкая щетка не царапает веко( у меня частая проблема, что щетка задевает веко, и начинает слезиться глаз и мейкап насмарку) Тушь хорошо смывается с глаза. Но при этом я даже в ней плавала в бассейне и все ок. Вообщем рекомендую. Красивая туба кстати в своей индивидуальной коробочке. </p>
                </li>
                <li class="recall__list__item">
                    <div class="recall__list__item-name">Лазиза</div>
                    <p class="recall__list__item-message">Тушь удлиняет , прокрашивает , имеет приятный запах. Обычная качественная тушь. Брала по акции за 750₽. Больших денег не стала бы переплачивать за неё, потому что , как говорила ранее - обычная качественная тушь . Самое главное её достоинство , для меня лично , - она не аллергенная ! 🙏 много лет мучаюсь с разными тушами , по разным ценам. От всех слезятся и чешутся глаза - будь то за 400₽- или за 2500. Эту тушь решила попробовать ради интереса . Пользуюсь вторую неделю - глаза не слезятся !!!!!! Буду продолжать покупать её и дальше лишь за эффект «нечешушихся» и «неслезящихся» глаз . Какого вау эффекта нет . (Возможно это потому , что и ранее я заказывала хорошие туши и разницу особо не увидела в качестве между предыдущими и этой ). И ещё 1 момент . Скорее как субъективный недостаток. Именно этой тушью я каким-то образом «тыкаю и прокрашиваю» верхнее ВНУТРЕННЕ веко…. Не могу понять почему так происходит (то ли форма кисти у туши такая , что глубоко проходит к корню ресниц , то ли руки у меня такие …).   </p>
                </li>
                <li class="recall__list__item">
                    <div class="recall__list__item-name">Дилшод</div>
                    <p class="recall__list__item-message">Именно тот момент. Когда захотелось оставить отзыв. И поаплодировать создателям!! Эта тушь как глоток свежего воздуха После ухода gosh Я не могла найти себе тушь. То они осыпались. То не хватало на целый день( панда). увеличивает даже мои тонкие светлые ресницы, которым не каждая тушь подходит. Мягкая щетка не царапает веко( у меня частая проблема, что щетка задевает веко, и начинает слезиться глаз и мейкап насмарку) Тушь хорошо смывается с глаза. Но при этом я даже в ней плавала в бассейне и все ок. Вообщем рекомендую. Красивая туба кстати в своей индивидуальной коробочке. </p>
                    <div class="recall__list__item-img">
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                        <div data-fancybox="gallery" data-src="/assets/images/eyes.png">
                            <img data-lazy="/assets/images/eyes.png" alt="">
                        </div>
                    </div>
                </li>
                <li class="recall__list__item">
                    <div class="recall__list__item-name">Феруза</div>
                    <p class="recall__list__item-message">Тушь удлиняет , прокрашивает , имеет приятный запах. Обычная качественная тушь. Брала по акции за 750₽. Больших денег не стала бы переплачивать за неё, потому что , как говорила ранее - обычная качественная тушь . Самое главное её достоинство , для меня лично , - она не аллергенная ! 🙏 много лет мучаюсь с разными тушами , по разным ценам. От всех слезятся и чешутся глаза - будь то за 400₽- или за 2500. Эту тушь решила попробовать ради интереса . Пользуюсь вторую неделю - глаза не слезятся !!!!!! Буду продолжать покупать её и дальше лишь за эффект «нечешушихся» и «неслезящихся» глаз . Какого вау эффекта нет . (Возможно это потому , что и ранее я заказывала хорошие туши и разницу особо не увидела в качестве между предыдущими и этой ). И ещё 1 момент . Скорее как субъективный недостаток. Именно этой тушью я каким-то образом «тыкаю и прокрашиваю» верхнее ВНУТРЕННЕ веко…. Не могу понять почему так происходит (то ли форма кисти у туши такая , что глубоко проходит к корню ресниц , то ли руки у меня такие …).   </p>
                </li>
                <li class="recall__list__item">
                    <div class="recall__list__item-name">Рита</div>
                    <p class="recall__list__item-message">Именно тот момент. Когда захотелось оставить отзыв. И поаплодировать создателям!! Эта тушь как глоток свежего воздуха После ухода gosh Я не могла найти себе тушь. То они осыпались. То не хватало на целый день( панда). увеличивает даже мои тонкие светлые ресницы, которым не каждая тушь подходит. Мягкая щетка не царапает веко( у меня частая проблема, что щетка задевает веко, и начинает слезиться глаз и мейкап насмарку) Тушь хорошо смывается с глаза. Но при этом я даже в ней плавала в бассейне и все ок. Вообщем рекомендую. Красивая туба кстати в своей индивидуальной коробочке. </p>
                </li>
                <li class="recall__list__item">
                    <div class="recall__list__item-name">Бегзад</div>
                    <p class="recall__list__item-message">Тушь удлиняет , прокрашивает , имеет приятный запах. Обычная качественная тушь. Брала по акции за 750₽. Больших денег не стала бы переплачивать за неё, потому что , как говорила ранее - обычная качественная тушь . Самое главное её достоинство , для меня лично , - она не аллергенная ! 🙏 много лет мучаюсь с разными тушами , по разным ценам. От всех слезятся и чешутся глаза - будь то за 400₽- или за 2500. Эту тушь решила попробовать ради интереса . Пользуюсь вторую неделю - глаза не слезятся !!!!!! Буду продолжать покупать её и дальше лишь за эффект «нечешушихся» и «неслезящихся» глаз . Какого вау эффекта нет . (Возможно это потому , что и ранее я заказывала хорошие туши и разницу особо не увидела в качестве между предыдущими и этой ). И ещё 1 момент . Скорее как субъективный недостаток. Именно этой тушью я каким-то образом «тыкаю и прокрашиваю» верхнее ВНУТРЕННЕ веко…. Не могу понять почему так происходит (то ли форма кисти у туши такая , что глубоко проходит к корню ресниц , то ли руки у меня такие …).   </p>
                </li>
            </ul>
            <button id="expandBtn" class="recall__list-btn">Показать еще</button>
            <!-- этот блок когда нет отзывов -->
            <div class="not-recal block">
                У товара пока нет отзывов. Станьте первыми!
            </div>
        </section>


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
            </div>
        </section>
    </div>



    <?php include "includes/modal__comment.php" ?>

    <?php include "includes/m_success-comment.php" ?>

</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Получаем элементы DOM
        const minusButton = document.querySelector('.minus');
        const plusButton = document.querySelector('.plus');
        const counterInput = document.getElementById('people-counter');
        const dynamicInfo = document.querySelector('.parametr__form__price-origin span');

        // Получаем стоимость за одного человека из текстового содержимого элемента
        const costPerPerson = parseFloat(dynamicInfo.textContent.replace(/\s+/g, ''));

        // Функция для обновления итоговой стоимости
        function updateTotalCost() {
            const numberOfPeople = parseInt(counterInput.value); // Получаем количество людей
            const totalCost = costPerPerson * numberOfPeople; // Вычисляем общую стоимость
            dynamicInfo.textContent = totalCost.toLocaleString(); // Обновляем текстовое содержимое с учетом форматирования
        }

        // Обработчик события для кнопки "-"
        minusButton.addEventListener('click', function() {
            const currentValue = parseInt(counterInput.value);
            if (currentValue > 1) {
                counterInput.value = currentValue - 1;
                updateTotalCost();
            }
        });

        // Обработчик события для кнопки "+"
        plusButton.addEventListener('click', function() {
            const currentValue = parseInt(counterInput.value);
            counterInput.value = currentValue + 1;
            updateTotalCost();
        });

        // Обновляем итоговую стоимость при загрузке страницы
        updateTotalCost();
    });
</script>


<script>
    // modal contract-details

    const editBtnContr = document.querySelector('.recall__row-btn');
    const modalContr = document.querySelector('.popup__contracts-name');
    const modalContrClose = document.querySelector('.constracts__name-close');
    const modalContrSaveBtn = document.querySelector('.balance__btn-save');
    const modalContrResetBtn = document.querySelector('.balance__btn-reset');
    const modalContrBody = document.querySelector('.popup__body');

    // Функция для закрытия модального окна
    function closeModalContr() {
        modalContr.classList.remove('modal-show');
        document.body.classList.remove('no-scroll');
    }

    // Обработчики событий
    editBtnContr.addEventListener('click', function() {
        modalContr.classList.toggle('modal-show');
        document.body.classList.toggle('no-scroll');
    });

    modalContrClose.addEventListener('click', closeModalContr);

    modalContrResetBtn.addEventListener('click', closeModalContr);

    // Обработчик клика на области .popup__body для закрытия модального окна
    modalContrBody.addEventListener('click', function(event) {
        // Проверяем, что клик произошел именно на .popup__body, а не на его дочерних элементах
        if (event.target === modalContrBody) {
            closeModalContr();
        }
    });

    // Поиск кнопки "Оставить отзыв" и добавление обработчика события для открытия второго модального окна
    modalContrSaveBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Предотвращаем отправку формы
        // Проверяем, что инпут не пустой
        const reviewInput = document.querySelector('.popup__contracts-name textarea');
        if (reviewInput.value.trim() === '') {
            // Если инпут пустой, не открываем вторую модальное окно
            return;
        }

        // Открываем вторую модальное окно
        openSecondModal();
    });

    // Функция для закрытия модального окна через заданное время
    function closeModalAfterDelay(modal, delay) {
        setTimeout(function() {
            modal.classList.remove('modal-show');
            document.body.classList.remove('no-scroll');
        }, delay);
    }

    // Открытие второй модального окна
    function openSecondModal() {
        const firstModal = document.querySelector('.popup__contracts-name');
        const secondModal = document.querySelector('.success');

        firstModal.classList.remove('modal-show');
        secondModal.classList.add('modal-show');
        document.body.classList.add('no-scroll');

        // Закрытие второго модального окна через 1.5 секунды (1500 миллисекунд)
        closeModalAfterDelay(secondModal, 4000);
    }
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const myList = document.getElementById('myList');
        const expandBtn = document.getElementById('expandBtn');
        const itemsToShow = 4;
        let isExpanded = false;

        // Применяем класс hidden ко всем элементам списка, начиная с itemsToShow
        for (let i = itemsToShow; i < myList.children.length; i++) {
            myList.children[i].classList.add('hidden');
        }

        // Проверяем, сколько параметров показывается при загрузке страницы
        const visibleItems = myList.querySelectorAll('.parametrs__list__item:not(.hidden)').length;

        // Если параметров больше 3, показываем кнопку "Развернуть все параметры"
        if (visibleItems > itemsToShow) {
            expandBtn.style.display = 'inline-block';
        }

        // Добавляем обработчик событий для кнопки "Развернуть"
        expandBtn.addEventListener('click', function() {
            if (!isExpanded) {
                // Показываем скрытые элементы
                for (let i = itemsToShow; i < myList.children.length; i++) {
                    myList.children[i].classList.remove('hidden');
                }
                expandBtn.textContent = 'Свернуть'; // изменяем текст кнопки
            } else {
                // Скрываем элементы после третьего
                for (let i = itemsToShow; i < myList.children.length; i++) {
                    myList.children[i].classList.add('hidden');
                }
                expandBtn.textContent = 'Показать еще'; // изменяем текст кнопки
            }
            isExpanded = !isExpanded; // Инвертируем состояние
        });
    });
</script>






<?php include "partials/footer.php" ?>