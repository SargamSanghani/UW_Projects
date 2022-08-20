<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 theme</title>
    <link rel="stylesheet" href="<?=esc_attr(get_stylesheet_uri()) ?>" />
    <?php wp_head(); ?>
</head>
<body>

<header>
    <img class="logo" src="<?=get_template_directory_uri()?>/images/logo.png" />
    <nav>
        <?php wp_nav_menu(); ?>
    </nav>
</header>

<!--

 On pages where it's a list view... you need an appropriate title
  at the top of the page... eg: Recent Posts

    or...

 Category: Movies

 Archive:  June, 2022

-->

<div class="container">

<div class="main">

    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>
            <?php the_post(); ?>
            <?php if(is_singular()) : ?>
                <h1><?php the_title(); ?></h1>
            <?php else: ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php endif; ?>
            <?php if(is_singular()) : ?>
                <?php the_content(); ?>
            <?php else: ?>
                <?php the_excerpt(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

</div><!-- /main -->

<div class="sidebar">
    <h2>Sidebar</h2>
    <h3>Categories</h3>
    <?php wp_list_categories(['title_li' => '']); ?>
</div><!-- /sidebar -->

    </div>
<?php wp_footer(); ?>
</body>
</html>