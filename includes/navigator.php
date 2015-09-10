<div id="navbar" class="navbar">
<nav class="row center-block clearfix navigation main-navigation" id="site-navigation" role="navigation">
	<button class="menu-toggle">Menu</button>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'show_home' => false, 'menu_class' => 'nav-menu col-xs-12 col-sm-8', 'menu_id' => 'primary-menu' ) ); ?>

	<?php get_search_form(); ?>
</nav>
</div><!-- #navbar -->
