<?php $__env->startSection('content'); ?>
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        USUARIOS <a href="<?php echo e(route('user-create')); ?>" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Usuario</a>
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
              <th>Apellidos</th>
              <th>Email</th>
              <th>Username</th>
              <th>Tipo</th>
              <th>Dirección</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <tr>
                <td>
                  <a href="<?php echo e(route('user-edit', $user)); ?>" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                  </a>
                </td>
                <td>
                  <?php echo Form::open(['route' => ['user-destroy', $user]]); ?>

                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  <?php echo Form::close(); ?>

                </td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->last_name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->type); ?></td>
                <td><?php echo e($user->address); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
          </tbody>
        </table>
      </div>
      <?php echo $users->render(); ?>

    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>