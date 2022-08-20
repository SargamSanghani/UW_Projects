

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center m-0">
    <div class="col-md-6 my-4">
        <div class="card">
            <div class="card-header h5 p-3 text-center font-weight-bold">
                Creatures
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p class="m-0"><a class="btn btn-success" href="/admin/creatures/create">Add Creatures</a></p>

                    <form action="/admin/creatures" method="get" autocomplete="off" novalidate>
                        <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
                        <input type="submit" hidden value="search" />
                    </form>

                </div>
            </div>

            <table class="table table-striped">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="w-25">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col" class="w-25">Actions</th>
                </tr>
                <?php $__currentLoopData = $creatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $creature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="row"><?php echo e($creature->id); ?></td>
                    <td><img class="thumbnail" src="/storage/<?php echo e($creature->image); ?>" alt="<?php echo e($creature->name); ?>"></td>
                    <td><?php echo e($creature->name); ?></td>
                    <td>
                        <div class="d-flex">

                            <a href="<?php echo e(route('edit', ['creature' => $creature->id])); ?>" class="text-decoration-none text-white bg-primary px-3 py-2 tiny-border d-block mr-2">Edit</a>

                            <form method="post" action="/admin/creatures/<?php echo e($creature->id); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input type="hidden" name="id" value="<?php echo e($creature->id); ?>" />
                                <button class="text-white bg-danger px-2 py-2 border-0 tiny-border" onclick="return confirm('Do you really want to delete <?php echo e($creature->name); ?>?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
            <div class="">
                <?php echo $creatures->links('pagination::bootstrap-5'); ?>

            </div>
        </div>

    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_framework\project\resources\views/admin/index.blade.php ENDPATH**/ ?>