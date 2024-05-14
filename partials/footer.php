<footer class="footer">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-xl-10">
                <div class="footer__wrapper">
                    <div class="footer__top">
                        <div class="footer__top_logo">
                            <a href="/" class="g">
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#logo"></use>
                                </svg>
                            </a>
                            <div class="text">
                                OOO “MIALINE” <br> 2024 © Все права защищены
                            </div>
                        </div>
                        <div class="footer__top_list list">
                            <ul class="list__item">
                                <li class="list__item_block">
                                    <a href="/brands.php" class="list__item_link <?= $pageActive == "1" ? "active" : "" ?>">Бренды</a>
                                </li>
                                <li class="list__item_block">
                                    <a href="/payment-method.php" class="list__item_link <?= $pageActive == "2" ? "active" : "" ?>">Оплата и доставка</a>
                                </li>
                                <li class="list__item_block">
                                    <a href="/oferta.php" class="list__item_link <?= $pageActive == "5" ? "active" : "" ?>">Оферта</a>
                                </li>
                            </ul>
                            <ul class="list__item">
                                <li class="list__item_block">
                                    <a href="/questions.php" class="list__item_link <?= $pageActive == "3" ? "active" : "" ?>">Частые вопросы</a>
                                </li>
                                <li class="list__item_block">
                                    <a href="/support.php" class="list__item_link <?= $pageActive == "4" ? "active" : "" ?>">Поддержка</a>
                                </li>
                            </ul>
                            <ul class="list__item">
                                <li class="list__item_block">
                                    <a href="tel:+998909909090" class="list__item_link hoverRed">
                                        <div class="g">
                                            <svg>
                                                <use xlink:href="/assets/icons/sprite.svg#tel"></use>
                                            </svg>
                                        </div>
                                        +998 90 990 90 90
                                    </a>
                                </li>
                                <li class="list__item_block">
                                    <a href="mailto:mialine@office.uz" class="list__item_link hoverRed">
                                        <div class="g">
                                            <svg>
                                                <use xlink:href="/assets/icons/sprite.svg#mail"></use>
                                            </svg>
                                        </div>
                                        mialine@office.uz
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__bottom">
                        <div class="footer__bottom_social social">
                            <a href="#!" class="social__item">Instagram</a>
                            <a href="#!" class="social__item">Telegram</a>
                            <a href="#!" class="social__item">Facebook</a>
                        </div>
                        <div class="footer__bottom_devbeloper developer">
                            <a href="https://kirano.uz/" class="developer__link">Сайт разработан в Кирано</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="overlay" id="overlay"></div>

<?php include 'includes/consult.php'; ?>
</div>

<div class="btn-help">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
        <path d="M12.2129 2.44604C6.69889 2.44604 2.21289 6.93204 2.21289 12.446V16.589C2.21289 17.613 3.10989 18.446 4.21289 18.446H5.21289C5.47811 18.446 5.73246 18.3407 5.92 18.1532C6.10753 17.9656 6.21289 17.7113 6.21289 17.446V12.303C6.21289 12.0378 6.10753 11.7835 5.92 11.5959C5.73246 11.4084 5.47811 11.303 5.21289 11.303H4.30489C4.86089 7.43305 8.19089 4.44604 12.2129 4.44604C16.2349 4.44604 19.5649 7.43305 20.1209 11.303H19.2129C18.9477 11.303 18.6933 11.4084 18.5058 11.5959C18.3182 11.7835 18.2129 12.0378 18.2129 12.303V18.446C18.2129 19.549 17.3159 20.446 16.2129 20.446H14.2129V19.446H10.2129V22.446H16.2129C18.4189 22.446 20.2129 20.652 20.2129 18.446C21.3159 18.446 22.2129 17.613 22.2129 16.589V12.446C22.2129 6.93204 17.7269 2.44604 12.2129 2.44604Z" fill="white" />
    </svg>
</div>



<!-- /.wrapper -->
<script src="/assets/libraries/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.8/jquery.inputmask.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/intlTelInput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.0.0/dist/iconify-icon.min.js"></script>
<script src="/assets/libraries/phonemask/phonemask.min.js"></script>
<script src="/assets/libraries/swiper/swiper-bundle.min.js"></script>
<script src="/assets/js/modal.js"></script>
<script src="/assets/js/swipers.js"></script>
<script src="/assets/js/script.js"></script>
<script src="/assets/js/lazyImage.js"></script>
<script src="/assets/js/telInput.js"></script>
<script src="/assets/js/index.js"></script>
</body>

</html>