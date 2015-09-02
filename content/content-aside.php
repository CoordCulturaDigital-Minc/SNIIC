<article class="
	col-sm-8 col-sm-offset-2
	col-xs-12 col-xs-offset-0
	<?php echo get_post_class(); ?>
	" id="post-<?php the_ID(); ?>">
	
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
	
	<?php if ( get_previous_post_link() || get_next_post_link() ) { ?>
	
	<nav class="clearfix">
		<?php if  ( get_next_post_link() ) : ?>
		<div class="next"><h4 class="entry-title"><small>Anterior</small><span><?php next_post_link( '%link', '%title' );?></span></h4></div>
		<?php  endif; if  ( get_previous_post_link() ) : ?>
		<div class="previous"><h4 class="entry-title"><small>Seguinte</small><span><?php previous_post_link( '%link', '%title' );?></span></h4></div>
		<?php endif; ?>
	</nav>
	
	<?php } ?>

	<?php comments_template( '', true ); ?>
</article>
