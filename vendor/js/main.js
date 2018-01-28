(function( $ ){

	var sage = {

		/**
		 * Calls createMainSlider() and styleSliderControls()
		 *
		 * @return {void}
		 */
		init: function () {
			this.createMainSlider();
			this.styleSliderControls();
		},

		/**
		 * Add Settings and Animation for Slider.
		 *
		 * @return {void}
		 */
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

		/**
		 * Add styles to slider controls.
		 *
		 * @return {void}
		 */
		styleSliderControls: function () {
			var prevBtn = document.querySelector( '#sage-slider .slick-prev' ),
				nextBtn = document.querySelector( '#sage-slider .slick-next' ),
				slickDotBtn = $( '.slick-dots button' ),
				slickLi = $( '.slick-dots' );
			prevBtn.style.display = 'none';
			nextBtn.style.display = 'none';
			slickDotBtn.text( '.' );
			slickLi.css( 'list-style', 'none' );
		}
	};

	sage.init();

})( jQuery );