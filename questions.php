<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Оплата и доставка';
$page = 'questions';
$img = 'main';
$url = 'https://';
$pageActive = "3";


include "partials/header.php" ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xl-10">
            <main class="main">
                <section class="questions">
                    <h2 class="questions-title">Частые вопросы</h2>
                    <div class="questions__content">
                        <div class="questions__content__item">
                            <button class="questions__content__item__btn">
                                <div class="questions__content__item__btn__text">
                                    Должен ли я оплачивать доставку в случае отказа?
                                </div>
                                <img class="questions__content__item__btn__arrow" src="/assets/icons/accordeon__arrow.svg" alt="accordeon__icon-myprofile">
                            </button>
                            <div class="questions__content__item__content">
                                <p>
                                    Да, если товар надлежащего качества, а также соответствует описанию и характеристикам, так как стоимость доставки — это минимально возможные затраты, среди которых: оплата работы курьера, ГСМ, ремонт и замена расходных материалов автомобиля.
                                </p>
                            </div>
                        </div>
                        <div class="questions__content__item">
                            <button class="questions__content__item__btn">
                                <div class="questions__content__item__btn__text">
                                    Должен ли я оплачивать доставку в случае отказа?
                                </div>
                                <img class="questions__content__item__btn__arrow" src="/assets/icons/accordeon__arrow.svg" alt="accordeon__icon-myprofile">
                            </button>
                            <div class="questions__content__item__content">
                                <p>
                                    Да, если товар надлежащего качества, а также соответствует описанию и характеристикам, так как стоимость доставки — это минимально возможные затраты, среди которых: оплата работы курьера, ГСМ, ремонт и замена расходных материалов автомобиля.
                                </p>
                            </div>
                        </div>
                        <div class="questions__content__item">
                            <button class="questions__content__item__btn">
                                <div class="questions__content__item__btn__text">
                                    Должен ли я оплачивать доставку в случае отказа?
                                </div>
                                <img class="questions__content__item__btn__arrow" src="/assets/icons/accordeon__arrow.svg" alt="accordeon__icon-myprofile">
                            </button>
                            <div class="questions__content__item__content">
                                <p>
                                    Да, если товар надлежащего качества, а также соответствует описанию и характеристикам, так как стоимость доставки — это минимально возможные затраты, среди которых: оплата работы курьера, ГСМ, ремонт и замена расходных материалов автомобиля.
                                </p>
                            </div>
                        </div>
                        <div class="questions__content__item">
                            <button class="questions__content__item__btn">
                                <div class="questions__content__item__btn__text">
                                    Должен ли я оплачивать доставку в случае отказа?
                                </div>
                                <img class="questions__content__item__btn__arrow" src="/assets/icons/accordeon__arrow.svg" alt="accordeon__icon-myprofile">
                            </button>
                            <div class="questions__content__item__content">
                                <p>
                                    Да, если товар надлежащего качества, а также соответствует описанию и характеристикам, так как стоимость доставки — это минимально возможные затраты, среди которых: оплата работы курьера, ГСМ, ремонт и замена расходных материалов автомобиля.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</div>

<script>
    // Accordeon in profile.php 

    const accordeonButtons = document.querySelectorAll('.questions__content__item__btn');


    accordeonButtons.forEach.call(accordeonButtons, function(accordeonButton) {
        accordeonButton.addEventListener('click', function() {



            const currentText = accordeonButton.parentElement.querySelector('.questions__content__item__content');

            accordeonButton.classList.toggle('accordeon__title--active');
            currentText.classList.toggle('accordeon__text--visible');

            const arrowImg = accordeonButton.querySelector('.questions__content__item__btn__arrow');

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

<?php include "partials/footer.php" ?>