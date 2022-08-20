<?php include __DIR__ . '/includes/header.inc.php'; ?>
    
<!-- Start of: main  -->
<main>

    <!-- Start of: wrapper  -->
    <div id="wrapper" class="menu">
        <div class="categories">
            <div class="header">Categories</div>
            <ul>
                <li <?php if(isset($_GET['category']) && $_GET['category'] == 0) :?> class="active-cat" <?php endif; ?>>
                    <a href="?p=menu&category=0" class="category">All</a>
                </li>
                <?php foreach($categories as $category) : ?>
                    <li <?php if(isset($_GET['category']) && $_GET['category'] == $category['id']) :?> class="active-cat" <?php endif; ?>>
                        <a href="?p=menu&category=<?=e($category['id'] ?? "")?>" class="category"><?=e($category['category_name'])?></a>
                    </li>
                <?php endforeach; ?>
            </ul>     
        </div>

        <div class="list">

            <div class="header">

                <?php if (isset($_GET['search'])) : ?>
                    Searching for: <?=e($_GET['search'])?>
                <?php else : ?>
                    <?= e($current_category) ?>
                <?php endif ?>
                 (<?=count($products)?>)

                <form class="fr" action="/">
                    <input type="hidden" name="p" value="menu">
                    <input type="search" name="search" class="product-search" placeholder="Search" value="<?=e($search)?>" />
                    <input type="submit" class="btn" value="Search" style="height: 30px"/>
                    <a href="?p=menu&category=0" class="btn">Clear</a>
                </form>

            </div>

            <div class="product-list">
                <?php foreach($products as $p) : ?>
                    <div class="product">
                        <a href="?p=detail&id=<?=e($p['id'])?>"><img src="images/products/<?=e($p['image'])?>" width="287" height="191"
                                alt="<?=e($p['title'])?>" /></a>
                        <p class="title"><?=e($p['title'])?></p>
                        <p><?=e($p['excerpt'])?></p>
                        <p><?=e($p['price'])?> $</p>
                    </div>
                <?php endforeach; ?>

                <?php if (count($products) == 0) : ?>
                    <div>No products found!</div>
                <?php endif ?>

            </div>

        </div>
    </div>
    <!-- End of: wrapper  -->

</main>
<!-- End of: main  -->

<?php  include __DIR__ . '/includes/footer.inc.php'; ?>