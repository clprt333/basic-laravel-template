<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Basic Website Template</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>

        <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container">
            <?php if(Request::is('/')): ?>
                <?php echo $__env->make('inc.showcase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>    

            <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <?php echo $__env->yieldContent('content'); ?>
            </div>

                <div class="col-md-4 col-lg-4">
                    <?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>  
            </div>
        </div>
        <footer id="footer" class="text-center">
            <p>Copyright 2021 &copy; clprt333</p>
        </footer>
    </body>
</html><?php /**PATH E:\PHP Projects\Development\basic-website\resources\views/layouts/app.blade.php ENDPATH**/ ?>