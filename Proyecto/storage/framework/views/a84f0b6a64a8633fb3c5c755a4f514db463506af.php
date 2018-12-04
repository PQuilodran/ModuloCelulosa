<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nueva Bitacora</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('Bitacora.index')); ?>"> Volver </a>
            </div>
        </div>
    </div>


    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Ups!</strong> Hay un error con los datos ingresados o no estan completos los campos..<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


    <form action="<?php echo e(route('Bitacora.store')); ?>" method="POST">
    	<?php echo csrf_field(); ?>


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Titulo:</strong>
		            <input type="text" name="titulo" class="form-control" placeholder="Titulo">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Materia:</strong>
		            <textarea class="form-control" name="materia" placeholder="Materia"></textarea>
		        </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Autores:</strong>
		            <textarea class="form-control" name="autor" placeholder="Autor"></textarea>
		        </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Informacion Valiosa:</strong>
		            <textarea class="form-control" style="height:200px" name="info" placeholder="Informacion"></textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Bitacora.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>