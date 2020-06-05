<?php
  require "view-comp/header.php";
 ?>

  <main>
    <?php
      if(isset($_SESSION['userId'])){
        echo '<p>You are logged in!</p> ';
      }

      else {
        echo '<p>You are logged out!</p>';
      }

     ?>

     <div id="carouselSample" class="carousel slide carousell1" >

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img class ="d-block w-100" src="images/addtocart.png">
        <div class="carousel-caption">
          <h2>Sunrise</h2>
          Deer and Sunrise! Deer (singular and plural) are the hoofed ruminant mammals forming the family Cervidae. The two main groups of deer are the Cervinae, including the muntjac
        </div>
      </div>

      <div class="carousel-item">
        <img class ="d-block w-100" src="images/registerna.png">
        <div class="carousel-caption">
          <h2>MoonMoon</h2>
          The light side of the moon. The Moon is an astronomical body that orbits Earth as its only natural satellite. It is the fifth-largest satellite in the Solar System, and the largest among planetary satellites relative to the size of the planet that it orbits

        </div>

      </div>

      <div class="carousel-item">
        <img class ="d-block w-100" src="images/protektado.png">
        <div class="carousel-caption">
          <h2>Falls</h2>
          Beautiful Waterfalls. A waterfall is an area where water flows over a vertical drop or a series of steep drops in the course of a stream or river. Waterfalls also occur where meltwater drops over the edge of a tabular iceberg or ice shelf.
        </div>

      </div>

      <a href="#carouselSample" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#carouselSample" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>



          </div>


                    </div>

  </main>




 <?php
   require "view-comp/footer.php";
  ?>
