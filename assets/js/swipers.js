const getRandomInt = (min, max) => {
	return Math.floor(Math.random() * (max - min + 1) + min);
};

const mainSliderBreapoints = {
	0: {
		slidesPerView: 2,
	},
	475: {
		slidesPerView: "auto",
	},
};

var swiper = new Swiper(".mySwiperCategoryIndex", {
	speed: 1000,
	slidesPerView: "auto",
	freeMode: true,
	navigation: {
		nextEl: ".categoryIndex-next",
		prevEl: ".categoryIndex-prev",
	},
});

var swiper = new Swiper(".mySwiperBrands", {
	speed: 2000,
	autoplay: {
		delay: getRandomInt(2000, 4000),
		disableOnInteraction: false,
	},
	loop: true,
	autoplay: {
		delay: 2000,
		disableOnInteraction: false,
	},
	slidesPerView: "auto",
	freeMode: true,
	navigation: {
		nextEl: ".brands-next",
		prevEl: ".brands-prev",
	},
});

var swiper = new Swiper(".mySwiperPopular", {
	speed: 2000,
	loop: true,
	autoplay: {
		delay: getRandomInt(2000, 4000),
		disableOnInteraction: false,
	},
	breakpoints: mainSliderBreapoints,
	navigation: {
		nextEl: ".popular-next",
		prevEl: ".popular-prev",
	},
});

var swiper = new Swiper(".mySwiperNewProduct", {
	speed: 2000,
	loop: true,
	autoplay: {
		delay: getRandomInt(2000, 4000),
		disableOnInteraction: false,
	},
	breakpoints: mainSliderBreapoints,
	navigation: {
		nextEl: ".newProduct-next",
		prevEl: ".newProduct-prev",
	},
});
var swiper = new Swiper(".mySwiperBestSeller", {
	speed: 2000,
	loop: true,
	autoplay: {
		delay: getRandomInt(2000, 4000),
		disableOnInteraction: false,
	},
	breakpoints: mainSliderBreapoints,
	navigation: {
		nextEl: ".bestSeller-next",
		prevEl: ".bestSeller-prev",
	},
});




var swiper = new Swiper(".mySwiper", {
    
    spaceBetween: 0,
    slidesPerView: "auto",
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
		320:{
			direction: 'horizontal',
			centerslide: true,
		},
        621: {
            direction: 'vertical',
        }
    },
});
var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 0,
    allowTouchMove: false,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});



