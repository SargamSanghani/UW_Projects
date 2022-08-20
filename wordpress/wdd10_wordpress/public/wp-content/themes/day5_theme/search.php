<?php
/**
 * Posts Index template
 */


get_header(); ?>


		<div id="content">
			<div id="primary" class="single">

			<h1>Search: <?= get_search_query(); ?></h1>

            <h3>Your search returned <?= esc_html(count($posts)); ?> results</h3>

            <p><small>This page uses <code>search.php</code></small></p>

        <?php if(count($posts)) : ?>
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : ?>
				<?php the_post(); ?>

				<article>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<?php the_excerpt(); ?>

	    </article><!-- #post-## -->

			<?php endwhile; ?>
		<?php endif; ?>

        <?php else : ?>

            <h2>Sorry, could not find what you were looking for</h2>

        <?php endif; ?>
		
	<div class="navigation">
		<div class="alignleft"></div>
		<div class="alignright"></div>
	</div>

			</div><!-- /primary -->

			<?php get_sidebar('posts'); ?>
</div><!-- /content -->

<?php get_footer(); ?>