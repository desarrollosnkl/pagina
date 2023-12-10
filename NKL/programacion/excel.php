<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM programacion");
$stm -> execute();
$programacion = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cedula</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($programacion as $programas){ ?>
    <tr>
    <th scope="row"><?php echo $programas['id']; ?></th>
      <td><?php echo $programas['nombre']; ?></td>
      <td><?php echo $programas['cedula']; ?></td>
      <td><?php echo $programas['correo']; ?></td>
      <td><?php echo $programas['telefono']; ?></td>
      <td><?php echo $programas['direccion']; ?></td>
      <td><?php echo $programas['fecha']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>