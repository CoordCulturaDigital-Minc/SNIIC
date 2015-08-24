<?php get_header(); ?>

<div class="section-wrap wrap">
<section class="row center-block _404">

<header class="
	col-sm-8 col-sm-offset-2
	col-xs-12 col-xs-offset-0
	">
	<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
		<label class="hidden" for="s"><?php _e('Search for:'); ?></label>
		
		<i class="fa fa-search"></i>
		<input type="text" value="" placeholder="Busque aqui" name="s" id="s" />
		<button type="submit" id="searchsubmit" value="Buscar">
			<i class="fa fa-arrow-right"></i>
		</button>
	</form>
</header>

<article class="
	col-sm-8 col-sm-offset-2
	col-xs-12 col-xs-offset-0
	alert
	">
	<h1>404.
		<small>Página não encontrada.</small>
	</h1>
	<p>Parece que você atingiu um endereço inexistente. Tente buscar pela palavra-chave do conteúdo usando a busca.</p></article>

</section>
</div>

<?php get_footer(); ?>
