
<form role="search" method="get" class="searchform" id="searchform" action="<?php echo home_url( '/' ) ?>" >
<!--		<img src="--><?php //echo get_template_directory_uri(); ?><!--/img/icons/search-hover.png" alt="">-->
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Search" />
</form>
