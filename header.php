<?php require 'head.php'; ?>

<div class="header-wrap navigator-wrap wrap">
	
<header class="row center-block">	
	<a class="
		hidden-xs
		col-sm-3 col-sm-offset-1
		col-md-3 col-md-offset-1
	" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php require 'resources/logo.svg'; ?>
	</a>
	
	<a class="
		visible-xs-block
		col-xs-6 col-xs-offset-3
	" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php require 'resources/logo-horizontal.svg'; ?>
	</a>
	
	<a class="
		hidden-xs
		col-sm-6 col-sm-offset-1
		col-md-6 col-md-offset-1
		title
	" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	<h1><?php bloginfo( 'name' ); ?>
		<small><?php bloginfo( 'description' ); ?></small>
	</h1>
	</a>
</header>

<?php require 'navigator.php'; ?>
	
</div>
