<?php

include("../db.php");


if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $stm = $conexion -> prepare("SELECT * FROM contactos WHERE id=:txtid");
    $stm -> bindParam(":txtid",$txtid);
    $stm -> execute();

    $registro = $stm -> fetch(PDO::FETCH_LAZY);
    $nombre = $registro['nombre'];
    $cedula = $registro['cedula'];
    $correo = $registro['correo'];
    $telefono = $registro['telefono'];
    $direccion = $registro['direccion'];
    $fecha = $registro['fecha'];

}

if($_POST) {

    $txtid = (isset($_POST['txtid'])?$_POST['txtid']:"");
    $nombre = (isset($_POST['nombre'])?$_POST['nombre']:"");
    $cedula = (isset($_POST['cedula'])?$_POST['cedula']:"");
    $correo = (isset($_POST['correo'])?$_POST['correo']:"");
    $telefono = (isset($_POST['telefono'])?$_POST['telefono']:"");
    $direccion = (isset($_POST['direccion'])?$_POST['direccion']:"");
    $fecha = (isset($_POST['fecha'])?$_POST['fecha']:"");

$stm = $conexion -> prepare("UPDATE contactos SET nombre=:nombre, cedula=:cedula, correo=:correo, telefono=:telefono, direccion=:direccion, fecha=:fecha WHERE id=:txtid");

$stm -> bindParam(":nombre",$nombre);
$stm -> bindParam(":cedula",$cedula);
$stm -> bindParam(":correo",$correo);
$stm -> bindParam(":telefono",$telefono);
$stm -> bindParam(":direccion",$direccion);
$stm -> bindParam(":fecha",$fecha);
$stm -> bindParam(":txtid",$txtid);
$stm -> execute();

header("location:index.php");

}

?>

<!doctype html>
<html lang="es
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DESARROLLOS¡NKL!</title>
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body>

 
  <form  action="" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                    <br><br><br>
                            
                    <h3 class="text-center text-white">Modificar Tabla:</h3>
                        
              <form action="" method="post">

             
               <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>" placeholder="ingrese su nombre">

             
              <label for="nombre" class="text-white">Nombre:</label>
               <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" placeholder="ingrese su nombre">
          
               
              <label for="cedula" class="text-white">Cedula:</label>
               <input type="text" class="form-control" name="cedula" value="<?php echo $cedula; ?>" placeholder="ingrese su cedula">

               
              <label for="correo" class="text-white">Correo:</label>
               <input type="text" class="form-control" name="correo" value="<?php echo $correo; ?>" placeholder="ingrese su correo">

               
              <label for="telefono" class="text-white">Telefono:</label>
               <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="ingrese su telefono">

               <label for="direccion" class="text-white">Direccion:</label>
               <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>" placeholder="ingrese su direccion">

              <label for="fecha" class="text-white">Fecha:</label>
               <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" placeholder="ingrese su fecha">

             <div class="modal-footer">
              <button type="submit" class="btn btn-warning">Actualizar</button>
              <a href="index.php" class="btn btn-danger">Cerrar</a>
   
            </div>

              </form>
                    
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
          



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>