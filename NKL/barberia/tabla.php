<?php 
include("../db.php");

$stm = $conexion -> prepare("SELECT * FROM barberia");
$stm -> execute();
$barberia = $stm -> fetchAll(PDO::FETCH_ASSOC);

// eliminar base de datos y tabla

if(isset($_GET['id'])) {

$txtid = (isset($_GET['id'])?$_GET['id']:"");

$stm = $conexion->prepare("DELETE FROM barberia WHERE id=:txtid");
$stm -> bindParam(":txtid",$txtid);
$stm -> execute();

header("location:tabla.php");


}



 ?>


<?php include("../template/header.php"); ?>

<div class="contenedor p-3">

<h2 style="color: brown;" class="fw-bold">DESARROLLOS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla de Registro de Barberia:</h2>

<a style="background: brown;" class="btn text-white fw-bold" href="agregar.php">Nuevo Usuario
<img src="../img/cliente.svg" alt=""></i> 
</a>

<a style="background: navy;" class="btn text-white fw-bold" href="excel.php">Excel
<i class='bx bxs-grid'></i> </a>

<a style="background: #1d2c3f;" class="btn text-white fw-bold" href="../../NKL/index.php">Inicio
<i class='bx bxs-grid'></i> </a>
<br>

<br>
</form>
      <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscador">
      <hr>
  </form>
<br>

<div class="table-responsive">
<table class="table table-bordered table-primary table_id">
<caption style="color: brown;">DESARROLLOS¡NKL!</caption>
  <thead class="table table-dark">
            <tr>
            <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cedula</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($barberia as $barberos) { ?>

            <tr class="">
                <td scope="row"><?php echo $barberos['id']; ?></td>
                <td><?php echo $barberos['nombre']; ?></td>
                <td><?php echo $barberos['cedula']; ?></td>
                <td><?php echo $barberos['correo']; ?></td>
                <td><?php echo $barberos['telefono']; ?></td>
                <td><?php echo $barberos['direccion']; ?></td>
                <td><?php echo $barberos['fecha']; ?></td>
<td>
<a style="background: brown;" class="btn text-white fw-bold" href="editar.php?id=<?php echo $barberos['id']; ?>" role="button"><img src="../img/editar.svg" alt=""></a>

<a style="background: navy;" class="btn text-white fw-bold" href="javascript:eliminar(<?php echo $barberos['id']; ?>);" role="button"><img src="../img/eliminar.svg" alt=""></a>
</td>
            </tr>

<?php } ?>

        </tbody>
    </table>
</div>
</div>
</div>

<script>

function eliminar(id) {

    Swal.fire({
  title: '¿Deseas Eliminar el registro?',
  showCancelButton: true,
  confirmButtonText: 'Si, Eliminar',
}).then((result) => {
  if (result.isConfirmed) {
  
window.location ="tabla.php?id="+id;

  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})

}

</script>


<?php include("../template/footer.php"); ?>