<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add to cart shop</title>

    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">

    <?php
      require "view-comp/header.php";
     ?>

</head>
<body>




  <div id="content">
      <div class="container">
          <div class="col-md-12">

              <ul class="breadcrumb">
                  <li>
                      <a href="index.php">Home</a>
                  </li>
                  <li>
                      Shop
                  </li>
              </ul>

          </div>

          <div class="col-md-3">

  <!-- Caller of the sideshop format-->

  <!-- <?php

   include("sideshop.php");

   ?> -->

           </div><!-- col-md-3 Finish -->

           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->

                       <div id="mainImage"><!-- #mainImage Begin -->
                         <div id="carouselSample" class="carousel slide" data-interval="4000" data-ride="carousel" >
                           <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                               <li data-target="#carouselSample" data-slide-to="0" class="active" ></li>
                               <li data-target="#carouselSample" data-slide-to="1"></li>
                               <li data-target="#carouselSample" data-slide-to="2"></li>
                           </ol><!-- carousel-indicators Finish -->

                               <div class="carousel-inner"  >

                                    <div class="carousel-item active">
                                        <img src="images/menshirt.jpg" class="img-responsive" alt="menshirt" width="400" length="300">
                                        <div class="carousel-caption">
                                          <h2></h2>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/menshirt.jpg" class="img-responsive" alt="menshirt" width="400" length="300">
                                        <div class="carousel-caption">
                                          <!-- <h2><button  type="submit" class="btn btn-primary " name="login-submit">Login</button></h2> -->
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/menshirt.jpg" class="img-responsive" alt="menshirt" width="400" length="300">
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
                       </div><!-- mainImage Finish -->

                   </div><!-- col-sm-6 Finish -->

                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center"> Polo Shirt Men</h1>

                           <form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label">Products Quantity</label>

                                   <div class="col-md-7">
                                          <select name="product_qty" id="" class="form-control">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select>

                                    </div>

                               </div><!-- form-group Finish -->

                               <div class="form-group"><!-- form-group Begin -->
                                   <label class="col-md-5 control-label">Product Size</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->

                                       <select name="product_size" class="form-control"><!-- form-control Begin -->

                                           <option>Select a Size</option>
                                           <option>Small</option>
                                           <option>Medium</option>
                                           <option>Large</option>

                                       </select><!-- form-control Finish -->

                                   </div><!-- col-md-7 Finish -->
                               </div><!-- form-group Finish -->

                               <p class="price">Php 50</p>

                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                           </form><!-- form-horizontal Finish -->

                       </div><!-- box Finish -->


                   </div><!-- col-sm-6 Finish -->


               </div><!-- row Finish -->

               <div class="box" id="details"><!-- box Begin -->

                       <h4>Product Details</h4>

                   <p>

                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione praesentium ipsum accusantium facere nulla, beatae vitae consequatur enim et nesciunt possimus doloribus omnis dolorum, ea quibusdam excepturi asperiores, temporibus! Consequatur?

                   </p>

                       <h4>Size</h4>

                       <ul>
                           <li>Small</li>
                           <li>Medium</li>
                           <li>Large</li>
                       </ul>

                       <hr>

               </div><!-- box Finish -->

               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You Maybe Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->

                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="images/tempshirt.jpg" alt="Product 6" width="200" length="200">
                            </a>

                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Top Women</a></h3>

                                <p class="price">Php 40</p>

                            </div><!-- text Finish -->

                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->



               </div><!-- #row same-heigh-row Finish -->

           </div><!-- col-md-9 Finish -->

       </div><!-- container Finish -->
   </div><!-- #content Finish -->

   <!-- Caller of the footer-->
   <?php

    include("view-comp/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>
</html>
