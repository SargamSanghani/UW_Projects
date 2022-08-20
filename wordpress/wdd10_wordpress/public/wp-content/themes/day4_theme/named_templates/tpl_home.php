<?php 

/**
 * Template Name: Home Page
 */

get_header(); ?>

        <div id="slider">
            <?php echo do_shortcode('[ssslider id="34"]'); ?>
        </div>

		<div id="content">
			<div id="primary" class="featured">


				<?php foreach(wdd10_featured_posts() as $item) : ?>
					<div>
						<h3><?=get_the_title($item)?></h3>
					</div>

				<?php endforeach; ?>

				

			</div><!-- /primary -->

			

			<?php get_sidebar(); ?>
</div><!-- /content -->

<?php get_footer(); ?>