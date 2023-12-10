<?php 

$url_base = "http://localhost/nkl/";


 ?>


<!doctype html>
<html lang="es">

<head>
  <title>DESARROLLOS¡NKL!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="../../NKL/img/icono1.png" type="image/x-icon">
</head>
<body>

<nav  style="background: navy;" class="navbar navbar-expand-sm navbar-dark fw-bold">
      <div class="container">
        <a class="navbar-brand" href="<?php echo $url_base;?>">DESARROLLOS¡NKL!</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $url_base;?>contactos" aria-current="page">Tabla de Registro </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $url_base;?>acesores">Acesores</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cursos Disponibles</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a style="color: brown;" class="dropdown-item" href="../../NKL/programacion/index.php">Porgramacion</a>

                        <a style="color: brown;" class="dropdown-item" href="../../NKL/barberia/index.php">Barberia</a>

                        <a style="color: brown;" class="dropdown-item" href="#">Peluqueria</a>
                        <a style="color: brown;" class="dropdown-item" href="#">Diseño Web</a>
                        <a style="color: brown;" class="dropdown-item" href="#">Excel</a>
                        <a style="color: brown;" class="dropdown-item" href="#">Contabilidad</a>
                        <a style="color: brown;" class="dropdown-item" href="#">Adminitracion</a>
                        <a style="color: brown;" class="dropdown-item" href="#">Pedicure y manicure</a>
                        <a style="color: brown;" class="dropdown-item" href="#">Rp de Computadoras</a>
                        <a style="color: brown;" class="dropdown-item" href="#">Rp de Celulares</a>
                        <a style="color: brown;" class="dropdown-item" href="#">Computacion</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $url_base;?>acesores">Portafolio</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
              <a style="background: brown;" class="btn text-white" href="" role="button">Cerrar Sesion</a>
            </form>
        </div>
  </div>
</nav>

<main class="contenedor">