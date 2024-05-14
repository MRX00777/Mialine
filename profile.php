<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Профиль';
$page = 'profile';
$img = 'main';
$url = 'https://';
$pageActive = "8";


include "partials/header.php" ?>

<main class="main">
    <div class="container-fluid">
        <h2 class="profile-title">Мой профиль</h2>

        <div class="row">
            <div class="col-lg-12 col-xl-3">
                <section class="personal">
                    <div class="personal__row">
                        <div class="personal__row-text">Евгения</div>
                        <div class="personal__row-icon change__name-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                <path d="M21.6587 3.46426C21.338 3.14357 20.9573 2.88918 20.5383 2.71563C20.1193 2.54207 19.6703 2.45274 19.2167 2.45274C18.7632 2.45274 18.3141 2.54207 17.8951 2.71563C17.4761 2.88918 17.0954 3.14357 16.7747 3.46426L4.69074 15.5503C4.30982 15.9311 4.03834 16.4074 3.90474 16.9293L2.69124 21.6718C2.66446 21.7768 2.66547 21.887 2.69417 21.9916C2.72287 22.0961 2.77827 22.1914 2.85493 22.2681C2.93159 22.3447 3.02688 22.4001 3.13142 22.4288C3.23597 22.4575 3.34618 22.4585 3.45124 22.4318L8.19474 21.2198C8.71694 21.0863 9.19361 20.8148 9.57474 20.4338L21.6587 8.34776C22.3062 7.70012 22.67 6.82181 22.67 5.90601C22.67 4.9902 22.3062 4.11189 21.6587 3.46426ZM17.6587 4.34826C18.0719 3.93498 18.6324 3.70278 19.2168 3.70274C19.8012 3.70269 20.3617 3.9348 20.775 4.34801C21.1883 4.76121 21.4205 5.32167 21.4205 5.90608C21.4206 6.49049 21.1884 7.05098 20.7752 7.46426L19.6717 8.56776L16.5557 5.45126L17.6587 4.34826ZM15.6717 6.33526L18.7877 9.45176L8.69074 19.5498C8.46828 19.7723 8.19005 19.9308 7.88524 20.0088L4.16374 20.9598L5.11574 17.2393C5.19374 16.9343 5.35224 16.6563 5.57424 16.4343L15.6717 6.33526Z" fill="#9A9A9A" />
                            </svg>
                        </div>
                    </div>
                    <div class="personal__row change__number-icon">
                        <div class="personal__row-text">+998 90 999 00 90</div>
                        <div class="personal__row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                <path d="M21.6587 3.46426C21.338 3.14357 20.9573 2.88918 20.5383 2.71563C20.1193 2.54207 19.6703 2.45274 19.2167 2.45274C18.7632 2.45274 18.3141 2.54207 17.8951 2.71563C17.4761 2.88918 17.0954 3.14357 16.7747 3.46426L4.69074 15.5503C4.30982 15.9311 4.03834 16.4074 3.90474 16.9293L2.69124 21.6718C2.66446 21.7768 2.66547 21.887 2.69417 21.9916C2.72287 22.0961 2.77827 22.1914 2.85493 22.2681C2.93159 22.3447 3.02688 22.4001 3.13142 22.4288C3.23597 22.4575 3.34618 22.4585 3.45124 22.4318L8.19474 21.2198C8.71694 21.0863 9.19361 20.8148 9.57474 20.4338L21.6587 8.34776C22.3062 7.70012 22.67 6.82181 22.67 5.90601C22.67 4.9902 22.3062 4.11189 21.6587 3.46426ZM17.6587 4.34826C18.0719 3.93498 18.6324 3.70278 19.2168 3.70274C19.8012 3.70269 20.3617 3.9348 20.775 4.34801C21.1883 4.76121 21.4205 5.32167 21.4205 5.90608C21.4206 6.49049 21.1884 7.05098 20.7752 7.46426L19.6717 8.56776L16.5557 5.45126L17.6587 4.34826ZM15.6717 6.33526L18.7877 9.45176L8.69074 19.5498C8.46828 19.7723 8.19005 19.9308 7.88524 20.0088L4.16374 20.9598L5.11574 17.2393C5.19374 16.9343 5.35224 16.6563 5.57424 16.4343L15.6717 6.33526Z" fill="#9A9A9A" />
                            </svg>
                        </div>
                    </div>
                    <button class="personal__exit">
                        <div class="personal__exit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <g clip-path="url(#clip0_346_13591)">
                                    <path d="M7.03906 7.95181H14.0391" stroke="#9A9A9A" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.0391 5.95181L14.0391 7.95181L12.0391 9.95181" stroke="#9A9A9A" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.2373 12.4418C11.3393 13.3778 10.1819 14.0237 8.91385 14.2964C7.64581 14.5692 6.32516 14.4564 5.12177 13.9725C3.91837 13.4885 2.88727 12.6557 2.1611 11.581C1.43492 10.5062 1.04688 9.23885 1.04688 7.94181C1.04688 6.64476 1.43492 5.37737 2.1611 4.30266C2.88727 3.22795 3.91837 2.39507 5.12177 1.91115C6.32516 1.42723 7.64581 1.3144 8.91385 1.58717C10.1819 1.85995 11.3393 2.50585 12.2373 3.44181" stroke="#9A9A9A" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_346_13591">
                                        <rect width="14" height="14" fill="white" transform="translate(0.539062 0.951813)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="personal__exit-text">Выйти из профиля</div>
                    </button>
                </section>
            </div>
            <div class="col-lg-12 col-xl-9">
                <section class="orders ">
                    <div class="orders-title">Мои заказы</div>
                    <div class="orders__content">
                        <div class="accordeon__item orders__content__item">
                            <button class="accordeon__item-btn profile__accordeon__btn accordeon__title--active">
                                <div class="profile__accordeon__btn__content">
                                    <div class="profile__accordeon__btn__content-number">
                                        Заказ № <span>789 900</span>
                                    </div>
                                    <div class="profile__accordeon__btn__content-data">
                                        02/03/2024, 13:00
                                    </div>
                                </div>
                                <img class="accordeon__icon-profile" src="/assets/icons/accordeon__arrow.svg" alt="accordeon__icon-myprofile">
                            </button>
                            <div class="profile__accordeon__content accordeon__text--visible" style="display: flex;">
                                <div class="profile__accordeon__content__top">
                                    <div class="status">
                                        <div class="status-circle"></div>
                                        <p>Обрабатывается</p>
                                    </div>
                                    <div class="personal-info">
                                        Имя получателя: <span>Абдувасит</span>
                                    </div>
                                    <div class="personal-info">
                                        Телефон получателя: <span>+998 90 999 90 90</span>
                                    </div>
                                    <div class="personal-info">
                                        Способ оплаты: <span>PayMe</span>
                                    </div>
                                    <div class="personal-info">
                                        Адрес доставки: <span>Яккасарайский р-н, д14, этаж 2, подъезд 2, квартира
                                            4</span>
                                    </div>

                                    <div class="compound">
                                        <div class="compound-title">Состав заказа:</div>
                                        <div class="compound__content">
                                            <div class="compound__content__card">
                                                <div class="left">
                                                    <div class="left-name">Тушь для ресниц Mascara</div>
                                                    <div class="left-brand">Growing haicare</div>
                                                </div>
                                                <div class="right">
                                                    <div class="right-amount">х <span>10</span></div>
                                                    <div class="right-money"><span>4 500 000</span> сум</div>
                                                </div>
                                            </div>
                                            <div class="compound__content__card">
                                                <div class="left">
                                                    <div class="left-name">Тушь для ресниц Mascara</div>
                                                    <div class="left-brand">Growing haicare</div>
                                                </div>
                                                <div class="right">
                                                    <div class="right-amount">х <span>10</span></div>
                                                    <div class="right-money"><span>4 500 000</span> сум</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="orders__history">
                                        <div class="orders__history-title">История:</div>
                                        <div class="orders__history__content">
                                            <div class="orders__history__content-item">
                                                Заказ создан - <span>23.03.2024, 19:00</span>
                                            </div>
                                            <div class="orders__history__content-item">
                                                Обрабатывается - <span>23.03.2024, 20:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="result__money">
                                    <div class="result__money__left">
                                        <div class="result__money__left-product">
                                            Товары на сумму: <span>8 800 000</span> сум
                                        </div>
                                        <div class="result__money__left-product">
                                            Стоимость доставки: <span>24 000</span> сум
                                        </div>
                                    </div>
                                    <div class="result__money__right">
                                        <div class="result__money__right-summa">
                                            Итого: <span>8 800 000</span> сум
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordeon__item orders__content__item ">
                            <button class="accordeon__item-btn profile__accordeon__btn">
                                <div class="profile__accordeon__btn__content">
                                    <div class="profile__accordeon__btn__content-number">
                                        Заказ № <span>789 900</span>
                                    </div>
                                    <div class="profile__accordeon__btn__content-data">
                                        02/03/2024, 13:00
                                    </div>
                                </div>
                                <img class="accordeon__icon-profile" src="/assets/icons/accordeon__arrow.svg" alt="accordeon__icon-myprofile">
                            </button>
                            <div class="profile__accordeon__content">
                                <div class="profile__accordeon__content__top">
                                    <div class="status">
                                        <div class="status-circle"></div>
                                        <p>Обрабатывается</p>
                                    </div>
                                    <div class="personal-info">
                                        Имя получателя: <span>Абдувасит</span>
                                    </div>
                                    <div class="personal-info">
                                        Телефон получателя: <span>+998 90 999 90 90</span>
                                    </div>
                                    <div class="personal-info">
                                        Способ оплаты: <span>PayMe</span>
                                    </div>
                                    <div class="personal-info">
                                        Адрес доставки: <span>Яккасарайский р-н, д14, этаж 2, подъезд 2, квартира
                                            4</span>
                                    </div>

                                    <div class="compound">
                                        <div class="compound-title">Состав заказа:</div>
                                        <div class="compound__content">
                                            <div class="compound__content__card">
                                                <div class="left">
                                                    <div class="left-name">Тушь для ресниц Mascara</div>
                                                    <div class="left-brand">Growing haicare</div>
                                                </div>
                                                <div class="right">
                                                    <div class="right-amount">х <span>10</span></div>
                                                    <div class="right-money"><span>4 500 000</span> сум</div>
                                                </div>
                                            </div>
                                            <div class="compound__content__card">
                                                <div class="left">
                                                    <div class="left-name">Тушь для ресниц Mascara</div>
                                                    <div class="left-brand">Growing haicare</div>
                                                </div>
                                                <div class="right">
                                                    <div class="right-amount">х <span>10</span></div>
                                                    <div class="right-money"><span>4 500 000</span> сум</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="orders__history">
                                        <div class="orders__history-title">История:</div>
                                        <div class="orders__history__content">
                                            <div class="orders__history__content-item">
                                                Заказ создан - <span>23.03.2024, 19:00</span>
                                            </div>
                                            <div class="orders__history__content-item">
                                                Обрабатывается - <span>23.03.2024, 20:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="result__money">
                                    <div class="result__money__left">
                                        <div class="result__money__left-product">
                                            Товары на сумму: <span>8 800 000</span> сум
                                        </div>
                                        <div class="result__money__left-product">
                                            Стоимость доставки: <span>24 000</span> сум
                                        </div>
                                    </div>
                                    <div class="result__money__right">
                                        <div class="result__money__right-summa">
                                            Итого: <span>8 800 000</span> сум
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="not__favorites block">
                    <div class="not__favorites__text">
                        <div class="not__favorites__text-top">
                            У вас пока нет оформленных заказов
                        </div>
                        <div class="not__favorites__text-button">
                            Перейдите в каталог и выберите то, что вам нужно
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>


    <?php include "includes/modal__editName.php" ?>

    <?php include "includes/modal__editTel.php" ?>

    <?php include "includes/exit_profil.php" ?>


</main>

<script>
    // Accordeon in profile.php 

    const accordeonButtons = document.querySelectorAll('.profile__accordeon__btn');


    accordeonButtons.forEach.call(accordeonButtons, function(accordeonButton) {
        accordeonButton.addEventListener('click', function() {



            const currentText = accordeonButton.parentElement.querySelector('.profile__accordeon__content');

            accordeonButton.classList.toggle('accordeon__title--active');
            currentText.classList.toggle('accordeon__text--visible');

            const arrowImg = accordeonButton.querySelector('.accordeon__icon-profile');

            if (currentText.classList.contains('accordeon__text--visible')) {
                currentText.style.display = 'flex'
                arrowImg.style.transform = "rotate(360deg)"
            } else {
                currentText.style.display = "none"
                arrowImg.style.transform = "rotate(180deg)"
            }

        })
    })
</script>



<script>
    // modal contract-details

    const editBtnContr = document.querySelector('.change__name-icon');
    const modalContr = document.querySelector('.modal__edit-name');
    const modalContrClose = document.querySelector('.edit__name-close');
    const modalContrSaveBtn = document.querySelector('.edit__name-save');
    const modalContrResetBtn = document.querySelector('.edit__name-reset');
    const modalContrBody = document.querySelector('.popup__body-name');

    editBtnContr.addEventListener('click', function() {
        modalContr.classList.toggle('modal-show');
        document.body.classList.toggle('no-scroll');
    });

    modalContrClose.addEventListener('click', toggleModal);
    modalContrSaveBtn.addEventListener('click', toggleModal);
    modalContrResetBtn.addEventListener('click', toggleModal);
    modalContrBody.addEventListener('click', function(event) {
        if (event.target === modalContrBody) {
            toggleModal();
        }
    });

    function toggleModal() {
        modalContr.classList.toggle('modal-show');
        document.body.classList.toggle('no-scroll');
    }
</script>

<script>
    // modal contract-details

    const editBtnTel = document.querySelector('.change__number-icon');
    const modalTel = document.querySelector('.modal__edit-tel');
    const modalTelClose = document.querySelector('.edit__tel-close');
    const modalTelSaveBtn = document.querySelector('.edit__tel-save');
    const modalTelResetBtn = document.querySelector('.edit__tel-reset');
    const modalTelBody = document.querySelector('.popup-tel__body'); // Добавляем ссылку на popup__body

    editBtnTel.addEventListener('click', toggleTelModal);
    modalTelClose.addEventListener('click', toggleTelModal);
    modalTelSaveBtn.addEventListener('click', toggleTelModal);
    modalTelResetBtn.addEventListener('click', toggleTelModal);
    modalTelBody.addEventListener('click', function(event) {
        if (event.target === modalTelBody) { // Проверяем, был ли клик именно на popup__body
            toggleTelModal();
        }
    });

    function toggleTelModal() {
        modalTel.classList.toggle('modal-show');
        document.body.classList.toggle('no-scroll');
    }
</script>


<script>
    // modal edit Exit contracts

    const exitBtnProfil = document.querySelector('.personal__exit-text');
    const modalExit = document.querySelector('.popup__exit');
    const modalExitClose = document.querySelector('.btn__exit-close');
    const modalExitSaveBtn = document.querySelector('.exit__btn-save');
    const modalExitResetBtn = document.querySelector('.exit__btn-reset');
    const modalExitBody = document.querySelector('.popup__body-exit'); // Добавляем ссылку на popup__body-exit

    exitBtnProfil.addEventListener('click', toggleExitModal);
    modalExitClose.addEventListener('click', toggleExitModal);
    modalExitSaveBtn.addEventListener('click', toggleExitModal);
    modalExitResetBtn.addEventListener('click', toggleExitModal);
    modalExitBody.addEventListener('click', function(event) {
        if (event.target === modalExitBody) { // Проверяем, был ли клик именно на popup__body-exit
            toggleExitModal();
        }
    });

    function toggleExitModal() {
        modalExit.classList.toggle('modal-show');
        document.body.classList.toggle('no-scroll');
    }
</script>



<?php include "partials/footer.php" ?>