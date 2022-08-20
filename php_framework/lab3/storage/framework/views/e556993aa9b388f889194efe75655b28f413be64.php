<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link href="/css/app.css" rel="stylesheet" />
    <style>
        .thumbnail {
            max-width: 75px;
            height: auto;
        }
    </style>

</head>

<body>
    <?php echo $__env->make('admin.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(session()->has('success')): ?>
    <div class="alert alert-success text-center">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>

    <div class="row justify-content-center">
        <div class="col-md-6 my-4">
            <div class="card">
                <div class="card-header h5 p-3 text-center font-weight-bold">
                    Posts
                </div>
                <div class="card-body">
                    <table class="table table-striped ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <!-- <th scope="col">Content</th> -->
                            <!-- <th scope="col">Category #</th> -->
                        </tr>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row"><?php echo e($post->id); ?></td>
                            <td><?php echo e($post->title); ?></td>
                            <td><img class="thumbnail" src="<?php echo e($post->image); ?>" alt=""></td>
                            <!-- <td><?php echo e($post->content); ?></td> -->
                            <!-- <td><?php echo e($post->category_id); ?></td> -->
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </table>
                    <div class="">
                        <?php echo $posts->links('pagination::bootstrap-5'); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\php_framework\lab3\resources\views/admin/index.blade.php ENDPATH**/ ?>