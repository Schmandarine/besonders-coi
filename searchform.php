<form action="<?php echo home_url( '/' ) ?>" method="get" id="site-searchform">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="submit" alt="Search" src="<?php bloginfo( 'template_url' ); ?>" value="suchen" />
</form>