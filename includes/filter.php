
<div class="filter-wrapper">
    <div class="filter-main">
        <h1>Парфюмерия</h1>
        <div>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <a href="/catalog_inner_details.php">Парфюмированная вода</a>
            <?php endfor ?>
        </div>
    </div>
    <form class="filters">
        <div class="filters-div" style="
    display: flex;
    flex-direction: column;
    overflow-y: scroll;
    padding-bottom: 20px;">
            <div class="filters__header">
                <h1>
                    <svg class="close-filters">
                        <use xlink:href="/assets/icons/sprite.svg#close"></use>
                    </svg>
                    Фильтры
                </h1>
                <button type="reset">
                    Сбросить
                </button>
            </div>


            <div class="filter-dropdown">
                <div class="filter-dropdown-headers active">
                    <h1>Цена (UZS)</h1>
                    <svg class="arr arr-toBottom ark rotate">
                        <use xlink:href="/assets/icons/sprite.svg#arr"></use>
                    </svg>
                </div>
                <div class="filter-content-inputs active">
                    <div class="filter-input">
                        <p>От</p>
                        <input type="number" placeholder="0">
                    </div>
                    <div class="filter-input">
                        <p>До</p>
                        <input type="number" placeholder="40 000 000">
                    </div>
                </div>
            </div>
            <div class="filter-dropdown">
                <div class="filter-dropdown-header">
                    <h1>Бренд</h1>
                    <svg class="arg arr arr-toBottom">
                        <use xlink:href="/assets/icons/sprite.svg#arr"></use>
                    </svg>
                </div>
                <div class="filter-content-checkbox">
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Armani</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Dolce & Gabanna</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Versace</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Lancomm</p>
                    </label>
                </div>
            </div>
            <div class="filter-dropdown">
                <div class="filter-dropdown-header">
                    <h1>Тип парфюма</h1>
                    <svg class="arg arr arr-toBottom">
                        <use xlink:href="/assets/icons/sprite.svg#arr"></use>
                    </svg>
                </div>
                <div class="filter-content-checkbox">
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Armani</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Dolce & Gabanna</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Versace</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Lancomm</p>
                    </label>
                </div>
            </div>
            <div class="filter-dropdown">
                <div class="filter-dropdown-header">
                    <h1>Повод</h1>
                    <svg class="arg arr arr-toBottom">
                        <use xlink:href="/assets/icons/sprite.svg#arr"></use>
                    </svg>
                </div>
                <div class="filter-content-checkbox">
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Armani</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Dolce & Gabanna</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Versace</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Lancomm</p>
                    </label>
                </div>
            </div>
            <div class="filter-dropdown">
                <div class="filter-dropdown-header">
                    <h1>Упаковка</h1>
                    <svg class="arg arr arr-toBottom">
                        <use xlink:href="/assets/icons/sprite.svg#arr"></use>
                    </svg>
                </div>
                <div class="filter-content-checkbox">
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Armani</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Dolce & Gabanna</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Versace</p>
                    </label>
                    <label class="filter-checkbox">
                        <input type="checkbox">
                        <p>Lancomm</p>
                    </label>
                </div>
            </div>
        </div>

        <div class="filter-found">
            <button type="sumbit" href="#!">Посмотреть <span> 1245</span></button>
        </div>
    </form>

</div>