<div id="secondary">
    <form role="search" method="get" id="searchform" class="searchform" style="margin-top: 20px;" action="/">
        <div>
            <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" class="product-search" placeholder="Search" value="" name="s" id="s" />
            <input type="submit" class="btn" value="Search" style="height: 30px" />
        </div>
    </form>

    <h3>Menu</h3>

    <div class="menu">

        <?php wp_nav_menu(['menu' => 'main']); ?>
    </div>

    <h3>Archive</h3>

    <ul class="menu">

        <?php wp_get_archives(); ?>

    </ul>

    <h3>Categories</h3>

    <ul class="menu">

        <?php wp_list_categories([
            'title_li' => ''
        ]); ?>

    </ul>

</div><!-- /secondary -->