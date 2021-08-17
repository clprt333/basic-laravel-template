

<?php $__env->startSection('content'); ?>
    <h1>Contact Us</h1>
    
    <form method="post" action="<?php echo e(route('contact-form-submit')); ?>">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject">
        </div>
        
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" id="message" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PHP Projects\Development\basic-website\resources\views/contact.blade.php ENDPATH**/ ?>