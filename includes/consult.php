<aside data-modal="consult" class="modal mainModal">
    <div class="component">
        <div class="modal-content d-flex" onclick="event.stopPropagation()">
            <button type="button" class="close-modal close-modal-btn" aria-label="Close modal consult" title="Закрыть модальное окно">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.21375 5.21375C5.83208 4.59542 6.83459 4.59542 7.45292 5.21375L19 16.7608L30.5471 5.21375C31.1654 4.59542 32.1679 4.59542 32.7863 5.21375C33.4046 5.83208 33.4046 6.83459 32.7863 7.45292L21.2392 19L32.7863 30.5471C33.4046 31.1654 33.4046 32.1679 32.7863 32.7863C32.1679 33.4046 31.1654 33.4046 30.5471 32.7863L19 21.2392L7.45292 32.7863C6.83459 33.4046 5.83208 33.4046 5.21375 32.7863C4.59542 32.1679 4.59542 31.1654 5.21375 30.5471L16.7608 19L5.21375 7.45292C4.59542 6.83459 4.59542 5.83208 5.21375 5.21375Z" fill="#1D1818" />
                </svg>
            </button>
            <div class="container-fluid d-flex align-items-lg-center">
                <div class="mainForm__inner mainForm__inner-from ">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-8 col-xxl-6">
                            <form action="#!" method="POST" class="mainForm__form form" aria-label="Заполните данные ниже, мы свяжемся с вами в течение дня и ответим на все вопросы!">
                                <h4 class="title">
                                    Хотите <span>записаться на экскурсию</span>
                                    или <span>получить консультацию?</span>
                                </h4>
                                <p class="subtitle">
                                    Заполните данные ниже, мы свяжемся с вами в течение дня и ответим на все вопросы!
                                </p>
                                <div class="row ">
                                    <div class="col-12">
                                        <div class="input">
                                            <label for="mainForm-name" class="label">Ваше имя <sup>*</sup></label>
                                            <input type="text" name="name" id="mainForm-name" placeholder="Ваше имя" required aria-label="Ваше имя" title="Ваше имя" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                                        <div class="input">
                                            <label for="mainForm-phone" class="label">Номер телефона <sup>*</sup></label>
                                            <input type="tel" name="phone" id="mainForm-phone" placeholder="Номер телефона" required aria-label="Номер телефона" title="Номер телефона" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                                        <div class="input">
                                            <label for="mainForm-email" class="label">Электронная почта</label>
                                            <input type="email" name="email" id="mainForm-email" placeholder="Электронная почта" aria-label="Электронная почта" title="Электронная почта">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn w-100 blue" type="submit" aria-label="Отправить" title="Отправить">
                                            Отправить
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>