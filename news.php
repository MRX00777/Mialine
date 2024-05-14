<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Профиль';
$page = 'news';
$img = 'main';
$url = 'https://';


include "partials/header.php" ?>

<main class="main">
    <div class="container-fluid">
        <div class="pages__name">
            <a href="/index.php" class="pages__name-info">Главная</a>
            <div class="pages__name-slash">/</div>
            <a href="/news.php" class="pages__name-info">Новости парфюмерии и косметики</a>
        </div>
    </div>


    <section class="mainSection news">
        <div class="mainSection__wrapper">
            <h2 class="news-title">Из мира парфюмерии и косметики</h2>
            <div class="mainSection__wrapper_container">
                <div class="row">

                    <?php for ($i = 0; $i < 12; $i++) : ?>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">

                            <a href="/news-details.php" class="prodcutCard__item">
                                <div class="prodcutCard__item_top">
                                    <div class="prodcutCard__item_img img">
                                        <img data-lazy="/assets/images/news.png" alt="img">
                                    </div>
                                    <div class="prodcutCard__item_name">
                                        <p>Выведена новая формула современного крема для ухода за кожей лица</p>
                                    </div>
                                </div>
                                <div class="prodcutCard__item_bottom">
                                    <div class="prodcutCard__item_brand">02/03/2024</div>
                                </div>
                            </a>

                        </div>
                    <?php endfor ?>

                </div>
            </div>
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled" aria-disabled="true">
                        <svg class="page-link arrow" aria-hidden="true">
                            <use xlink:href="/assets/icons/sprite.svg#arrow-left"></use>
                        </svg>
                    </li>
                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="">2</a></li>
                    <li class="page-item"><a class="page-link" href="">3</a></li>
                    <li class="page-item"><a class="page-link" href="">4</a></li>
                    <li class="page-item"><a class="page-link" href="">5</a></li>
                    <li class="page-item">
                        <a class="" href="" rel="next" aria-label="Next »">
                            <svg class="page-link arrow" aria-hidden="true">
                                <use xlink:href="/assets/icons/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</main>

<?php include "partials/footer.php" ?>