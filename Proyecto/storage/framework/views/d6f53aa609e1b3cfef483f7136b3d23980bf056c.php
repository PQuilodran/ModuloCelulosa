<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Bitacora</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('Bitacora.index')); ?>"> Volver</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>titulo:</strong>
                <?php echo e($bitacora->titulo); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Materia:</strong>
                <?php echo e($bitacora->materia); ?>

            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info:</strong>
                <?php echo e($bitacora->info); ?>

            </div>
        </div>
    </div>


    
    <div class="col-md-10 clear"><hr><h3>Comentario</h3>
            </div>
            
                                      
           <div class="col-md-10">
                        
                  <div style="background-color:rgba(153, 243, 243,0.5); margin-top: 2%">
                      
                  
                                     
                   </div>                      
                                
                        
              <form class="form-group" action="guardar.php" method='POST'>
                  <label for="comennt">Agregar comentario</label>
                  <textarea type="text" rows="5" name="coment" id="coment" class="form-control"></textarea>
                   <button type="submit" class="btn btn-primary ">Enviar Comentario</button>
               </form>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Bitacora.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>