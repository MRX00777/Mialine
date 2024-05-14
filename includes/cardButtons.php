<div class="prodcutCard__buttons">
    <div class="g prodcutCard__buttons_item prodcutCard__buttons_item--toFavorites <?= $isFav ? 'prodcutCard__buttons_item--active' : '' ?>">
        <svg>
            <use xlink:href="/assets/icons/sprite.svg#favorites"></use>
        </svg>
    </div>
    <div class="g prodcutCard__buttons_item prodcutCard__buttons_item--toCart <?= $isCart ? 'prodcutCard__buttons_item--active' : '' ?>">
        <svg>
            <use xlink:href="/assets/icons/sprite.svg#cart"></use>
        </svg>
    </div>
</div>