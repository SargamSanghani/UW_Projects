<?php get_header(); ?>

<div id="primary">

	<h1>Recent Posts</h1>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<?php if (get_post_type() == 'post') : ?>
					<span class="meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></span>
				<?php endif; ?>

				<?php the_excerpt(); ?>

			</article><!-- #post-## -->

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php endif; ?>

</div><!-- /primary -->

<div id="secondary">

	<?php get_sidebar('posts'); ?>

</div><!-- /secondary -->

<?php get_footer(); ?>