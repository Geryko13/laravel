<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="<?php echo e(route('home')); ?>">Marimo Books</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text">Store</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(route('cart-show')); ?>"><i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="#">Conocenos</a></li>
        <li><a href="#">Contacto</a></li>

        <?php echo $__env->make('store.partials.menu-user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </ul>
    </div>
  </div>
</nav>
