<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Marimo Books -  Dashboard</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo e(asset('admin/css/main.css')); ?>">
    </head>
    <body>

      <?php if(\Session::has('message')): ?>
        <?php echo $__env->make('admin.partials.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>

      <?php echo $__env->make('admin.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>

      <?php echo $__env->make('admin.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="<?php echo e(asset('admin/js/main.js')); ?>"></script>


    </body>
</html>
