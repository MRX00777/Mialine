<!--modal edit name contracts  -->

<div id="modal___name" class="popup popup__contracts-name">
    <div class="popup__body">
        <form action="" class="popup__content">
            <div class="pupup__title">Оставить отзыв</div>
            <button type="reset" class="constracts__name-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 25" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.15227 3.61388C4.54279 3.22335 5.17596 3.22335 5.56648 3.61388L21.5665 19.6139C21.957 20.0044 21.957 20.6376 21.5665 21.0281C21.176 21.4186 20.5428 21.4186 20.1523 21.0281L4.15227 5.02809C3.76174 4.63757 3.76174 4.0044 4.15227 3.61388Z" fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5665 3.61388C21.957 4.0044 21.957 4.63757 21.5665 5.02809L5.56648 21.0281C5.17596 21.4186 4.54279 21.4186 4.15227 21.0281C3.76174 20.6376 3.76174 20.0044 4.15227 19.6139L20.1523 3.61388C20.5428 3.22335 21.176 3.22335 21.5665 3.61388Z" fill="black" />
                </svg>
            </button>
            <div class="popup__form">
                <div class="info__fill_input">
                    <div class="input">
                        <p>Опишите свои впечатления о товаре<span>*</span></p>
                        <textarea type="text" placeholder="Введите текст..." rows="10" cols="50" required></textarea>
                    </div>
                    <div class="input image__add">
                        <p>Прикрепите фото к отзыву</p>
                        <div class="image__add__row">
                            <div id="imagePreview">
                                <img src="/assets/images/eyes.png" alt="">
                                <input type="file" id="imageInput" name="image" multiple>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal__buttons">
                        <button type="reset" class="balance__btn-reset">Отмена</button>
                        <button type="submit" class="balance__btn-save">Оставить отзыв</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>