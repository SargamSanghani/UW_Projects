<?php get_header() ?>
<!-- Start of: main  -->
<main>

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

                        <?php the_content(); ?>

                    </article>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</main>
<!-- End of: main  -->

<?php get_footer(); ?>