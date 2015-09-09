<?php get_header(); ?>

<div class="section-wrap wrap">
<section class="row center-block">
	<?php
		the_post();
		get_template_part( 'content/content', 'page' );
		comments_template( '', true );
	?>
</section>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
