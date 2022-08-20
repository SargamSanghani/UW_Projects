<div class="col-md-4">
    <?php $featured = get_featured_list(); ?>
    <?php foreach ($featured as $f) : ?>
        <div>
            <div class="my-3">
                <div>
                    <h2 class="yellow-title"><?php echo get_the_title($f); ?></h2>
                    <button class="invisible-btn">
                        <a href="<?php echo get_the_permalink($f) ?>"> <?php echo get_the_post_thumbnail($f); ?> </a>
                    </button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>