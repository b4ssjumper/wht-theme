<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
<meta property="dcterms:title" content="<?php _e('Wittoesch Haustechnik - Ihr Servicepartner für Gebäudetechnik -Leipzig', 'wht') ?>">
<meta property="dcterms:identifier" content="<?php _e('wht-leipzig.de', 'wht') ?>">
<meta property="dcterms:description" content="<?php _e('Sie haben ein technisches Problem? Egal ob Heizung, Sanitär oder Lüftung wir sind Ihr kompetenter Partner in Leipzig wenn es um die Haustechnik geht!', 'wht') ?>">
<meta property="dcterms:subject" content="<?php _e('Heizung, Sanitär, Kälte, Klima, Lüftung, Service, Wartung, Sanierung', 'wht') ?>">
<meta name="DC.title" content="<?php _e('Wittoesch Haustechnik - Ihr Servicepartner für Gebäudetechnik -Leipzig ', 'wht') ?>">
<meta name="DC.identifier" content="<?php _e('wht-leipzig.de', 'wht') ?>">
<meta name="DC.description" content="<?php _e('Sie haben ein technisches Problem? Egal ob Heizung, Sanitär oder Lüftung wir sind Ihr kompetenter Partner in Leipzig wenn es um die Haustechnik geht! ', 'wht') ?>">
<meta name="DC.subject" content="<?php _e('Heizung, Sanitär, Kälte, Klima, Lüftung, Service, Wartung, Sanierung', 'wht') ?>">
<meta name="geo.placename" content="<?php _e('Shakespearestraße 62, 04107 Leipzig, Deutschland', 'wht') ?>" />
<meta name="geo.position" content="<?php _e('51.3260700;12.3816300', 'wht') ?>" />
<meta name="geo.region" content="<?php _e('DE-Sachsen', 'wht') ?>" />
<meta name="ICBM" content="<?php _e('51.3260700, 12.3816300', 'wht') ?>"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<div class="wrapper wrapper--styled" class="hfeed">
	<div id="masthead">
		<div id="branding" role="banner">
			<?php if (get_header_image()) : ?>
			<div id="site-header">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img src="<?php header_image();?>">
				</a>
			</div>
			<?php endif; ?>
		</div><!-- #branding -->

		<div id="access-mobile">
			<button><i class="fas fa-th"></i></button>
		</div>

		<?php 
    global $post;
    $post_slug = $post->post_name;
?>

		<div id="access" role="navigation">
			<?php
            wp_nav_menu([
                'container_class' => 'menu-header',
                'theme_location'  => 'primary',
            ]);
            ?>    
			<a class="header-button header-button--desktop" href="<?php echo get_permalink( get_page_by_path( 'unternehmen/impressum' ) ) ?>" class="button">
				<?php 
				_e('Tel: ', 'twentyten');
				$themeMods = get_fields('option');
				if (!empty($themeMods['telephone'])) {
					print $themeMods['telephone'];
				}  
				?>
			</a>
		</div><!-- #access -->
	</div><!-- #masthead -->
	
	<a class="header-button header-button--mobile" href="tel:+4934122171040" class="button">
		<?php 
		_e('Tel: ', 'twentyten');
		$themeMods = get_fields('option');
		if (!empty($themeMods['telephone'])) {
			print $themeMods['telephone'];
		}  
		?>
	</a>
</div><!-- .wrapper -->
