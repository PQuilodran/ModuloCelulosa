@extends('Bitacora.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Bitacora</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Bitacora.index') }}"> Volver</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $bitacora->_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $bitacora->puntos_actividad }}
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

@endsection