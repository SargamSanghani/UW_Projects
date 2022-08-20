<div id="secondary">


    <form role="search" method="get" id="searchform" class="searchform" action="/">
        <div>
            <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" value="" name="s" id="s" />
            <input type="submit" id="searchsubmit" value="Search" />
        </div>
    </form>
        <h3>Menu</h3>

        <div class="menu">
        <?php wp_nav_menu(['menu' => 'main']); ?>
        </div>

</div><!-- /secondary -->