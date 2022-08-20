<?php get_header(); ?>

<div id="main">
    <div class="slider">
        <img src="<?= get_template_directory_uri() ?>/images/extracted_images/page_header.jpg" alt="Slider" class="auto-img mt-3">
    </div>
    <div class="row">
        <div class="col-md-8">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>

                    <?php the_post(); ?>
                    <div class="mb-3">
                        <h1 class="title my-3"><?php the_title(); ?></h1>
                        <hr>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
        <?php get_sidebar('news'); ?>
    </div>
</div>
<?php get_footer(); ?>