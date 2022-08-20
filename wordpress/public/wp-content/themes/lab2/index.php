<?php get_header() ?>
<!-- Start of: main  -->
<main>

    <div id="wrapper" class="menu">
        <div class="categories">
            <?php get_sidebar() ?>
        </div>

        <div class="list">

            <div class="header">
                Recent Posts
            </div>

            <?php if (have_posts()) : ?>
                <div class="product-list">
                    <?php while (have_posts()) : ?>

                        <?php the_post(); ?>
                        <article>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <span class="meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></span>
                            <?php the_excerpt(); ?>
                        </article>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</main>
<!-- End of: main  -->

<?php get_footer(); ?>