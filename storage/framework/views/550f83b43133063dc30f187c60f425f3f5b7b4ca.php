<nav class="navbar navbar-expand-md navbar-dark bg-dark">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::route()->getName() === 'home' ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::route()->getName() === 'about' ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::route()->getName() === 'contact' ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>          
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::route()->getName() === 'get-messages' ? 'active' : ''); ?>" href="<?php echo e(route('get-messages')); ?>">See messages</a>          
          </li>
        </ul>

      </div>
  </nav><?php /**PATH E:\PHP Projects\Development\basic-website\resources\views/inc/navbar.blade.php ENDPATH**/ ?>