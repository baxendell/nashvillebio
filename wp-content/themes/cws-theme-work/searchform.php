<form role="search" method="get" id="searchform"
    class="searchform no_auto" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="pos-rel">
        <input type="text" value="<?php echo get_search_query(); ?>" placeholder="Search" name="s" id="s" />
        <div class="ab-search">
	        <input type="submit" id="searchsubmit"
	            value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />
	        <i class="icon icon-search"></i>
        </div>
    </div>
</form>