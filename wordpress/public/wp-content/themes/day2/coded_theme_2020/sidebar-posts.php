<?= get_search_form() ?>

<h3>Menu</h3>

<?php wp_nav_menu(); ?>

<h3>Archive</h3>

<ul class="menu">

	<?php wp_get_archives(); ?>

</ul>

<h3>Categories</h3>

<ul class="menu">

	<?php wp_list_categories(['title_li' => '']); ?>

</ul>