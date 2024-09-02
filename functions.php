<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function my_scripts() {
	wp_enqueue_style('bootstrap4', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
	wp_enqueue_style('slickdev_slick_slider_css', get_stylesheet_directory_uri() . '/css/slick-slider.css', array(), '1.0', 'all');
	wp_enqueue_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css');
	wp_enqueue_script( 'boot2','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script('custom_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), 1.0, true);
	wp_enqueue_script('contact_js', get_stylesheet_directory_uri() . '/js/contact.js', array( 'jquery' ), 1.0, true);
	wp_enqueue_script('megamenu_js', get_stylesheet_directory_uri() . '/js/megamenu.js', array( 'jquery' ), 1.0, true);

	wp_enqueue_script('slickdev_slick_slider_js', get_stylesheet_directory_uri() . '/js/slick-slider.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('slickdev_custom_js', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

function enqueue_load_fa() {
	wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');


add_shortcode( 'custom_application_feature', 'custom_application_feature_func' );
function custom_application_feature_func($atts) {
	$page_id = $atts['id'];

?>
<div class="feature_wrap">
	<?php
	if($page_id === "500"){
		for($i = 1; $i<= 8; $i++){
			if($i != 7){
				if((get_field( "feature_".$i."_title") != "") && (get_field( "feature_".$i."_text" ) != "")){
					if($i % 2 == 1){
						echo '<div class="row">';
					}
	?>
	<div class="col-lg-6 col-md-6 col-sm-6">
		<div class="a_card_wrap">
			<div class="a_card_devider"></div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1"><i class="fa-solid fa-circle-check"></i></div>
				<div class="col-lg-11 col-md-11 col-sm-11">
					<div class="a_card_title"><?php echo get_field( "feature_".$i."_title" ) ?></div>
					<div class="a_card_text">
						<?php echo get_field( "feature_".$i."_text" ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if($i % 2 == 0){
			echo '</div>';
		}
				}
			}else{
				if((get_field( "feature_".$i."_title") != "") && (get_field( "feature_".$i."_text" ) != "")){
	?>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="a_card_wrap">
				<div class="a_card_devider"></div>
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 feature_full_width_sidebar"><i class="fa-solid fa-circle-check"></i></div>
					<div class="col-lg-11 col-md-11 col-sm-11">
						<div class="a_card_title"><?php echo get_field( "feature_".$i."_title" ) ?></div>
						<div class="a_card_text">
							<?php echo get_field( "feature_".$i."_text" ) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
				}
			}
		}
	}else if($page_id === "501"){
		for($i = 1; $i<= 12; $i++){
			if($i <= 8){
				if((get_field( "feature_".$i."_title") != "") && (get_field( "feature_".$i."_text" ) != "")){
					if($i % 2 == 1){
						echo '<div class="row">';
					}
	?>
	<div class="col-lg-6 col-md-6 col-sm-6">
		<div class="a_card_wrap">
			<div class="a_card_devider"></div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1"><i class="fa-solid fa-circle-check"></i></div>
				<div class="col-lg-11 col-md-11 col-sm-11">
					<div class="a_card_title"><?php echo get_field( "feature_".$i."_title" ) ?></div>
					<div class="a_card_text">
						<?php echo get_field( "feature_".$i."_text" ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if($i % 2 == 0){
			echo '</div>';
		}
				}
			}else{
				if((get_field( "feature_".$i."_title") != "") && (get_field( "feature_".$i."_text" ) != "")){
	?>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="a_card_wrap">
				<div class="a_card_devider"></div>
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 feature_full_width_sidebar"><i class="fa-solid fa-circle-check"></i></div>
					<div class="col-lg-11 col-md-11 col-sm-11">
						<div class="a_card_title"><?php echo get_field( "feature_".$i."_title" ) ?></div>
						<div class="a_card_text">
							<?php echo get_field( "feature_".$i."_text" ) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
				}
			}
		}
	}else if(($page_id === "894")  || ($page_id === "898") || ($page_id === "4936")){
		for($i = 1; $i<= 8; $i++){
			if((get_field( "feature_".$i."_title") != "") && (get_field( "feature_".$i."_text" ) != "")){
	?>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="a_card_wrap">
				<div class="a_card_devider"></div>
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 feature_full_width_sidebar"><i class="fa-solid fa-circle-check"></i></div>
					<div class="col-lg-11 col-md-11 col-sm-11">
						<div class="a_card_title"><?php echo get_field( "feature_".$i."_title" ) ?></div>
						<div class="a_card_text">
							<?php echo get_field( "feature_".$i."_text" ) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
			}
		}
	}else{
		for($i = 1; $i<= 8; $i++){
			if((get_field( "feature_".$i."_title") != "") && (get_field( "feature_".$i."_text" ) != "")){
				if($i % 2 == 1){
					echo '<div class="row">';
				}
	?>
	<div class="col-lg-6 col-md-6 col-sm-6">
		<div class="a_card_wrap">
			<div class="a_card_devider"></div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1"><i class="fa-solid fa-circle-check"></i></div>
				<div class="col-lg-11 col-md-11 col-sm-11">
					<div class="a_card_title"><?php echo get_field( "feature_".$i."_title" ) ?></div>
					<div class="a_card_text">
						<?php echo get_field( "feature_".$i."_text" ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if($i % 2 == 0){
			echo '</div>';
		}
			}
		}
	}
	?>

</div>
<?php
}

/** Admin page customization  */

add_action( 'login_enqueue_scripts', 'slick_dev_login_logo' );

function slick_dev_login_logo() {
?>
<style type="text/css">
	#login h1 a, .login h1 a {
		background-image: url(/wp-content/uploads/2024/05/LOGO.svg);
		width: 250px;
		background-size: contain;
		background-repeat: no-repeat;
		background-color: transparent;
	}

	#wp-submit {
		background-color: #F26229;
		border: none;
		padding: 5px 20px;
	}

	.login form {
		border-radius: 5px;
	}

	.login form .input:focus {
		border-color: #F26229;
		box-shadow: 0 0 0 1px #F26229;
	}
</style>
<?php
}

add_filter( 'login_headerurl', 'slick_dev_login_logo_link' );

function slick_dev_login_logo_link( $url ) {
	return home_url( '/' );
}

function custom_loader_script() {
?>
<!-- NitroPack Exclude Start -->
<script>
	document.addEventListener("DOMContentLoaded", function() {
		window.addEventListener('load', function() {
			var counter = 0; // Initialize a counter
			var intervalId = setInterval(function() {
				var plcoverElement = document.getElementById('plcover');
				if (plcoverElement) {
					plcoverElement.click();
					console.log("Plcover clicked");
				}
				counter++; // Increment the counter
				if (counter === 3) { // Stop after 3 executions
					clearInterval(intervalId);
				}
			}, 1000); // 1000 milliseconds = 1 second
		});
	});
</script>
<!-- NitroPack Exclude End -->
<?php
}
add_action('wp_footer', 'custom_loader_script');


function custom_blue_block_func($atts) {
	// Set default values
	$defaults = array(
		'image_src' => '/wp-content/uploads/2024/06/blue_block_desktop.jpg',
		'title' => 'Let’s Work Together to Create Your Perfect Product',
		'description' => 'Default description text here.', // Add default description
		'button_text' => 'Get a callback',
		'button_url' => '/contact-us/',
	);

	// Parse attributes
	$atts = shortcode_atts($defaults, $atts);

	// Output HTML
	ob_start();
?>
<div class="blue_block_wrap">
	<div class="row">
		<div class="col-lg-2 col-md-4 col-sm-4">
			<img
				 class="blue_block_image alignnone"
				 title="Custom Application Development"
				 src="<?php echo esc_url($atts['image_src']); ?>"
				 alt=""
				 />
		</div>
		<div class="col-lg-10 col-md-8 col-sm-8">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="blue_block_title">
						<?php echo esc_html($atts['title']); ?>
					</div>
					<div class="blue_block_description">
						<?php echo esc_html($atts['description']); ?>
					</div>

					<div class="blue_block_button">
						<a class="blue_block_get_callback" href="<?php echo esc_url($atts['button_url']); ?>">
							<?php echo esc_html($atts['button_text']); ?>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<?php
	return ob_get_clean();
}
add_shortcode('custom_blue_block', 'custom_blue_block_func');

function custom_blue_block_func_two($atts) {
	// Set default values
	$defaults = array(
		'image_src' => '/wp-content/uploads/2024/06/blue_block_desktop.jpg',
		'title' => 'Let’s Work Together to Create Your Perfect Product',
		'button_text' => 'Get a callback',
		'button_url' => '/contact-us/',
	);

	// Parse attributes
	$atts = shortcode_atts($defaults, $atts);

	// Output HTML
	ob_start();
?>
<div class="blue_block_wrap">
	<div class="row">
		<div class="col-lg-2 col-md-4 col-sm-4">
			<img
				 class="blue_block_image alignnone"
				 title="<?php echo esc_attr($atts['title']); ?>"
				 src="<?php echo esc_url($atts['image_src']); ?>"
				 alt=""
				 />
		</div>
		<div class="col-lg-10 col-md-8 col-sm-8">
			<div class="row blue_right_block">
				<div class="col-lg-8 col-md-12 col-sm-12 blue_right_sub_block">
					<div class="blue_block_title">
						<?php echo esc_html($atts['title']); ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 blue_right_sub_block right_side">
					<div class="blue_block_button">
						<a class="blue_block_get_callback" href="<?php echo esc_url($atts['button_url']); ?>">
							<?php echo esc_html($atts['button_text']); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	return ob_get_clean();
}
add_shortcode('custom_blue_block_two', 'custom_blue_block_func_two');

function post_slider_shortcode() {
	ob_start();
?>
<div class="card-slider">
	<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 10, 
	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) :
	while ($the_query->have_posts()) : $the_query->the_post();
	?>
	<div class="slider__item col-md-4 col-sm-12">
		<div class="card">
			<?php if (has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>">
				<img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
			</a>
			<?php endif; ?>
			<div class="card-body">
				<h5 class="card-title">
					<a href="<?php the_permalink(); ?>">
						<?php 
	$title = get_the_title();
	if (strlen($title) > 30) {
		$title = mb_strimwidth($title, 0, 60, '...');
	}
	echo esc_html($title);
						?>
					</a>
				</h5>
				<p class="card-text"><small class="text-muted"><?php echo get_the_date(); ?></small></p>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary post-slider-btn">
					Read More 
				</a>
			</div>
		</div>
	</div>
	<?php
	endwhile;
	wp_reset_postdata();
	endif;
	?>
</div>
<?php
	return ob_get_clean();
}
add_shortcode('post_slider', 'post_slider_shortcode');

