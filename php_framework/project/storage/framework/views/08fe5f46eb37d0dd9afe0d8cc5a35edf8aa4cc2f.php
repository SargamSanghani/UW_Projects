<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sea Creature</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        .bg-blue {
            background-color: #066DB0;
        }

        .ellipsis-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .thumbnail {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .detail-img {
            max-width: 100%;
            height: 500px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div>
        <h1 class="h2 text-white font-weight-bold p-3 bg-blue text-center">Sea Creatures</h1>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\php_framework\project\resources\views//layouts/header.blade.php ENDPATH**/ ?>