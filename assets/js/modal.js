

// mobile navigation


let lang = document.querySelector(".lang");
const handleLang = () => {
	lang.classList.toggle("active");
};

const mobileMenu = document.querySelector(".header__nav");
const header__logo = document.querySelector(".header__bottom_item-left");
const burger = document.querySelector(".header__burger");
const header__lang = document.querySelectorAll(".header__lang");

const toggleMobileMenu = () => {
	mobileMenu.classList.toggle("active");
	header__logo.classList.toggle("active");
	burger.classList.toggle("active");
	header__lang.forEach((el) => {
		el.classList.toggle("active-menu");
	});
	document.body.classList.toggle("no-scroll");
};

function Modalopen(modal) {
	modal.classList.add("modal--active");
	document.body.classList.add("no-scroll");
}

function modalclose(closeButton) {
	document.body.classList.remove("no-scroll");
	closeButton.closest("[data-modal]").classList.remove("modal--active");
	if (mobileMenu.classList.contains("active")) {
		mobileMenu.classList.remove("active");
		header__logo.classList.remove("active");
		burger.classList.remove("active");
		document.body.classList.remove("no-scroll");
	}
}

function modal(openSelector, closeSelector) {
	const openTriggers = Array.from(document.querySelectorAll(openSelector));
	const closeTriggers = Array.from(document.querySelectorAll(closeSelector));

	openTriggers.forEach((el) => {
		el.addEventListener("click", function (e) {
			const modalId = this.getAttribute("data-modal-id");
			const targetModal = document.querySelector(`[data-modal="${modalId}"]`);

			Modalopen(targetModal);
		});
	});

	closeTriggers.forEach((el) => {
		el.addEventListener("click", function () {
			modalclose(this);
		});
	});
}

modal(".open-modal", ".close-modal");






const decorBtnContr = document.querySelector('.result-btn');
const modalContr = document.querySelector('.success');

decorBtnContr.addEventListener('click', function() {
    modalContr.classList.add('modal-show'); // Добавляем класс modal-show
    document.body.classList.add('no-scroll'); // Предполагая, что это для запрета прокрутки страницы

    // Запускаем таймер для автозакрытия модалки через 3 секунды
    const autoCloseTimer = setTimeout(function() {
        closeModal();
    }, 3000);

    // Добавляем обработчик события клика на .success__body
    modalContr.querySelector('.success__body').addEventListener('click', function(event) {
        // Останавливаем всплытие события клика, чтобы не сработал клик на самом .success__body
        event.stopPropagation();
        
        // Закрываем модалку
        closeModal();
    });

    // Функция для закрытия модалки
    function closeModal() {
        clearTimeout(autoCloseTimer); // Очищаем таймер автозакрытия
        modalContr.classList.remove('modal-show');
        document.body.classList.remove('no-scroll');
    }
});


