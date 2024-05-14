<?php

$kw = 'vsdv asvasv sadv sadv sad'; // Keywords for SEO
$desc = 'asdvvsad vasdv sv'; // Description for SEO
$title = 'Поддержка';
$page = 'brands';
$img = 'main';
$url = 'https://';
$pageActive = "1";


include "partials/header.php" ?>

<main class="main">
    <div class="container-fluid">
        <div class="pages__name">
            <a href="/index.php" class="pages__name-info">Главная</a>
            <div class="pages__name-slash">/</div>
            <a href="/brands.php" class="pages__name-info">Бренды</a>
        </div>
        <h1>Бренды</h1>

        <section class="brands">
            <div class="brands__item">
                <div class="brands__item-letter">А</div>
                <ul class="brands__item__list">
                    <?php for ($i = 0; $i < 12; $i++) : ?>
                        <li><a href="/brands-product.php" class="brands__item__list-link">ALEXSKIN</a></li>
                    <?php endfor ?>
                </ul>
            </div>
            <div class="brands__item">
                <div class="brands__item-letter">B</div>
                <ul class="brands__item__list">
                    <?php for ($i = 0; $i < 12; $i++) : ?>
                        <li><a href="/brands-product.php" class="brands__item__list-link">BALEXSKIN</a></li>
                    <?php endfor ?>
                </ul>
            </div>
            <div class="brands__item">
                <div class="brands__item-letter">C</div>
                <ul class="brands__item__list">
                    <?php for ($i = 0; $i < 12; $i++) : ?>
                        <li><a href="/brands-product.php" class="brands__item__list-link">CLEXSKIN</a></li>
                    <?php endfor ?>
                </ul>
            </div>
        </section>
    </div>

</main>

<?php include "partials/footer.php" ?>