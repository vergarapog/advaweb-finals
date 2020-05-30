<?php
 	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>asds</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>

        <header>
          <nav class="navbar navbar-light bg-light">
          <a href="#">
            <img src="images/web-logo.png" alt="logo" height="140" width="140">
          </a>

            <ul>
              <li><a href="index.php">Home</a> </li>
              <li><a href="#">About Me</a> </li>
              <li><a href="#">Contact</a> </li>
            </ul>

            <div>
							<?php
							if(isset($_SESSION['userId'])){
								echo '<form class="" action="php-scripts/logout.script.php" method="post">
	                <button type="submite" name="logout-submit">Logout</button>
	              </form>';
							}

							else {
								echo '<form class="form-inline" action="php-scripts/login.script.php" method="post">
	                <input type="text" name="emailusername" placeholder="Username/E-mail" class="form-control">
	                <input type="password" name="password" placeholder="Password" class="form-control">

	                <button  type="submit" class="btn btn-primary " name="login-submit">Login</button>
	              </form>

	              <a href="signup.php">Register</a>';
							}
							 ?>




            </div>
          </nav>
        </header>

			<body>
