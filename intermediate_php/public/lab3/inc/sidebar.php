<?php 

    $cookies = json_decode($_COOKIE['tracker'] ?? '', true) ?? [];

    // limiting cookies array to 10 cookies
    $cookies = array_slice(array_reverse($cookies), 0, 10);

?><div class="col-sm-3 menu-list">
            <p><strong> Last 10 page visited: </strong></p>

            <ul>

                <?php
                    foreach($cookies as $c) {
                        echo "<li>" . (e($c['title']) == 'Index' ? 'Home' : e($c['title'])) . "</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
