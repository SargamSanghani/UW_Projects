<?php get_header() ?>
<!-- Start of: main  -->
<main>

    <div id="wrapper" class="menu">
        <div class="categories">
            <?php get_sidebar() ?>
        </div>

        <div class="list">

            <div class="header">
                Search: <?= get_search_query(); ?>
            </div>

            <h3 class="m-0">Your search returned <?= esc_html(count($posts)); ?> results</h3>

            <div id="primary" class="single">
                <?php if (count($posts)) : ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>

                            <article>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_excerpt(); ?>
                            </article>

                        <?php endwhile; ?>
                    <?php endif; ?>

                <?php else : ?>

                    <h2>Sorry, No results found!</h2>

                <?php endif; ?>

            </div>
        </div>
    </div>

</main>
<!-- End of: main  -->

<?php get_footer(); ?>