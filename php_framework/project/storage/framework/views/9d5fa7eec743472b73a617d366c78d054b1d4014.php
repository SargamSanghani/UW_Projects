

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6 my-4">
        <div class="card">
            <div class="card-header h5 p-3 text-center font-weight-bold"><?php echo e($title); ?></div>
            <div class="card-body">
                <form action="/admin/creatures/<?php echo e($creature->id); ?>" enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <input type="hidden" name="id" value="<?php echo e($creature->id); ?>" />

                    <p><label for="name">Title<span class="text-danger"> *</span></label><br />
                        <input type="text" name="name" value="<?php echo e(old('name', $creature->name)); ?>" class="form-control">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </p>

                    <p><label for="image">Image</label><br />
                        <?php if($creature->image): ?>
                        <img class="my-2 preview" src="/storage/<?php echo e($creature->image); ?>" alt="<?php echo e($creature->name); ?>" /><br />
                        <?php endif; ?>
                        <input type="file" name="image">
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </p>

                    <p><label for="size">Size<span class="text-danger"> *</span></label><br />
                        <input type="text" name="size" value="<?php echo e(old('size', $creature->size)); ?>" class="form-control">
                        <?php $__errorArgs = ['size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </p>

                    <p><label for="color">Color<span class="text-danger"> *</span></label><br />
                        <input type="text" name="color" value="<?php echo e(old('color', $creature->color)); ?>" class="form-control">
                        <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </p>

                    <p><label for="lifespan">Lifespan<span class="text-danger"> *</span></label><br />
                        <input type="text" name="lifespan" value="<?php echo e(old('lifespan', $creature->lifespan)); ?>" class="form-control">
                        <?php $__errorArgs = ['lifespan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </p>

                    <p><label for="description">Description<span class="text-danger"> *</span></label><br />
                        <textarea type="text" name="description" class="form-control" rows="4"><?php echo e(old('description', $creature->description)); ?></textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </p>
                    <p><input type="submit" class="btn btn-primary" /></p>

                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_framework\project\resources\views/admin/creatures/edit.blade.php ENDPATH**/ ?>