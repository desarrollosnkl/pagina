<?php include("template/header.php"); ?>

<div class="contenedor">
<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="img/programacion.avif" class="w-100 d-block" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="img/computacion.webp" class="w-100 d-block" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="img/barberia.jpg" class="w-100 d-block" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img src="img/computacion.webp" class="w-100 d-block" alt="Second slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<br><br>

<style>

  .jumbotron {
  padding-top: 3rem;
  padding-bottom: 3rem;
  margin-bottom: 0;
  background-color: #fff;
}


@media (min-width: 768px) {
  .jumbotron {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }


}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron h1 {
  font-weight: 300;
  color: white;
}

.jumbotron .container {
  max-width: 40rem;
}
</style>

<section data-aos="zoom-in" style="background: linear-gradient(to right, #1d2c3f, navy);" class="jumbotron text-center">
    <div class="container">
      <h1>Servicios</h1>
      <p class="lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam labore libero culpa magni reprehenderit, recusandae reiciendis odit nemo ex quasi. Quisquam accusantium repellendus eveniet eaque dolores dolorem suscipit beatae quis.</p>
      <p>
        <a style="background: brown;"  href="#" class="btn text-white my-2">Registrate</a>
      </p>
    </div>
  </section>

<br><br>

<style>

.video {
  width: 950px;
  border-radius: 10px;
  cursor: pointer;
  
}

.video:hover {
  box-shadow: 0 0 4px white;
}

@media screen and (max-width:800px) {
  .video {
    width: 90vh;
  }
}

@media screen and (max-width:550px) {
  .video {
    width: 65vh;
  }
}

</style>

<main role="main">

<section data-aos="zoom-in" style="background: linear-gradient(to right, navy, brown);" class="jumbotron text-center">
<div class="contenedor">
  <h3 style="color: white;" class="text-center p-2">Sobre Nosotros:</h3>
     <video class="video" controls>
        <source src="img/ejecutivo.mp4" type="video/mp4">
     </video>
    </div>
    <a style="background: yellow;" class="btn text-black" href="" role="button">¡APLICA YA!</a>
</section>


<style>

.card:hover {
  cursor: pointer;
  border: 3px solid white;
  opacity: .8;
}

</style>

<br>
<h2 data-aos="zoom-in" style="color: brown;" class="text-center">Nuestros Cursos:</h2>

  <div  class="album py-4 bg-light">
    <div class="container">

      <div data-aos="zoom-in"  class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img src="img/programacion.avif" alt=""> 
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur recusandae dignissimos ipsum inventore mollitia, maxime hic blanditiis voluptate iure veniam aut suscipit ullam sapiente.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a style="background: brown;" class="btn text-white" href="../NKL/programacion/index.php" role="button">Programacion</a>

                 <a style="background: navy;" class="btn text-white" href="../NKL/acesores/index.php" role="button">Acesores</a>
                </div>
                <small class="text-muted">2023</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img src="img/barberia.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur recusandae dignissimos ipsum inventore mollitia, maxime hic blanditiis voluptate iure veniam aut suscipit ullam sapiente.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a style="background: navy;" class="btn text-white" href="../NKL/barberia/index.php" role="button">Barberia</a>

                <a style="background: brown;" class="btn text-white" href="../NKL/acesores/index.php" role="button">Acesores</a>
                </div>
                <small class="text-muted">2023</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img src="img/computacion.webp" alt="">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur recusandae dignissimos ipsum inventore mollitia, maxime hic blanditiis voluptate iure veniam aut suscipit ullam sapiente.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a style="background: red;" class="btn text-white" href="" role="button">Computacion</a>
                <a style="background: blue;" class="btn text-white" href="../NKL/acesores/index.php" role="button">Acesores</a>
                </div>
                <small class="text-muted">2023</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img src="img/excel.webp" alt="">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur recusandae dignissimos ipsum inventore mollitia, maxime hic blanditiis voluptate iure veniam aut suscipit ullam sapiente.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a style="background: blue;" class="btn text-white" href="" role="button">Excel</a>

                <a style="background: yellow;" class="btn text-black" href="../NKL/acesores/index.php" role="button">Acesores</a>
                </div>
                <small class="text-muted">2023</small>
              </div>
            </div>
          </div>
        </div>
        <div  class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img src="img/celulares.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur recusandae dignissimos ipsum inventore mollitia, maxime hic blanditiis voluptate iure veniam.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a style="background: steelblue;" class="btn text-white" href="" role="button">Rp Celulares</a>

                <a style="background: black;" class="btn text-white" href="../NKL/acesores/index.php" role="button">Acesores</a>
                </div>
                <small class="text-muted">2023</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img src="img/diseño.png" alt="">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur recusandae dignissimos ipsum inventore mollitia, maxime hic blanditiis voluptate iure veniautlo loren</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a style="background: #1d2c3f;" class="btn text-white" href="" role="button">Diseño Grafico</a>

                <a style="background: red;" class="btn text-white" href="../NKL/acesores/index.php" role="button">Acesores</a>
                </div>
                <small class="text-muted">2023</small>
              </div>
            </div>
          </div>
</div>
</main>
<hr class="featurette-divider">

<h2 data-aos="zoom-in" style="color: brown;" class="text-center">Cursos mas Vendidos:</h2>

<hr class="featurette-divider">

