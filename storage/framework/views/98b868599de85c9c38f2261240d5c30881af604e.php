<?php if(Auth::check()): ?>
  <li class="dropdown">

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <i class="fa fa-user"></i> <?php echo e(Auth::user()->username); ?> <span class="caret"></span>
    </a>
    <ul class="dropdown-menu"  role="menu">
      <li><a href=" <?php echo e(route('admin-home')); ?>">Administración</a></li>
      <li><a href=" <?php echo e(route('logout')); ?>">Cerrar Sesión</a></li>
    </ul>

  </li>
<?php else: ?>
  <li class="dropdown">

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <i class="fa fa-user"></i><span class="caret"></span>
    </a>
    <ul class="dropdown-menu"  role="menu">
      <li><a href=" <?php echo e(route('login-get')); ?>">Iniciar Sesión</a></li>
      <li><a href=" <?php echo e(route('register-get')); ?>">Registrarse</a></li>
    </ul>
  </li>
<?php endif; ?>
