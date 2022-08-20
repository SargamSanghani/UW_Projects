

<?php $__env->startSection('content'); ?>
<h2 class="text-center m-4 h3">Creatures</h2>

<div class="row m-0">

    <div class="col-md-3"></div>

    <div class="col-md-6">

        <div class="row">
            <?php $__currentLoopData = $creatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $creature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6">
                <div class="card m-3">
                    <img class="card-img-top thumbnail" src="/images/<?php echo e($creature->image); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($creature->name); ?></h5>
                        <p class="card-text ellipsis-3"><?php echo $creature->description; ?></p>
                        <a href="creatures/<?php echo e($creature->id); ?>" class="btn bg-blue text-white font-weight-bold my-2 px-3 py-2">View
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_framework\lab2\resources\views/creatures.blade.php ENDPATH**/ ?>