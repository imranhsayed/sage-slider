(function( $ ){


	var sage = {

		init: function () {
			this.createMainSlider();
		},

		createMainSlider: function () {
			var sageSlider = $('#sage-slider');
			if (sageSlider.length) {
				sageSlider.slick({
					// Custom Option
					dots: true,
					infinite: true,
					speed: 500,
					fade: true,
					cssEase: 'linear',
					autoplay: true
				});
			}
		},
	};

	sage.init();

})( jQuery );