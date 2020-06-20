<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- DIV AREA PART 2 START border =========================================================================================== -->
   <div id="top"><!-- DIV 1 START -->

       <div class="container"><!-- DIV CONTAINER START -->

           <div class="col-md-6 offer"><!-- DIV 2 START -->

               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">4 Items In Your Cart | Total Price: Php 300 </a>

           </div><!-- DIV 2 END -->

           <div class="col-md-6"><!-- DIV 3 START -->

               <ul class="menu"><!-- MENU START -->

                   <li>
                       <a href="signup.php">Register</a>
                   </li>
                   <li>
                       <a href="checkout.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="Login.php">Login</a>
                   </li>

               </ul><!-- MENU END -->

           </div><!-- DIV 3 END -->

       </div><!-- DIV CONTAINER END -->

   </div><!-- DIV 1 END -->

<!-- DIV AREA PART 1 END border =========================================================================================== -->


<!-- DIV AREA PART 2 START border =========================================================================================== -->

   <div id="navbar" class="navbar navbar-default">

       <div class="container">

           <div class="navbar-header">

               <a href="index.php" class="navbar-brand home">

                   <img src="images/" alt="Add to cart" class="hidden-xs">
                   <img src="images/" alt="Add to cart" class="visible-xs">

               </a>

               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                   <span class="sr-only">Toggle Navigation</span>

                   <i class="fa fa-align-justify"></i>

               </button>

               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                   <span class="sr-only">Toggle Search</span>

                   <i class="fa fa-search"></i>

               </button>

           </div>

           <div class="navbar-collapse collapse" id="navigation">

               <div class="padding-nav">

                   <ul class="nav navbar-nav left">

                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li class="active">
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href=" ">My Account</a>
                       </li>
                       <li>
                           <a href=" ">Shopping Cart</a>
                       </li>
                       <li>
                           <a href=" ">Contact Us</a>
                       </li>

                   </ul>

               </div>

               <a href=" " class="btn navbar-btn btn-primary right">

                   <i class="fa fa-shopping-cart"></i>

                   <span>4 Items In Your Cart</span>

               </a>

               <div class="navbar-collapse collapse right">

                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">

                       <span class="sr-only">Toggle Search</span>

                       <i class="fa fa-search"></i>

                   </button>

               </div>

               <div class="collapse clearfix" id="search">

                   <form method="get" action="results.php" class="navbar-form">

                       <div class="input-group">

                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                           <span class="input-group-btn">

                           <button type="submit" name="search" value="Search" class="btn btn-primary">

                               <i class="fa fa-search"></i>

                           </button>

                           </span>

                       </div>

                   </form>

               </div>

           </div>

       </div>

   </div>


<!-- DIV AREA PART 2 END order =========================================================================================== -->


<!-- DIV AREA PART 3 START border =========================================================================================== -->

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

   <?php

    include("includes/sideshop.php");

    ?>

           </div>

           <div class="col-md-9">
               <div class="box"
                   <h1>Shop</h1>
                   <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                   </p>
               </div>

               <div class="row">
                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

               </div>

                   </div>
                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

               </div>

                   </div>
                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/Product-3b.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

               </div>

                   </div>
                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

               </div>

                   </div>
                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/Product-5a.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

               </div>

                   </div>
                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

               </div>

                   </div>


                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

                   </div>

                   </div>

                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

                   </div>

                   </div>

                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

                   </div>

                   </div>

                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

                   </div>

                   </div>

                   <div class="col-md-4 col-sm-6 center-responsive">

                       <div class="product">

                   <a href="details.php">

                       <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 1">

                   </a>

                   <div class="text">

                       <h3>
                           <a href="details.php">
                               M-Dev Woman T-Shirt
                           </a>
                       </h3>

                       <p class="price">Php 30</p>

                       <p class="button">

                           <a href="details.php" class="btn btn-default">View Details</a>

                           <a href="details.php" class="btn btn-primary">

                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>

                           </a>

                       </p>

                   </div>

                   </div>

                   </div>
               </div>

               <!-- <center>
                   <ul class="pagination">
                       <li class="active;"><a href="#">First Page</a></li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#">Last Page</a></li>
                   </ul>
               </center> -->

           </div>

       </div>
   </div>

<!-- DIV AREA PART 3 END border =========================================================================================== -->


   <!-- Caller of the footer-->
   <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>
</html>
