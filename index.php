<?php
  require "view-comp/header.php";
 ?>

  <main>
    <?php
      // if(isset($_SESSION['userId'])){
      //   echo '<h5 class="display-7"><center><b>Login Successful! Welcome to Add To Cart!</b></center></h5> ';
      // }
      //
      // else {
      //   echo '<h5 class="display-7"><center><b>Maligayang pagdating, guest!</b></center></h5>';
      // }

     ?>





     <div id="carouselSample" class="carousel slide carousell1" >

    <div class="carousel-inner"  >

      <div class="carousel-item active">
        <img class ="d-block w-100" src="images/addtocart.png">
        <div class="carousel-caption">
          <h2></h2>

        </div>
      </div>

      <div class="carousel-item">
        <img class ="d-block w-100" src="images/registerna.png">
        <div class="carousel-caption">
          <h2><button  type="submit" class="btn btn-primary " name="login-submit">Login</button></h2>
        </div>

      </div>

      <div class="carousel-item">
        <img class ="d-block w-100" src="images/protektado.png">
        <div class="carousel-caption">
          <h2></h2>
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
