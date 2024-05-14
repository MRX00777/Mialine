$(document).ready(function () {
	$(".tel-mask").mask("+998 11 111 11 11");
	$(".tel-mask").on("focus", function () {
		$(this).val("+998");
	});
	$("[data-fancybox='gallery']").fancybox({
		buttons: ["slideShow", "share", "zoom", "fullScreen", "download", "thumbs", "close"],
		image: {
			preload: false,
		},
	});
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();

		const sectionId = this.getAttribute("href");
		const section = document.querySelector(sectionId);
		const headerHeight = document.querySelector("header").offsetHeight;
		const sectionTop = section.offsetTop - headerHeight;

		const startTime = performance.now();
		const duration = 1000;
		const startTop = window.pageYOffset;

		function scroll(timestamp) {
			const timeElapsed = timestamp - startTime;
			const progress = Math.min(timeElapsed / duration, 1);

			const easeInOutQuad = (t) => (t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t);

			const scrollTop = startTop + easeInOutQuad(progress) * (sectionTop - startTop);

			window.scrollTo({
				top: scrollTop,
				behavior: "auto",
			});

			if (timeElapsed < duration) {
				requestAnimationFrame(scroll);
			}
		}

		requestAnimationFrame(scroll);
	});
});

const bodyScroll = (value) => {
	if (value) {
		return document.body.classList.add("no-scroll");
	} else {
		return document.body.classList.remove("no-scroll");
	}
};

const langContent = document.querySelector('.lang');
const toggleLangActive = () => {
	langContent.classList.toggle('lang--active')
};
const toggleCatalogActive = (el, value) => {
	value
		?
		el.classList.add(`active`) & bodyScroll(true) :
		el.classList.remove(`active`) & bodyScroll(false);
};

const catalog = document.querySelector("#catalog");
const header = document.querySelector("#header");
const navigationContainer = document.querySelector("#navigationContainer");
const navigation__list_sublist_item = document.querySelectorAll(" .navigation__list_sublist_item");
const navigation__list_sublist_list = document.querySelectorAll(" .navigation__list_sublist_list");

navigation__list_sublist_item.forEach(function (item) {
	item.addEventListener("click", function () {
		navigation__list_sublist_item.forEach(function (i) {
			i.classList.remove("active");
			i.classList.remove("activeDesctop");
		});
		this.classList.add("active");
	});
});

const removeAllActiveFromNav = () => {
	navigation__list_sublist_item.forEach(function (i) {
		i.classList.remove("active");
	});
};
/* catalog.addEventListener("click", function () {
	if (window.innerWidth < 992) {
		removeAllActiveFromNav();
	}
}); */

const closeMenu = (event) => {
	event.stopPropagation();
	toggleCatalogActive(catalog, false);
	removeAllActiveFromNav();
};

const openMainMenu = () => {
	toggleCatalogActive(navigationContainer, true);
};
const closeMainMenu = () => {
	toggleCatalogActive(navigationContainer, false);
};



//////////////////////////////////////////////

const toggleCatalogContent = document.querySelector('.navigation__list_item');
let burgerCatalog = document.querySelector(".burger");

const toggleCatalog = () => {
    toggleCatalogContent.classList.toggle('active');
    if (toggleCatalogContent.classList.contains('active')) {
        burgerCatalog.classList.add('active');
    } else {
        burgerCatalog.classList.remove('active');
    }
    document.body.classList.toggle("no-scroll");
};

const catalogButton = document.querySelector(".active-catalog");
catalogButton.addEventListener("click", function() {
    toggleCatalog();
    if (!toggleCatalogContent.classList.contains('active')) {
        burgerCatalog.classList.remove('active');
    }
});

const closeButton = document.querySelector(".close");

closeButton.addEventListener("click", function(event) {
    closeMenu(event);
    toggleCatalogMenu();
});

///////////////////////////////////////////////////////////////////
const itemsOffsetHeight = ["langBody", "header", "headerTop"];

