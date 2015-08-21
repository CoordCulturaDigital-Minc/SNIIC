<article class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" id="post-<?php the_ID(); ?>">
	
	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'simplex' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
	<header>
		<h2 class="entry-title">
			<span><?php the_title(); ?></span>
			<small><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ) ?>"><?php echo esc_html( get_the_date() ) ?></time></small>
		</h2>
		
		<?php edit_post_link( __( 'Edit', 'simplex' ), '<span class="edit-link">', '</span>' ); ?>
	</header>
	</a>
	
	<?php if ( is_search() ) : ?>
	
	<div class="entry-summary">
		<?php the_post_thumbnail('thumbnail');  ?>
		<?php the_excerpt(); ?>
	</div>
	
	<?php else : ?>
	
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'simplex' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'simplex' ), 'after' => '</div>' ) ); ?>
	</div>
	
	<?php endif; ?>
</article>
