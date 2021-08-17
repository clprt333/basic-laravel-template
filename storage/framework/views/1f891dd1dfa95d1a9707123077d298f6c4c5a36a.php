

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul class="list-group">
            <li class="list-group-item"><?php echo e($message->name); ?></li>
            <li class="list-group-item"><?php echo e($message->email); ?></li>
            <li class="list-group-item"><?php echo e($message->subject); ?></li>
            <li class="list-group-item"><?php echo e($message->message); ?></li>
        </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PHP Projects\Development\basic-website\resources\views/messages.blade.php ENDPATH**/ ?>