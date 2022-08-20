<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>

<body>
    <h1>Create a new book</h1>

    <form action="/books" method="post">
        <?php echo csrf_field(); ?>
        <p><label for="title">Title</label><br>
            <input type="text" name="title" value="old('title')">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: #f00;"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </p>
        <p><label for="year_published">Year Published</label><br>
            <input type="text" name="year_published" value="old('year_published')">
            <?php $__errorArgs = ['year_published'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: #f00;"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </p>
        <p><label for="num_pages">Number of Pages</label><br>
            <input type="text" name="num_pages" value="old('num_pages')">
            <?php $__errorArgs = ['num_pages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: #f00;"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </p>
        <p><label for="price">Price</label><br>
            <input type="text" name="price" value="old('price')">
            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: #f00;"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </p>
        <p><label for="in_print">In Print</label><br>
            <!-- <?php if(old('in_print')): ?>
            <input checked type="checkbox" name="in_print" value="1">

            <?php else: ?> -->
            <input type="checkbox" name="in_print" value="1" <?php echo e(old('in_print') == 1 ? 'checked' : ''); ?>>
            <?php $__errorArgs = ['in_print'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: #f00;"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </p>

        <p><input type="submit" value="Submit"></p>
    </form>
</body>

</html><?php /**PATH C:\xampp\htdocs\php_framework\class_work\day4\crud\resources\views/books/create.blade.php ENDPATH**/ ?>