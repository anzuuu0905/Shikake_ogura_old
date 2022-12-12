<form action="<?php echo home_url(); ?>" class="search_container">
	<input type="text" id="search" name="s" size="25" placeholder="ブログ内キーワード検索" value="<?php the_search_query(); ?>">
  <input type="submit" value="&#xf002;">
</form>