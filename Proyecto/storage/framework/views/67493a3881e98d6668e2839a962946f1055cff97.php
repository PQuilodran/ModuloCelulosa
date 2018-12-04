<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Bitacoras</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('Bitacora.create')); ?>"> Crear Nueva Bitacora</a>
            </div>
        </div>
    </div>


    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>


    <table class="table table-bordered">
        <tr>
            <th>Titulo</th>
            <th>Materia</th>
            <th>Autor</th>
            <th>Info</th>
            <th width="280px">Action</th>
        </tr>
	    <?php $__currentLoopData = $Bitacora; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bitacora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <tr>
	        <td><?php echo e($bitacora->titulo); ?></td>
            <td><?php echo e($bitacora->materia); ?></td>
            <td><?php echo e($bitacora->autor); ?></td>
            <td><?php echo e($bitacora->info); ?></td>
            
	        <td>
                <form action="<?php echo e(route('Bitacora.destroy',$bitacora->id)); ?>" method="POST">

                    <a class="btn btn-info" href="<?php echo e(route('Bitacora.show',$bitacora->_id)); ?>">ver</a>

                    <a class="btn btn-primary" href="<?php echo e(route('Bitacora.edit',$bitacora->_id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>

                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
                
            </td>
            
	    </tr>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Bitacora.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>