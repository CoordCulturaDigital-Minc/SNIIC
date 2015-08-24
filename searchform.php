<form class="col-sm-4 col-xs-12" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e('Search for:'); ?></label>
	
	<input type="text" value="<?php the_search_query(); ?>" name="s" placeholder="Busque aqui" id="s" />
	<button type="submit" id="searchsubmit" value="Buscar">
		<i class="fa fa-search"></i>
	</button>
</form>
