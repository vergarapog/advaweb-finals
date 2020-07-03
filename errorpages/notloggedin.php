<?php
 	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title> Add To Cart </title>


<link rel="stylesheet" href="../css/footer.css">






<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>

        <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #a8cdd6;">
          <a href="index.php">
            <img src="../images/web-logo-final4.png" alt="logo" height="60" width="130">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">

              <li class="nav-item active px-2"><b><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></b> </li>
              <li class="nav-item px-2"><b><a class="nav-link" href="mainshop.php">Shop</a></b> </li>
              <li class="nav-item px-2"><b><a class="nav-link" href="#">Contact</a> </b></li>

            </ul>

          </div>

            <div>
							<?php
              //$userId = $_SESSION['userId'];

							if(isset($_SESSION['userId'])){
								echo '
                <form class="form-inline" action="php-scripts/logout.script.php" method="post">
                  <p class="lead" style="color:white; padding-right: 50px; padding-top: 15px;">Welcome to Add to Cart, '.$_SESSION["userName"].'!</p>
	                <button  type="submit" class="btn btn-sm btn-primary " name="logout-submit">Logout</button>
	              </form>';
							}

							else {
								echo '<form class="form-inline" action="../php-scripts/login.script.php" method="post">
	                <input type="text" name="emailusername" placeholder="Username/E-mail" class="form-control px-2">&nbsp;&nbsp;&nbsp;

	                <input type="password" name="password" placeholder="Password" class="form-control px-2">

	                <button  type="submit" style="margin-left: 7px" class="btn btn-primary " name="login-submit">Login</button>
	              </form>

                <form class="" action="signup.php" method="post">

                  <button type="submit" style="margin-top: 7px" class="btn btn-sm btn-primary " name="link-signup">Walang Account? Register na dito!</button>
                </form>';
							}
							 ?>




            </div>
          </nav>
        </header>

			<body>


 <div class="alert alert-warning" role="alert" style="text-align: center;">
   <br><br><br><br>
   <h3>You are not logged in. Please register or login to purchase this product.</h3>
   <br><br><br>
   <form style="padding-bottom: 300px; " action="../signup.php">
    <input  class="btn btn-info " type="submit" value="Register here!" />
</form>

 </div>





 </body>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 <footer class="section footer-classic context-dark bg-dark" style="background: #2d3246;">
   <br><br>
         <div class="container">
           <div class="row row-30">
             <div class="col-md-4 col-xl-5">
               <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                 <p>Add to cart is a fun, free and trusted way to buy and sell instantly online. Join millions of others on Add to Cart to list products and shop for deals online. Shopping online on Shopee is safe and we make sure of it.  Join our Add to Cart community and start shopping today!.</p>
                 <!-- Rights-->
                 <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>AddToCart</span><span>. </span><span>All Rights Reserved.</span></p>
               </div>
             </div>
             <div class="col-md-4">
               <h5>World Class</h5>
               <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                 <p>Led by experienced professionals and progressive thinkers, the company has grown to be one of the top-notch platforms in the Philippines.
                  Committed to both quantity and quality, it provides consumers with a diverse selection of products from various trusted suppliers. </p>
                 <!-- Rights-->

               </div>
             </div>

               <div class="col-md-4 col-xl-3">
                 <h5>Contacts</h5>
                 <dl class="contact-list">
                   <dt>Address:</dt>
                   <dd>Yakal, Makati</dd>
                 </dl>
                 <dl class="contact-list">
                   <dt>email:</dt>
                   <dd><a href="mailto:#">foryo22@gmail.com</a></dd>
                 </dl>
                 <dl class="contact-list">
                   <dt>phones:</dt>
                   <dd><a href="tel:#">0999 111 4444</a>
                   </dd>
                 </dl>
               </div>
           </div>
         </div>
         <div class="row no-gutters social-container">
           <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
           <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
           <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
           <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
         </div>
       </footer>

 </html>
