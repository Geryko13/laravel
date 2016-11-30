<?php $__env->startSection('content'); ?>
<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-shopping-cart"></i>
      Autores <small> [Agregar Autor]</small>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="page">
        <?php if(count($errors) > 0): ?>
          <?php echo $__env->make('admin.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>

          <?php echo Form::open(['route'=>'author-store']); ?>

            <div class="form-group">
              <label for="name">Nombre: </label>
              <?php echo Form::text(
                'name',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el nombre...',
                  'autofocus' => 'autofocus'
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label for="nacionalidad">Nacionalidad: </label>
              <?php echo Form::text(
                  'nacionalidad',
                  null,
                  array(
                    'class' => 'form-control',
                    'placeholder' => 'Ingresa la Nacionalidad...'
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label for="birthdate">Fecha Nacimiento: </label>
              <?php echo Form::text(
                  'birthdate',
                  null,
                  array(
                    'class' => 'form-control',
                    'placeholder' => 'Ingresa la Fecha de Nacimiento...'
                  )
                ); ?>

            </div>
            <div class="form-group">
              <?php echo Form::submit('Guardar', array('class' => 'btn btn-primary')); ?>

              <a href="<?php echo e(route('author')); ?>" class="btn btn-warning"> Cancelar</a>
            </div>
          <?php echo Form::close(); ?>

        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>