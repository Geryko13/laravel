<?php $__env->startSection('content'); ?>
<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-shopping-cart"></i>
      LIBROS <small> [Agregar Libro]</small>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="page">
        <?php if(count($errors) > 0): ?>
          <?php echo $__env->make('admin.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>

          <?php echo Form::open(['route'=>'book-store']); ?>

            <div class="form-group">
              <label for="title">Titulo: </label>
              <?php echo Form::text(
                'title',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el Titulo...',
                  'autofocus' => 'autofocus'
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label for="description">Descripción: </label>
              <?php echo Form::textarea(
                  'description',
                  null,
                  array(
                    'class' => 'form-control'
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label for="extract">Extracto: </label>
              <?php echo Form::text(
                'extract',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el Extracto...',
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label for="price">Precio:  </label>
              <?php echo Form::text(
                'price',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el Precio...',
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label for="image">Imagen: </label>
              <?php echo Form::text(
                'image',
                null,
                array(
                  'class' => 'form-control',
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label for="publicdate">Fecha Publicación: </label>
              <?php echo Form::text(
                'publicdate',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => '2001-01-01',
                  )
                ); ?>

            </div>
            <div class="form-group">
              <label class="control-label" for="author_id"> Autor </label>
              <?php echo Form::select('author_id', $authors, null, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
              <label class="control-label" for="gender_id"> Genero </label>
              <?php echo Form::select('gender_id', $genders, null, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
              <label class="control-label" for="editorial_id"> Editorial </label>
              <?php echo Form::select('editorial_id', $editorials, null, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
              <?php echo Form::submit('Guardar', array('class' => 'btn btn-primary')); ?>

              <a href="<?php echo e(route('book')); ?>" class="btn btn-warning"> Cancelar</a>
            </div>
          <?php echo Form::close(); ?>

        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>