<div class="contenedor p-2">
<div data-aos="zoom-in" class="row featurette">
  <div class="col-md-7">
    <h2 style="color: brown;" class="featurette-heading">Programacion: <span class="text-muted">100% Porfesionales</span> <a style="background: brown;" class="btn text-white fw-bold" href="../NKL/programacion/index.php" role="button">Registrar</a></h2>
    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo magnam enim non? Aliquid eaque harum veritatis ratione! Animi id excepturi necessitatibus quia, facere assumenda nemo provident totam unde sequi corrupti perferendis odit temporibus quos dicta. Accusantium aut amet, corporis itaque quo voluptatem atque culpa velit consectetur tempora eos expedita molestias quas nostrum. Dolores nulla minima expedita illo labore sapiente corrupti repellat, provident odit possimus dolorum.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="img/programacion.avif">
  </div>
</div>

<hr class="featurette-divider">

<div data-aos="zoom-in" class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 style="color: navy;"  class="featurette-heading">Diseño Web: <span class="text-muted">100% Profesionales</span> <a style="background: navy;" class="btn text-white fw-bold" href="../NKL/programacion/index.php" role="button">Registrar</a></h2>
    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo magnam enim non? Aliquid eaque harum veritatis ratione! Animi id excepturi necessitatibus quia, facere assumenda nemo provident totam unde sequi corrupti perferendis odit temporibus quos dicta. Accusantium aut amet, corporis itaque quo voluptatem atque culpa velit consectetur tempora eos expedita molestias quas nostrum. Dolores nulla minima expedita illo labore sapiente corrupti repellat, provident odit possimus dolorum.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" src="img/diseño.png">
  </div>
</div>

<hr class="featurette-divider">

<div data-aos="zoom-in" class="row featurette">
  <div class="col-md-7">
    <h2 style="color: blue;"  class="featurette-heading">Excel: <span class="text-muted">100% Profesionales</span> <a style="background: #1d2c3f;" class="btn text-white fw-bold" href="../NKL/programacion/index.php" role="button">Registrar</a></h2>
    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo magnam enim non? Aliquid eaque harum veritatis ratione! Animi id excepturi necessitatibus quia, facere assumenda nemo provident totam unde sequi corrupti perferendis odit temporibus quos dicta. Accusantium aut amet, corporis itaque quo voluptatem atque culpa velit consectetur tempora eos expedita molestias quas nostrum. Dolores nulla minima expedita illo labore sapiente corrupti repellat, provident odit possimus dolorum./p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="img/excel.webp">
  </div>
</div>
</div>
<hr class="featurette-divider">
</div>
<br>
<h2 data-aos="zoom-in" style="color: brown;" class="text-center">Nuestro Trabajo:</h2>

<div class="contenedor p-2">
<div data-aos="zoom-in" class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Profesionalismo:</strong>
              <h3 class="mb-0">
                <a style="color: brown;"  href="#">100% Profesionales</a>
              </h3>
              <div class="mb-1 text-muted">2023</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Contactos</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/instituto.jpg" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Mejor Atension:</strong>
              <h3 class="mb-0">
                <a style="color: navy;" class="" href="#">100% Porfesionales</a>
              </h3>
              <div class="mb-1 text-muted">2023</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Contactos</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/instituto1.jpeg" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>

  <style>
    footer {
  background: linear-gradient(to left, #1d2c3f, navy);
  background-repeat: no-repeat;
  background-size: cover;
  padding: 40px 0 30px 0;
  margin: auto;
  overflow: hidden;
}

.contenedor-footer {
  display: flex;
  width: 100%;
  justify-content: space-evenly;
  margin: auto;
  padding-bottom: 40px;
  border-bottom: 1px solid whitesmoke;
}

.contenido-foo {
  text-align: center;
  

}

.contenido-foo h4 {
  color: whitesmoke;
  cursor: pointer;
 padding-bottom: 2px;
 margin-bottom: 10px;
  
}

.contenido-foo h4:hover {
  color: wheat;
 
}

.contenido-foo p {
  color: wheat;
}

.logotipo {
  color: white;
  text-align: center;
  margin: 20px 0 0 0 ;
}

.icono {
  cursor: pointer;
}

.icono:hover {
  background: hsla(348, 83%, 47%, 0.704);
  border-radius: 7px;
  border: 2px solid whitesmoke;
}

@media screen and (max-width:550px) {
.contenedor-footer {
    flex-direction: column;
 
  }
  .contenido-foo {
    margin-bottom: 20px;
    text-align: center;
  }
}

  </style>
<hr class="featurette-divider">
  <footer data-aos="zoom-in">

  <div class="contenedor-footer" id="Contactos">
    <div class="contenido-foo">
      <h4>Instagram<h4>
        <img src="img/instagran.svg" class="icono" alt="">
      <p>Leni30hidalgo@gmail.com</p>
    </div>

    <div class="contenido-foo">
      <h4>Telefono<h4>
        <img src="img/telefono.svg" class="icono" alt="">
      <p>04126001614</p>
    </div>

    <div class="contenido-foo">
      <h4>facebook<h4>
        <img src="img/face.svg" class="icono" alt="">
      <p>Leni30hidalgo@gmail.com</p>
    </div>
  </div>
  <h2 class="logotipo">DESARROLLOS¡NKL!</h2>
</footer>


<?php include("template/footer.php"); ?>

