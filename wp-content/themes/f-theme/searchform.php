<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="Найти" />
</form>