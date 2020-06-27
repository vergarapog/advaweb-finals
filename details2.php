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
      $active='Cart';
      require "view-comp/header.php";
     ?>

</head>
<body>




  <div id="content">
      <div class="container">
          <div class="col-md-12">

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                 <li>
                     <a href="index.php">Home</a>
                 </li>
                 <li>
                     Shop
                 </li>

                 <li>
                     <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a> <!-- PHP TITLE DYNAMIC HERE-->
                 </li>
                 <li> <?php echo $pro_title; ?> </li>
             </ul><!-- breadcrumb Finish -->

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
                           <h1 class="text-center"> <?php echo $pro_title; ?> </h1> <!-- PHP PRODUCT TITLE DYNAMIC HERE-->

                           <form action="index.php?add_cart=<?php echo $pro_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin & PHP CART DYNAMIC HERE -->
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

                               <p class="price">$ <?php echo $pro_price; ?></p>  <!-- PHP PRICE DYNAMIC HERE-->

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