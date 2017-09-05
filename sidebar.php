<div class="jumbotron">
	<h3>Search</h3>
	<?php get_search_form(); ?>
	<h3>About Me</h3>
	<p><?php the_author_meta( 'description' ); ?></p>
	<h3>Archives</h3>
	<ul>
		<h4><?php wp_get_archives( 'type=monthly' ); ?></h4>
	</ul>
	<h3>Categories</h3>
		<ul>
			<h4><?php wp_list_categories( 'title_li='); ?></h4>
		</ul>
</div>