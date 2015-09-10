<article class="
	col-sm-8 col-sm-offset-2
	col-xs-12 col-xs-offset-0
	single
	<?php echo get_post_class(); ?>
	" id="post-<?php the_ID(); ?>">

	<header>
		<h2 class="entry-title">
			<span><?php the_title(); ?></span>
			<small><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ) ?>"><?php echo esc_html( get_the_date() ) ?></time></small>
		</h2>
		
		<?php
  			$children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
  			if ($children) { ?>
  				<ul class="subpage hidden">
  					<?php echo $children; ?>
  				</ul>
  		<?php } ?>
	</header>

	<div class="entry">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'simplex' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'simplex' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
</article>
