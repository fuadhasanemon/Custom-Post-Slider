jQuery(document).ready(function ($) {
	$(".card-slider").slick({
		dots: true,
		arrows: true,
		prevArrow:
		'<button type="button" class="slick-prev"><i class="dashicons dashicons-arrow-left-alt"></i></button>',
		nextArrow:
		'<button type="button" class="slick-next"><i class="dashicons dashicons-arrow-right-alt"></i></button>',
		infinite: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [
			{
				breakpoint: 1280,
				settings: {
					arrows: false,
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 980,
				settings: {
					arrows: false,
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 700,
				settings: {
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		],
	});
});
