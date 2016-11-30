<?php $__env->startSection('content'); ?>

<?php echo $__env->make('store.partials.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class='container text-center'>
  <div id='books'>
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <div class='book white-panel'>
        <h3><?php echo e($book->title); ?></h3><hr>
        <img src="<?php echo e($book->image); ?>" width="200">
        <div class='book-info panel'>
          <p><?php echo e($book->extract); ?></p>
          <h3><span class="label label-success">Precio: $<?php echo e(number_format($book->price,2)); ?></span></h3>
          <p>
            <a class="btn btn-warnign" href="<?php echo e(route('cart-add', $book->slug)); ?>">
              <i class="fa fa-cart-plus"></i> Lo quiero</a>
            <a class="btn btn-primary" href="<?php echo e(route('book-detail', $book->slug)); ?>">
              <i class="fa fa-chevron-circle-right"></i> Leer mas</a>
          </p>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('store.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>