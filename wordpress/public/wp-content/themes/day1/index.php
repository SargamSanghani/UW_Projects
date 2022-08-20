<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 Theme</title>
    <?php wp_head(); ?>
</head>
<body>

    <?php if(have_posts())  : ?>
        <?php while(have_posts())  : ?>
            <?php the_post(); ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h1>
            <?php the_excerpt(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</body>
</html>