<?php get_header(); ?>

<div id="content">
    <div id="primary" class="single">

        <div id="wrapper" class="menu">
            <div class="categories">
                <?php get_sidebar() ?>
            </div>

            <div class="list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>

                        <article>

                            <h1><?php the_title(); ?></h1>
                            <span class="meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></span>

                            <?php the_content(); ?>

                        </article>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div id="respond">
            <?php comments_template();  ?>
        </div>

    </div>

    <?php get_sidebar('posts'); ?>
</div>

<?php get_footer(); ?>