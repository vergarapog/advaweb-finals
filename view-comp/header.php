<?php
 	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title> AddToCart </title>

<link rel="stylesheet" href="css/signup.css">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>

        <header>
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #a8cdd6;">
          <a href="#">
            <img src="images/web-logo-final.png" alt="logo" height="75" width="150">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">

              <li class="nav-item active"><b><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></b> </li>
              <li class="nav-item"><b><a class="nav-link" href="#">Shop</a></b> </li>
              <li class="nav-item"><b><a class="nav-link" href="#">Contact</a> </b></li>

            </ul>

          </div>

            <div>
							<?php
							if(isset($_SESSION['userId'])){
								echo '<form class="" action="php-scripts/logout.script.php" method="post">
	                <button type="submit" class="btn btn-primary " name="logout-submit">Logout</button>
	              </form>';
							}

							else {
								echo '<form class="form-inline" action="php-scripts/login.script.php" method="post">
	                <input type="text" name="emailusername" placeholder="Username/E-mail" class="form-control">
	                <input type="password" name="password" placeholder="Password" class="form-control">

	                <button  type="submit" class="btn btn-primary " name="login-submit">Login</button>
	              </form>

                <form class="" action="signup.php" method="post">
                  <button type="submit" class="btn btn-primary " name="link-signup">Walang Account? Register na dito!</button>
                </form>';
							}
							 ?>




            </div>
          </nav>
        </header>

			<body>
