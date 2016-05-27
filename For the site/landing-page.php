<?php
/**
 * Template Name: Video Landing Page
 */
?>
<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head <?php do_action( 'add_head_attributes' ); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

	<?php /* Embeds HTML5shiv to support HTML5 elements in older IE versions plus CSS Backgrounds */ ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>

<?php

//Get all the custom fields!
$title_image           = get_field( 'title_image' );
$page_title            = get_field( 'page_title' );
$page_subtitle         = get_field( 'page_subtitle' );
$background_image      = get_field( 'background_image' );
$main_quote            = get_field( 'main_quote' );
$quote_author          = get_field( 'quote_author' );
$rent_movie_link       = get_field( 'rent_movie_link' );
$buy_movie_link        = get_field( 'buy_movie_link' );
$find_a_screening_link = get_field( 'find_a_screening_link' );
$vimeo_shortcode       = get_field( 'vimeo_shortcode' );

$info_box_title_1       = get_field( 'info_box_title_1' );
$info_box_text_1        = get_field( 'info_box_text_1' );
$info_box_image_1       = get_field( 'info_box_image_1' );
$info_box_button_text_1 = get_field( 'info_box_button_text_1' );
$info_box_link_1        = get_field( 'info_box_link_1' );

$info_box_title_2       = get_field( 'info_box_title_2' );
$info_box_text_2        = get_field( 'info_box_text_2' );
$info_box_image_2       = get_field( 'info_box_image_2' );
$info_box_button_text_2 = get_field( 'info_box_button_text_2' );
$info_box_link_2        = get_field( 'info_box_link_2' );

$info_box_title_3       = get_field( 'info_box_title_3' );
$info_box_text_3        = get_field( 'info_box_text_3' );
$info_box_image_3       = get_field( 'info_box_image_3' );
$info_box_button_text_3 = get_field( 'info_box_button_text_3' );
$info_box_link_3        = get_field( 'info_box_link_3' );

$about_link       = get_field( 'about_link' );
$contact_link     = get_field( 'contact_link' );
$photography_link = get_field( 'photography_link' );
$facebook_link    = get_field( 'facebook_link' );
$twitter_link     = get_field( 'twitter_link' );
$video_link       = get_field( 'video_link' );

?>

<div class="landing-wrap" style="background-image: url('<?php echo $background_image; ?>');">

	<!-- HEADER SECTION -->

	<header id="landing-header">
		<!-- <h1><?php echo $page_title; ?></h1>
        <p><?php echo $page_subtitle; ?></p> -->

		<img id="title-image" src="<?php echo $title_image; ?>" alt="<?php echo $page_title; ?>">
	</header>

	<!-- MORE MAIN SECTION -->

	<section id="landing-main-section">
		<div class="grid-items">

			<div href="#" class="grid-item">
				<div id="quote-box">
					<?php if ( is_active_sidebar( 'blessed_are_widget_area' ) ) : ?>
						<div id="testimonials-sidebard" class="primary-sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'blessed_are_widget_area' ); ?>
						</div><!-- #primary-sidebar -->
					<?php endif; ?>
					<!-- <p class="quote-text"><?php echo $main_quote; ?></p>
                    <h4><?php echo $quote_author ?></h4> -->
				</div>
				<div id="buy-rent-list-items">
					<ul class="buy-rent-list-items">
						<li class="buy-rent-list-item">
							<a href="<?php echo $rent_movie_link; ?>" target="_blank" class="">Rent Movie<span
									class="right-arrow">&raquo;</span></a>
						</li>
						<li class="buy-rent-list-item">
							<a href="<?php echo $buy_movie_link ?>" target="_blank" class="">Buy Movie<span
									class="right-arrow">&raquo;</span></a>
						</li>
						<li class="buy-rent-list-item">
							<a href="<?php echo $find_a_screening_link ?>" target="_blank" class="">Find a
								Screening<span class="right-arrow">&raquo;</span></a>
						</li>
					</ul>

				</div>
			</div>
			<div href="#" class="grid-item grid-item-big">
				<div class="video">
					<div class="video-wrapper">
						<?php echo $vimeo_shortcode; ?>
					</div>
				</div>
			</div>


		</div>
	</section>

	<!-- MORE INFO SECTION -->
	<section id="landing-more-info-section">
		<div class="grid-items">

			<div class="grid-item">
				<div class="hover-tile-outer" style="background-image: url('<?php echo $info_box_image_1 ?>');">
					<div class="hover-tile-container">
						<div class="hover-tile hover-tile-visible"></div>
						<div class="hover-tile hover-tile-hidden">
							<h3><?php echo $info_box_title_1; ?></h3>
							<p><?php echo $info_box_text_1; ?></p>
							<a href="<?php echo $info_box_link_1; ?>">
								<button><?php echo $info_box_button_text_1; ?></button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item">
				<div class="hover-tile-outer" style="background-image: url('<?php echo $info_box_image_2 ?>');">
					<div class="hover-tile-container">
						<div class="hover-tile hover-tile-visible"></div>
						<div class="hover-tile hover-tile-hidden">
							<h3><?php echo $info_box_title_2; ?></h3>
							<p><?php echo $info_box_text_2; ?></p>
							<a href="<?php echo $info_box_link_2; ?>">
								<button><?php echo $info_box_button_text_2; ?></button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item">
				<div class="hover-tile-outer" style="background-image: url('<?php echo $info_box_image_3 ?>');">
					<div class="hover-tile-container">
						<div class="hover-tile hover-tile-visible"></div>
						<div class="hover-tile hover-tile-hidden">
							<h3><?php echo $info_box_title_3; ?></h3>
							<p><?php echo $info_box_text_3; ?></p>
							<a href="<?php echo $info_box_link_3; ?>">
								<button><?php echo $info_box_button_text_3; ?></button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer-2" role="contentinfo">
		<ul>
			<li><a href="<?php echo $about_link; ?>" target="_blank">About Me</a></li>
			<li><a href="mailto:<?php echo $contact_link; ?>" target="_blank">Contact</a></li>
			<li><a href="<?php echo $photography_link; ?>" target="_blank">Photography</a></li>
		</ul>

		<div class="footer-secondary-links">

			<ul class="footer-social">
				<li><a href="<?php echo $facebook_link; ?>">
						<img
							src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png"
							alt="Facebook">
					</a></li>
				<li><a href="<?php echo $twitter_link; ?>">
						<img
							src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png"
							alt="Twitter">
					</a></li>
				<li><a href="<?php echo $video_link; ?>">
						<img
							src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/youtube-logo-circle.png"
							alt="YouTube">
					</a></li>
			</ul>
		</div>
	</footer>

</div>


</body>


<?php wp_footer(); ?>
</body>
</html>