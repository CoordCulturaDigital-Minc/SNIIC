<?php get_header(); ?>

<div class="section-wrap wrap">
<section class="row center-block _404">
	
	<article class="
		col-sm-8 col-sm-offset-2
		col-xs-12 col-xs-offset-0
		not-found
		">
		<h1>404.
			<small>Página não encontrada.</small>
		</h1>
	</article>
	
	<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content', get_post_format() );
		}
	?>

</section>
</div>

<?php get_footer(); ?>
