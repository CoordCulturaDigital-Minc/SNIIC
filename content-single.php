<article class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" id="post-<?php the_ID(); ?>">
	
	<header>
		<h2 class="entry-title">
			<span><?php the_title(); ?></span>
			<small><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ) ?>"><?php echo esc_html( get_the_date() ) ?></time></small>
		</h2>
		
		<?php edit_post_link( __( 'Edit', 'simplex' ), '<span class="edit-link">', '</span>' ); ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	
	<nav class="clearfix">
			<?php
	global $wp_query;
	
	if ( is_single() ) : ?>
	
		<?php
		if (function_exists('wp_pagenavi')) {
			wp_pagenavi();
		} else {
			?><div class="previous"><?php previous_post_link( '%link', '<i class="fa fa-arrow-left"></i> %title' );?></div><?php 
			?><div class="next"><?php next_post_link( '%link', '%title <i class="fa fa-arrow-right"></i>' );?></div><?php
		} elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) :
			if (function_exists('wp_pagenavi')) {
				wp_pagenavi();
			} else {
				if ( get_next_posts_link() ) : ?>
					<div class="previous">
						<?php next_posts_link( __( '<i class="fa fa-arrow-left"></i> Older posts', 'simplex' ) ); ?>
					</div><?php
				endif;
				
				if ( get_previous_posts_link() ) : ?>
					<div class="next">
						<?php previous_posts_link( __( 'Newer posts <i class="fa fa-arrow-right"></i>', 'simplex' ) ); ?>
					</div><?php
				endif;
			}
		endif;

?>

	</nav>

	<?php comments_template( '', true ); ?>
</article>
