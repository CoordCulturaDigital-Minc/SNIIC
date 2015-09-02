<?php get_header(); ?>

<div class="section-wrap wrap">
<section class="row center-block">

	<?php if ( have_posts() ) while ( have_posts() ) :
		the_post();
		get_template_part( 'content/content', 'single' );
	
	endwhile; ?>

</section>
</div>

<?php get_footer(); ?>
