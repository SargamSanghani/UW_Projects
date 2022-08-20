<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= esc_attr(get_stylesheet_uri()) ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <h1>WDD WordPress Lab 1</h1>
    </header>

    <div class="container d-flex">
        <div class="w20"></div>
        <div class="sidebar">
            <h2>Sidebar</h2>
            <h3>Pages</h3>
            <?php wp_nav_menu(); ?>

            <h3>Archives</h3>
            <ul>
                <?php wp_get_archives(); ?>
            </ul>

            <h3>Categories</h3>
            <ul>
                <?php wp_list_categories(['title_li' => '']); ?>
            </ul>

        </div>
        <div class="main">
            <?php if (have_posts()) : ?>
                <?php if (is_home()) : ?>
                    <h1>Recent Posts</h1>
                <?php elseif (is_category()) : ?>
                    <h1>Category: <?php single_cat_title(); ?></h1>
                <?php elseif (is_archive()) : ?>
                    <h1>Archive: <?php the_archive_title(); ?></h1>
                <?php endif; ?>

                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>

                    <?php if (is_singular()) : ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php else : ?>
                        <article>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <p>Posted by <?php the_author(); ?> on <?php the_date(); ?> </p>
                            <p>Category:

                                <?php $categories = get_the_category($post->id);
                                foreach ($categories as $cd) {
                                    echo $cd->cat_name . " ";
                                }
                                ?> </p>

                            <?php if (is_singular()) : ?>
                                <?php the_content(); ?>
                            <?php else : ?>
                                <?php the_excerpt(); ?>
                            <?php endif; ?>

                        </article>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <div class="w20"></div>
    </div>

    <footer>
        <p>Copyrights @ 2022</p>
    </footer>
</body>

</html>