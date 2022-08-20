<?php get_header(); ?>

<div id="primary" class="single">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article>

				<h1><?php the_title(); ?></h1>

				<?php if (get_post_type() == 'post') : ?>
					<span class="meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></span>
				<?php endif; ?>

				<?php the_content(); ?>

			</article><!-- #post-## -->

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

		<?php comments_template(); ?>

	<?php endif; ?>

</div><!-- /primary -->

<div id="secondary">

	<?php get_sidebar(); ?>

</div><!-- /secondary -->

<?php get_footer(); ?>