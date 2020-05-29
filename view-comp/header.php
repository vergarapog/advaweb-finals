<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title></title

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>

        <header>
          <nav>
          <a href="#">
            <img src="images/web-logo.png" alt="logo">
          </a>

            <ul>
              <li><a href="index.php">Home</a> </li>

              <li><a href="#">About Me</a> </li>
              <li><a href="#">Contact</a> </li>
            </ul>

            <div>
              <form class="" action="php-scripts/login.script.php" method="post">
                <input type="text" name="username" placeholder="Username/E-mail">
                <input type="password" name="password" placeholder="Password">

                <button type="submit" name="login-submit">Login</button>
              </form>
              <a href="signup.php">Register</a>

              <form class="" action="php-scripts/logout.script.php" method="post">
                <button type="submite" name="logut-submit">Logout</button>
              </form>

            </div>
          </nav>
        </header>
