<?php require 'includes/head.php'; ?>

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

<?php require 'includes/navigator.php'; ?>

	<div class="clearfix text-center" style="background-color: #3496a7;">
		<a href="http://culturadigital.br/sniic/2015/09/18/atencao-as-datas-do-forum-mudaram-para-20-21-e-22-de-outubro/">
			<h3 style="color: white; margin: 12px 15px 15px;">Atenção! As datas do Fórum mudaram para 20, 21 e 22 de outubro.</h3>
		</a>
	</div>

</div>
