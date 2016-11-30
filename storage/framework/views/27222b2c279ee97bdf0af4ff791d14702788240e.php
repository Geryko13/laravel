<?php $__env->startSection('content'); ?>
<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-shopping-cart"></i>
      USUARIOS <small> [Editar Usuario]</small>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="page">
        <?php if(count($errors) > 0): ?>
          <?php echo $__env->make('admin.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
          <?php echo Form::model($user, array('route'=> array('user-update', $user))); ?>

          <input type="hidden" name="method" value="PUT">
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
              <label for="last_name">Apellidos: </label>
              <?php echo Form::text(
                  'last_name',
                  null,
                  array(
                    'class' => 'form-control'
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label for="email">Email: </label>
              <?php echo Form::text(
                  'email',
                  null,
                  array(
                    'class' => 'form-control',
                    'placeholder' => 'Ingresa el Email...',
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label for="username">Username: </label>
              <?php echo Form::text(
                  'username',
                  null,
                  array(
                    'class' => 'form-control',
                    'placeholder' => 'Ingresa el Username...',
                  )
                ); ?>

            </div>
        <div class="form-group">
          <label for="password">Password: </label>
          <?php echo Form::password(
            'password',
            array(
              'class' => 'form-control',
              )
            ); ?>

        </div>
        <div class="form-group">
          <label for="confirm_password">Confirmar Contrasena: </label>
          <?php echo Form::password(
            'password_confirmation',
            array(
              'class' => 'form-control',
              )
            ); ?>

        </div>
        <div class="form-group">
          <label for="type">Tipo: </label>
          <?php echo Form::radio('type','user', $user->type=='user' ? true : false); ?> User
          <?php echo Form::radio('type','admin', $user->type=='admin' ? true : false); ?> Admin
        </div>
        <div class="form-group">
          <label for="address">Address: </label>
          <?php echo Form::text(
            'address',
            null,
            array(
              'class' => 'form-control',
              'placeholder' => 'Ingresa la Dirección...',
              )
            ); ?>

        </div>
        <div class="form-group">
          <label for="bank_account">Cuanta Bancaria: </label>
          <?php echo Form::text(
            'bank_account',
            null,
            array(
              'class' => 'form-control',
              'placeholder' => 'Ingresa la Cuenta Bancaria...',
              )
            ); ?>


          </div>
            <div class="form-group">
              <?php echo Form::submit('Actualizar', array('class' => 'btn btn-primary')); ?>

              <a href="<?php echo e(route('user')); ?>" class="btn btn-warning"> Cancelar</a>
            </div>
          <?php echo Form::close(); ?>

        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>