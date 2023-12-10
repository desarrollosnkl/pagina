<?php 
$conexion = mysqli_connect("localhost","root","","nkl");

if(isset($_POST['registrar'])) {

if(strlen($_POST['nombre']) 
>=1 && strlen($_POST['cedula']) 
>=1 && strlen($_POST['correo']) 
>=1 && strlen($_POST['telefono']) 
>=1 && strlen($_POST['direccion']) 
>=1 && strlen($_POST['fecha']) >=1 ) {

$nombre = trim($_POST['nombre']);
$cedula = trim($_POST['cedula']);
$correo = trim($_POST['correo']);
$telefono = trim($_POST['telefono']);
$direccion = trim($_POST['direccion']);
$fecha = trim($_POST['fecha']);

$consulta="INSERT INTO barberia (nombre,cedula,correo,telefono,direccion,fecha) VALUES ('$nombre','$cedula','$correo','$telefono','$direccion','$fecha')";

mysqli_query($conexion,$consulta);
mysqli_close($conexion);

header("location:tabla.php");

}

}
 ?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DESARROLLOS¡NKL!</title>
    <link rel="stylesheet" href="../css/berbe.css">
  </head>
  <body>

  <form  action="" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br><br><br>
                          
                            <h2 style="font-weight: bold;" class="text-center text-white">Registrar cliente:</h2>
                            <div class="form-group">

                            <label style="font-size: 20px;" for="nombre" class="form-label text-white fw-bold">Nombre:</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" placeholder="ingrese su nombre" required>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 20px;" for="cedula" class="text-white">Cedula:</label><br>
                                <input type="text" name="cedula" id="cedula" class="form-control" placeholder="ingrese su cedula">
                            </div>
                        
                            <div class="form-group">
                            <label style="font-size: 20px;" for="correo" class="text-white">Correo:</label><br>
                                <input type="correo" name="correo" id="correo" class="form-control" placeholder="ingrese su correo" required>
                                 
                            </div>

                            <div class="form-group">
                                  <label style="font-size: 20px;" for="telefono" class="form-label text-white">Telefono:</label>
                                <input type="text"  id="telefono" name="telefono" class="form-control" placeholder="ingrese su telefono" required>
                                 
                           </div>

                           <div class="form-group">
                                  <label style="font-size: 20px;" for="direccion" class="form-label text-white">Direccion:</label>
                                <input type="text"  id="direccion" name="direccion" class="form-control" placeholder="ingrese su direccion" required>
                                 
                           </div>

                            <div class="form-group">
                                  <label style="font-size: 20px;" for="fecha" class="form-label text-white">Fecha:</label>
                                <input type="date"  id="fecha" name="fecha" class="form-control" placeholder="ingrese su fecha" required>
                                
                           </div>
                        
                                <div class="mb-3">
                                    
                               <input type="submit" value="Agregar"class="btn btn-warning" 
                               name="registrar">
                               <a href="tabla.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
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