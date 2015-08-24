<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	
	if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
	
	if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'simplex' ), max( $paged, $page ) );

?></title>

<?php require_once get_template_directory() . '/dependencies/index.php'; ?>

<style>
	body > .section-wrap {
		background: url('<?php echo get_template_directory_uri() . "/resources/noise.png" ?>') repeat;
	}
</style>

<?php require_once get_template_directory() . '/favicons/index.php'; ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/css3-mediaqueries.js"></script>
<![endif]-->
<?php wp_head(); ?>

</head><body>
