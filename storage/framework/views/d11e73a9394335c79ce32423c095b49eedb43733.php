<?php $__env->startSection('content'); ?>
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        Editoriales <a href="<?php echo e(route('editorial-create')); ?>" class="btn btn-warning"><i class="fa fa-plus-circle"></i> editorial</a>
      </h1>
    </div>
    <div class="table-cart">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Editar</th>
              <th>Eliminar</th>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Telefono</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $editorials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $editorial): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <tr>
                <td>
                  <a href="<?php echo e(route('editorial-edit', $editorial)); ?>" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                  </a>
                </td>
                <td>
                  <?php echo Form::open(['route' => ['editorial-destroy', $editorial]]); ?>

                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  <?php echo Form::close(); ?>

                </td>
                <td><?php echo e($editorial->name); ?></td>
                <td><?php echo e($editorial->address); ?></td>
                <td><?php echo e($editorial->telephone); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
          </tbody>
        </table>
      </div>
      <?php echo $editorials->render(); ?>

    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>