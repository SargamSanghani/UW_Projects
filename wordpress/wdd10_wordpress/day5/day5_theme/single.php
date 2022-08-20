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
			
			<div class="featured_image">
				<?php if( has_post_thumbnail() ) : ?>
					<img src="<?=get_the_post_thumbnail_url(); ?>" alt="Featured Image" />
					<?php // the_post_thumbnail('large'); ?>
				<?php else : ?>
					<img src="https://picsum.photos/1024/400" alt="Featured Image" />
				<?php endif; ?>
			</div>

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