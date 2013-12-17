<form id="searchform" action="/" method="get" role="search">
	<label class="hidden" for="s">Search</label>
	<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Looking for something?">
	<input id="searchsubmit" class="btn search-btn" type="submit" value="Search">
</form>