<!-- Start of: footer  -->
<footer>

    <!-- Back to top arrow animation  -->
    <div class="up-box">
        <a href="#">
            <img id="up-arrow" src="<?= get_template_directory_uri() ?>/images/up-arrow.png" alt="Up" width="25" height="25">
        </a>
    </div>

    <!-- Social media buttons  -->
    <div id="social_media">
        <?php wp_nav_menu(['menu' => 'footer']); ?>
    </div>
    </div>

    <!-- Copyright and last modified  -->
    <p class="color-white">Copyright &copy; 2021</p>
    <div id="last_modified" class="color-white">
        <script>
            document.scripts[document.scripts.length - 1].parentNode.innerHTML = "Last Modified: " + document.lastModified;
        </script>
    </div>

</footer>
<!-- End of: footer  -->

</div>
</body>

</html>