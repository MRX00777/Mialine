document.addEventListener("DOMContentLoaded", function () {
	var lazyImages = document.querySelectorAll("img[data-lazy]");

	var observer = new IntersectionObserver(
		function (entries, observer) {
			entries.forEach(function (entry) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						var img = entry.target;
						let imgParent = img.parentElement;
						img.src = img.getAttribute("data-lazy");
						img.onload = function () {
							imgParent.classList.add("loaded");
						};
						// img.removeAttribute("data-lazy");
						observer.unobserve(img);
					}
				});
			});
		},
		{ rootMargin: "0px 0px 10px 0px" }
	);

	lazyImages.forEach(function (img) {
		observer.observe(img);
	});
});
