<?php get_header(); ?>

<div id="primary" class="page">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article>

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

			</article><!-- #post-## -->

		<?php endwhile; ?>

	<?php else : ?>

		<h1>Sorry - no content matched your request</h1>

	<?php endif; ?>

</div><!-- /primary -->

<div id="secondary">

	<?php get_sidebar('page'); ?>

</div><!-- /secondary -->

<?php get_footer(); ?>