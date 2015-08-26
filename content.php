<article class="
	col-sm-8 col-sm-offset-2
	col-xs-12 col-xs-offset-0
	<?php echo get_post_class(); ?>
	" id="post-<?php the_ID(); ?>">
	
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
	<header>
		<h2 class="entry-title">
			<span><?php the_title(); ?></span>
			<small><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ) ?>"><?php echo esc_html( get_the_date() ) ?></time></small>
		</h2>
	</header>
	</a>
	
	<div class="entry-summary">
		<?php the_post_thumbnail('thumbnail');  ?>
		<?php the_excerpt(); ?>
	</div>
	
</article>
