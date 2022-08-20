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

			<span class="meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></span>

			<?php the_content(); ?>

	    </article><!-- #post-## -->

			<?php endwhile; ?>
		<?php endif; ?>


	<div id="respond">
			<?php comments_template();  ?>
	</div>

			</div><!-- /primary -->

			<?php get_sidebar('posts'); ?>
</div><!-- /content -->

<?php get_footer(); ?>