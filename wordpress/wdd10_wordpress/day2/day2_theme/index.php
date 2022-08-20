<?php

/**
 * Posts Index template
 */


get_header(); ?>


<div id="content">
	<div id="primary" class="single">

		<h1>Recent News</h1>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>

				<article>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<span class="meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></span>

					<?php the_excerpt(); ?>

				</article><!-- #post-## -->

			<?php endwhile; ?>
		<?php endif; ?>

		<div class="navigation">
			<div class="alignleft"></div>
			<div class="alignright"></div>
		</div>

	</div><!-- /primary -->

	<?php get_sidebar('posts'); ?>
</div><!-- /content -->

<?php get_footer(); ?>