<?php $__env->startSection('title', 'The List of Tasks'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div>
            <a href = "<?php echo e(route('tasks.show', ['id' => $task->id])); ?>"> <?php echo e($task->title); ?> </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div>There are not tasks!</div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive - Universitas Pertamina\kuliah\udemy (laravel)\task-list\resources\views/index.blade.php ENDPATH**/ ?>