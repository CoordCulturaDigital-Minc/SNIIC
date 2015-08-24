<?php get_header(); ?>

<div class="section-wrap wrap">
<section class="row center-block">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

<?php else :
	
// 	DO SOME TEMPLATE PLACEHOLDER

endif; ?>

</section>
</div>

<?php get_footer(); ?>
