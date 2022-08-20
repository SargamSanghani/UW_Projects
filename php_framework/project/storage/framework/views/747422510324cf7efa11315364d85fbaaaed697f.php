

<?php $__env->startSection('content'); ?>
<h2 class="text-center h3 m-4"><?php echo e($data->name); ?></h2>

<div class="row m-0">

    <div class="col-md-3"></div>

    <div class="col-md-6">

        <img class="card-img-top detail-img" src="/images/<?php echo e($data->image); ?>" alt="<?php echo e($data->name); ?>">

        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td><?php echo e($data->name); ?></td>
                </tr>
                <tr>
                    <th scope="row">Size</th>
                    <td><?php echo e($data->size); ?></td>
                </tr>
                <tr>
                    <th scope="row">Color</th>
                    <td><?php echo e($data->color); ?></td>
                </tr>
                <tr>
                    <th scope="row">Life Span</th>
                    <td><?php echo e($data->lifespan); ?></td>
                </tr>
                <tr>
                    <th scope="row">Description</th>
                    <td><?php echo $data->description; ?></td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="col-md-3"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_framework\project\resources\views/show.blade.php ENDPATH**/ ?>