<?php get_header(); ?>

<div class="section-wrap wrap">
<section class="row center-block">
	
<header class="
	col-sm-8 col-sm-offset-2
	col-xs-12 col-xs-offset-0
	">
	<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
		<label class="hidden" for="s"><?php _e('Search for:'); ?></label>
		
		<i class="fa fa-search"></i>
		<input type="text" value="<?php the_search_query(); ?>" placeholder="Busque aqui" name="s" id="s" />
		<button type="submit" id="searchsubmit" value="Buscar">
			<i class="fa fa-arrow-right"></i>
		</button>
	</form>
</header>

<?php if ( have_posts() == false ) : ?>

<article class="
	col-sm-8 col-sm-offset-2
	col-xs-12 col-xs-offset-0
	alert">
	<p>Parece que não há resultados para sua busca. Tente buscar por outra palavra-chave na busca.</p></article>

<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content/content', 'search' ); ?>

<?php endwhile; ?>

</section>
</div>

<?php get_footer(); ?>
