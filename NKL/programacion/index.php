<?php include("../template/header.php"); ?>

<style>

body {
  background: #1d2c3f;
}

.subtitulo {
  padding: 15px 0;
  text-align: center;
  font-size: 30px;
  color: whitesmoke;
  font-weight: bold;
}

.parrafo {
  color: white;
  text-align: center;
  font-weight: bold;
  font-size: 20px;
}

.contenedor-servicio{
  padding: 40px 0;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-wrap: wrap;
}

.video {
  border-radius: 10px;
}

.video:hover {
  cursor: pointer;
  box-shadow: 0 0 4px white;
}


.contenedor-servicio img{
  width: 45%;
  height: 350px;
  border-radius: 15px;
  
}

.contenedor-servicio img:hover {
  opacity: .8;
  box-shadow: 0 0 5px white;
  cursor: pointer;
}

.cuatro-servicio{
  width: 45%;
}

.n-service{
  margin-bottom: 15px;
  color:  whitesmoke;
}

.number{
  display: inline-block;
  background: hsla(348, 83%, 47%, 0.65);
  color: blanchedalmond;
  width: 30px;
  height: 30px;
  text-align: center;
  border-radius: 7px;
  font-size: 700;
  line-height: 30px;
  margin-right: 7px;

}

a:hover {
  box-shadow: 0 0 3px white;
}

@media screen and (max-width:800px) {
  .subtitulo {
  font-size: 28px;
  }

  .parrafo {
    font-size: 15px;
  }

  /* SERVICIO */

  .contenedor-servicio img {
    width: 90%;
    margin-bottom: 40px;
  }

   .cuatro-servicio {
    width: 90%;
   }

}

@media screen and (max-width:550px) {
  .video {
    width: 65vh;
  }
}
</style>

<section class="contenedor" id="Servicio">
    <h2 class="subtitulo">Programacion:</h2>
    <p class="parrafo">"Registrate y te contactaremos lo mas Rapido Posible"</p>
      <div class="contenedor-servicio">
        <video class="video" controls width="570">
          <source src="../img/programacion.mp4" type="video/mp4">
        </video>
      <div class="cuatro-servicio">
            <div class="service">
                <h4 class="n-service"><span class="number">1</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sunt placeat nemo vitae pariatur quia porro doloribus voluptatum, laudantium qui consectetur deserunt laudantium qui consectetur deserunt.</h4>
            </div>

            <div class="service">
                <h4 class="n-service"><span class="number">2</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sunt placeat nemo vitae pariatur quia porro doloribus voluptatum, laudantium qui consectetur deserunt.</h4>
            </div>
            <a style="background: brown;" class="btn text-white fw-bold" href="tabla.php">Registrate</a>
            
            <a style="background: blue;" class="btn text-white fw-bold" href="../../NKL/index.php">Inicio</a>
         </div>
      </div>
</section>
<br>
<h4 style="color: whitesmoke;" class="text-center" >DESARROLLOS¡NKL!</h4>




<?php include("../template/footer.php"); ?>