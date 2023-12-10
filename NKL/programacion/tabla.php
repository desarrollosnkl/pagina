<?php  
include("../db.php");
// agregar a la base de datos...
$stm = $conexion -> prepare("SELECT * FROM programacion");
$stm -> execute();
$programacion = $stm -> fetchAll(PDO::FETCH_ASSOC);

// eliminar de la base de datos...

if(isset($_GET['id'])) {

$txtid = (isset($_GET['id'])?$_GET['id']:"");

$stm = $conexion -> prepare("DELETE FROM programacion WHERE id=:txtid");
$stm -> bindParam(":txtid",$txtid);
$stm -> execute();

header("location:tabla.php");

}

?>


<?php include("../template/header.php"); ?>

<div class="contenedor p-3">
<h2 style="color: brown;" class="fw-bold">DESARROLLOS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla de Registro de Programacion:</h2>

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

<?php foreach($programacion  as $programas) { ?>

            <tr class="">
                <td scope="row"><?php echo $programas['id']; ?></td>
                <td><?php echo $programas['nombre']; ?></td>
                <td><?php echo $programas['cedula']; ?></td>
                <td><?php echo $programas['correo']; ?></td>
                <td><?php echo $programas['telefono']; ?></td>
                <td><?php echo $programas['direccion']; ?></td>
                <td><?php echo $programas['fecha']; ?></td>

<td>
    <a style="background: brown;" class="btn text-white" href="editar.php?id=<?php echo $programas['id']; ?>" role="button"><img src="../img/editar.svg" alt=""></a>

    <a style="background: navy;" class="btn text-white" href="javascript:borrar(<?php echo $programas['id']; ?>);" role="button"><img src="../img/eliminar.svg" alt=""></a>
</td>

            </tr>

            <?php } ?>

        </tbody>
    </table>
</div>


<script>

function borrar(id) {

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