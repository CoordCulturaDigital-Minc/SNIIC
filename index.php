<?php get_header(); ?>

<div class="section-wrap wrap">
<section class="row center-block">
	
<header class="
	col-sm-8 col-sm-offset-2
	col-xs-12 col-xs-offset-0
	">
	<h1>Notícias</h1>
</header>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content/content', get_post_format() ); ?>

	<?php endwhile; ?>

<div class="
	col-sm-8 col-sm-offset-2
	col-xs-12 col-xs-offset-0
	">
	<?php
		the_posts_pagination( array(
			'mid_size' => 10,
			'prev_text'          => 'Anterior',
			'next_text'          => 'Seguinte',
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . 'Página' . ' </span>',
		) );
	?>
</div>

<?php else :
	
// 	DO SOME TEMPLATE PLACEHOLDER

endif; ?>

</section>
</div>

<?php get_footer(); ?>
