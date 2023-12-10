<?php 
include("../db.php");

// AGREGAR A LA TABLA  Y BASE DE DATOS.

$stm = $conexion -> prepare("SELECT * FROM contactos");
$stm -> execute();
$contactos = $stm -> fetchAll(PDO::FETCH_ASSOC);


// ELIMINAR DE LA TABLA Y BASE DE DATOS..

if(isset($_GET['id'])) {

$txtid = (isset($_GET['id'])?$_GET['id']:"");

$stm = $conexion -> prepare("DELETE FROM contactos WHERE id=:txtid");
$stm -> bindParam(":txtid",$txtid);
$stm -> execute();

header("location:index.php");

}

?>


<?php include("../template/header.php"); ?>

<div class="contenedor p-3">
<h2 style="color: brown;" class="fw-bold">DESARROLLOS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla de Registro:</h2>

<a style="background: brown;" class="btn text-white fw-bold" href="agregar.php">Nuevo Cliente
<img src="../img/cliente.svg" alt=""></i> 
</a>

<a style="background: navy;" class="btn text-white fw-bold" href="excel.php">Excel
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

  <?php foreach($contactos as $contacto) { ?>

    <tr>
      <th scope="row"><?php echo $contacto['id']; ?></th>
      <td><?php echo $contacto['nombre']; ?></td>
      <td><?php echo $contacto['cedula']; ?></td>
      <td><?php echo $contacto['correo']; ?></td>
      <td><?php echo $contacto['telefono']; ?></td>
      <td><?php echo $contacto['direccion']; ?></td>
      <td><?php echo $contacto['fecha']; ?></td>

      <td>
        <a style="background: brown;" class="btn text-white"  href="editar.php?id=<?php echo $contacto['id']; ?>" role="button"><img src="../img/editar.svg" alt=""></a>

        <a style="background: navy;" class="btn text-white"  href="javascript:borrar(<?php echo $contacto['id']; ?>);" role="button"><img src="../img/eliminar.svg" alt=""></a>
      </td>

    </tr>

    <?php } ?>

  </tbody>
</table>
</div>
<script>

function borrar(id) {

  Swal.fire({
  title: '¿Deseas Borrar el registro?',
  showCancelButton: true,
  confirmButtonText: 'Si, Borrar',
}).then((result) => {
  if (result.isConfirmed) {
  
window.location ="index.php?id="+id;

  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})

}


</script>


<?php include("../template/footer.php"); ?>