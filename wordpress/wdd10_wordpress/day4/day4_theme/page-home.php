<?php 

/**
 * Template for single posts
 */

get_header(); ?>

		<div id="content">
			<div id="primary" class="single">

		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : ?>
				<?php the_post(); ?>

				<article>

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

            <p><small>This page is using <code>page-home.php</code></small></p>

	    </article><!-- #post-## -->

			<?php endwhile; ?>
		<?php endif; ?>

			</div><!-- /primary -->

			<?php get_sidebar(); ?>
</div><!-- /content -->

<?php get_footer(); ?>