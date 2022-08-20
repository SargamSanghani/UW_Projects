<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>
    <h1><?php echo e($title); ?></h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Year Published</th>
            <th>Number of Pages</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($book->id); ?></td>
            <td><?php echo e($book->title); ?></td>
            <td><?php echo e($book->year_published); ?></td>
            <td><?php echo e($book->num_pages); ?></td>
            <td>
                <form action="/books/<?php echo e($book->id); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input type="hidden" name="id" value="<?php echo e($book->id); ?>">
                    <button type="submit" style="padding: 6px; background:#900; color:white; border:1px solid" onclick="return confirm('Seriously?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>

</html><?php /**PATH C:\xampp\htdocs\php_framework\class_work\day4\crud\resources\views/books/index.blade.php ENDPATH**/ ?>