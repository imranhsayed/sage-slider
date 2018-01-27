<?php
/**
 * The template for displaying the slider
 *
 * @package sage
 */

$slides_url = plugins_url( 'sage-slider/images/slides' );
// Default Pictures for Slider if user put any.
$sage_default_slider_settings = array(
	array(
		'image'             => $slides_url . '/slide1.jpg',
		'title'             => __( 'The Supermodel', 'sage-slider' ),
		'link'              => '',
		'description'       => __( 'Latest Trends', 'sage-slider' ),
	),
	array(
		'image'             => $slides_url . '/slide2.jpg',
		'title'             => __( 'Winter Season', 'sage-slider' ),
		'link'              => '',
		'description'       => __( 'Snow of winter', 'sage-slider' ),
	),
	array(
		'image'             => $slides_url . '/slide3.jpg',
		'title'             => __( 'The Perfect Couple', 'sage-slider' ),
		'link'              => '',
		'description'       => __( 'Newly Married Couple', 'sage-slider' ),
	),
);

/**
 *  Used for showing the slider
 *
 *  @package sage
 */

$slides = get_theme_mod( 'sage_slides' );

/* Assign the $slides value to default if the slider not set by the user in customizer. */
if ( ! is_array( $slides ) || empty( $slides ) ) {
	$slides = $sage_default_slider_settings;
}


if ( is_array( $slides ) && ( is_home() || is_front_page() ) ) : ?>

	<div id="sage-slider" class="flexslider clearfix">

		<?php
		foreach ( $slides as $slide ) :
			$link        = isset( $slide['link'] ) ? $slide['link'] : false;
			$title       = isset( $slide['title'] ) ? sprintf( '<h2 class="slide-title" ><a href="%s">%s</a></h2>', esc_url( $link ), esc_html( $slide['title'] ) ) : false;
			$description = isset( $slide['description'] ) ? sprintf( '<p class="slide-description"><a href="%s">%s</a></p>', esc_url( $link ), esc_html( $slide['description'] ) ) : false;
			$image       = isset( $slide['image'] ) ? sprintf( '<img src="%s" alt="%s">', esc_url( $slide['image'] ), __( 'Slide Image', 'sage-slider' ) ) : false;
			?>
			<div class="sage-slide">
				<?php if ( $title || $description ) { ?>
					<div class="sage-slide-content">
						<div class="row">
							<?php echo $title . $description; ?>
						</div>
					</div>
				<?php } ?>
				<?php echo $image; ?>
			</div>
		<?php endforeach; ?>

	</div> <!-- #sage-slider -->

<?php endif; ?>
