<?php $__env->startSection('content'); ?>
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i> PEDIDOS
      </h1>
    </div>
    <div class="table-cart">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Eliminar</th>
              <th>Fecha</th>
              <th>Usuario</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <tr>
                <td>
                  <?php echo Form::open(['route' => ['order-destroy', $order]]); ?>

                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  <?php echo Form::close(); ?>

                </td>
                <td><?php echo e($order->created_at); ?></td>
                <td><?php echo e($order->user_id); ?></td>
                <td>$<?php echo e(number_format($order->total,2)); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
          </tbody>
        </table>
      </div>
      <?php echo $orders->render(); ?>

    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>