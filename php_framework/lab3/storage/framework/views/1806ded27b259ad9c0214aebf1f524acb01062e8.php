<?php $__env->startSection('content'); ?>

<div class="col-lg-8">
    <!-- Post content-->
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article>
        <!-- Post header-->
        <header class="mb-4">
            <!-- Post title-->
            <h1 class="fw-bolder mb-1"><?php echo e($post->title); ?></h1>
            <!-- Post meta content-->
            <div class="text-muted fst-italic mb-2"><?php echo e($post->created_at); ?> by WDD</div>
            <!-- Post categories-->
            <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?php echo e($post->category->name); ?></a>
            
        </header>
        <!-- Preview image figure-->
        <figure class="mb-4"><img class="img-fluid rounded" src="<?php echo e($post->image); ?>" alt="<?php echo e($post->title); ?>" /></figure>
        <!-- Post content-->
        <section class="mb-5">
            <p class="fs-5 mb-4"><?php echo e($post->content); ?></p>
        </section>
        <p><a class="btn btn-primary" href="/posts/<?php echo e($post->id); ?>">Read More</a></p>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="pagination content-center">

    <?php echo $posts->links('pagination::bootstrap-5'); ?>


    </div>
                    
</div>
                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/wdd10_php_mvc/day3/blog/resources/views/posts/index.blade.php ENDPATH**/ ?>