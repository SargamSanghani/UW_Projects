<?php

    $title = 'Contact';
    include __DIR__ . '/../inc/functions.php';
    include __DIR__ . '/../inc/header.inc.php';
?><div class="row mr0">
        <div class="col-sm-9">
            <h1><?=e($title);?></h1>
            <p>
                <strong>Lorem Ipsum is simply dummy text of the</strong> printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
                only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem 
                Ipsum
            </p>

            <h2>Secondary Header</h2>
            <ul>
                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                printer took a galley of type and scrambled it to make a</li>
                <li>Remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</li>
            </ul>

            <h3>Ternary Header</h3>
            <ul>
                <li>Lorem Ipsum has been the industry's standard dummy text</li>
                <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like</li>
            </ul>
        </div>

        <?php include __DIR__ . '/../inc/sidebar.php'; ?>
    </div>
</div>

</body>
</html>