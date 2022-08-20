<?php get_header(); ?>

<div id="primary" class="archive">

	<h1 class="archive_title"><?php printf(__('Search Results for: %s'), get_search_query()); ?></h1>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article>

				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				<?php if (get_post_type() == 'post') : ?>
					<?php the_date(); ?>
				<?php endif; ?>

				<?php the_excerpt(); ?>

			</article><!-- #post-## -->

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<h1>Sorry, no results matched your search term.</h1>

	<?php endif; ?>

</div><!-- /primary -->

<div id="secondary">

	<?php get_sidebar(); ?>

</div><!-- /secondary -->

<?php get_footer(); ?>