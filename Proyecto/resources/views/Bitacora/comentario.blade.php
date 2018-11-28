<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Content Editable</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<pdiv class="detailBox">
    
    <div class="actionBox">
       <label for="comennt">Comentarios</label>
                
          <div style="background-color:rgba(153, 243, 243,0.5); margin-top: 2%">
              
          
                             
           </div>                      
                        
                
      <form class="form-group" action="guardar.php" method='POST'>
      <label for="comennt">Agregar comentario</label>
      <textarea type="text" rows="5" name="coment" id="coment" class="form-control"></textarea>
       <button type="submit" class="btn btn-primary " style="width: 15%">Enviar Comentario</button>
       </form>
    </div>
</pdiv>
</div>
</body>
</html>