function offsetHeight() {
	itemsOffsetHeight.forEach((el) => {
		document.body.style.setProperty(
			`--${el}`,
			`${document.querySelector(`#${el}`).offsetHeight}px`
		);
	});
}

window.onload = function () {
	setTimeout(offsetHeight, 100);
};

var lastScrollTop = 0;
window.addEventListener("scroll", function () {
	var currentScroll = window.pageYOffset || document.documentElement.scrollTop;
	if (currentScroll > lastScrollTop) {
		header.classList.add("scrolled");
	} else {
		header.classList.remove("scrolled");
	}
	lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // На мобильных устройствах может возникнуть отрицательное значение
});

const dropdownHeader = document.querySelectorAll('.filter-dropdown-header');
const dropdownContent = document.querySelectorAll('.filter-content-checkbox');
const arkToBottom = document.querySelectorAll('.ark');
const arrToBottom = document.querySelectorAll('.arg');



dropdownHeader.forEach((header, index) => {
	header.addEventListener('click', () => {
		header.classList.toggle('active'); // Add this line
		dropdownContent[index].classList.toggle('active');
		arrToBottom[index].classList.toggle('rotate');
	});
});

const dropdownHeaders = document.querySelectorAll('.filter-dropdown-headers');
const dropdownInputs = document.querySelectorAll('.filter-content-inputs');

dropdownHeaders.forEach((header, index) => {
	header.addEventListener('click', () => {
		header.classList.toggle('active'); // Add this line
		dropdownInputs[index].classList.toggle('active');
		arkToBottom[index].classList.toggle('rotate');

	});
});



const filters = document.querySelector('.filters');
const layer = document.querySelector('.layer');
const dropdownActivator = document.querySelector('.dropdownActivator');
const body = document.querySelector('body');
const closeFilter = document.querySelector('.close-filters');

dropdownActivator.addEventListener('click', () => {
	layer.classList.toggle('active');
	filters.classList.toggle('active');
	body.classList.toggle('no-scroll');
});

closeFilter.addEventListener('click', () => {
	layer.classList.remove('active');
	filters.classList.remove('active');
	body.classList.remove('no-scroll');
});

layer.addEventListener('click', () => {
	layer.classList.remove('active');
	filters.classList.remove('active');
	body.classList.remove('no-scroll');
});



// login and sign-up confirm

function moveToNextOrPreviousInput(event, currentInput) {
    if (/^[0-9]$/.test(currentInput.value)) {
        // Если введена цифра
        if (event.inputType === 'deleteContentBackward' && currentInput.previousElementSibling !== null) {
            // Если был удален символ и текущий ввод не первый
            currentInput.previousElementSibling.focus(); // Переходим к предыдущему полю ввода
        } else if (currentInput.nextElementSibling !== null) {
            // Если введена цифра и текущий ввод не последний
            currentInput.nextElementSibling.focus(); // Переходим к следующему полю ввода
        }
    } else if (event.inputType === 'deleteContentBackward' && currentInput.previousElementSibling !== null) {
        // Если символ не цифра и был удален символ, переходим к предыдущему полю ввода
        currentInput.previousElementSibling.focus(); // Переходим к предыдущему полю ввода
    }
}



document.addEventListener('click', function(event) {
    const statusVisible = document.querySelector('.status__visible');
    const statusHidden = document.querySelector('.status__toggle');
    const statusIcon = document.querySelector('.status__visible svg');
    const isClickInsideStatus = statusVisible.contains(event.target);

    if (!isClickInsideStatus && statusHidden.classList.contains('active')) {
        statusHidden.classList.remove('active');
        statusIcon.style.transform = "rotate(0deg)";
    }
});

const statusVisible = document.querySelector('.status__visible');
const statusHidden = document.querySelector('.status__toggle');
const statusIcon = document.querySelector('.status__visible svg');

statusVisible.addEventListener('click', function() {
    statusHidden.classList.toggle('active');
    if (statusHidden.classList.contains('active')) {
        statusIcon.style.transform = "rotate(180deg)";
    } else {
        statusIcon.style.transform = "rotate(0deg)";
    }
});










