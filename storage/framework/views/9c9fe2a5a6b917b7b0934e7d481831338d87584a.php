<?php $__env->startSection('content'); ?>
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        LIBROS <a href="<?php echo e(route('book-create')); ?>" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Libro</a>
      </h1>
    </div>
    <div class="table-cart">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Editar</th>
              <th>Eliminar</th>
              <th>Titulo</th>
              <th>Extracto</th>
              <th>Genero</th>
              <th>Autor</th>
              <th>Editorial</th>
              <th>Precio</th>
              <th>Imagen</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <tr>
                <td>
                  <a href="<?php echo e(route('book-edit', $book->slug)); ?>" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                  </a>
                </td>
                <td>
                  <?php echo Form::open(['route' => ['book-destroy',$book->slug]]); ?>

                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  <?php echo Form::close(); ?>

                </td>
                <td><?php echo e($book->title); ?></td>
                <td><?php echo e($book->extract); ?></td>
                <td><?php echo e($book->gender->name); ?></td>
                <td><?php echo e($book->author->name); ?></td>
                <td><?php echo e($book->editorial->name); ?></td>
                <td>$<?php echo e(number_format($book->price)); ?></td>
                <td><img src="<?php echo e($book->image); ?>" width="40"></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
          </tbody>
        </table>
      </div>
      <hr>
      <?php echo $books->render(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>