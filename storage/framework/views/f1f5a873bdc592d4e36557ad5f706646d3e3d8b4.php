<?php $__env->startSection('content'); ?>
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        GENEROS <a href="<?php echo e(route('gender-create')); ?>" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Genero</a>
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
              <th>Descripción</th>
              <th>Color</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <tr>
                <td>
                  <a href="<?php echo e(route('gender-edit', $gender)); ?>" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                  </a>
                </td>
                <td>
                  <?php echo Form::open(['route' => ['gender-destroy',$gender]]); ?>

                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  <?php echo Form::close(); ?>

                </td>
                <td><?php echo e($gender->name); ?></td>
                <td><?php echo e($gender->description); ?></td>
                <td><?php echo e($gender->color); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>