<?php

/**
 * Template Name: Home Page
 */

get_header(); ?>

<div id="main">
    <h1 class="title text-center m-3">Bringing Space Debris Home!</h1>
    <div class="slider">
        <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
    </div>

    <div class="row">
        <?php $featured = get_featured_list(); ?>
        <?php foreach ($featured as $f) : ?>
            <div class="col-md-4 col-sm-6 mb-10">
                <div>
                    <h2 class="yellow-title"><?php echo get_the_title($f); ?></h2>
                    <?php echo get_the_post_thumbnail($f); ?>
                </div>
                <div class="excerpt">
                    <p><?php echo get_the_excerpt($f); ?></p>
                    <div class="d-flex justify-content-end">
                        <a href="<?php echo get_the_permalink($f); ?>" class="btn-blue">Read More >></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>