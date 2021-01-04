<?php  ?>
<div class="search-wrap">
	<!-- search -->
	<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
		<input type="hidden" name="post_type" value="post">
		<input class="search-input" type="search" name="s" placeholder="<?php _e( '검색', 'righttax' ); ?>" value="<?php echo get_search_query();?>">
		<button class="search-submit" type="submit" role="button"><?php _e( '검색', 'righttax' ); ?></button>
	</form>
	<!-- /search -->
</div>
<?php  ?>