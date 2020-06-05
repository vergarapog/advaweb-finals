<?php
  require "view-comp/header.php";
 ?>

  <main>
    <div >
      <section>
        <h1>Registration Page</h1>
        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "emptyfields"){
              echo '<p class = "">Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "emptyfields"){
              echo '<p class = "">Fill in all fields!</p>';
            }
          }
          else if (@$_GET["signup"] == "success"){
            echo '<p class = "">Sign up Successful!</p>';
          }
         ?>
        <form action="php-scripts/signup.script.php" method="post">
          <input type="text" name="username" placeholder="Username" >
          <input type="text" name="email" placeholder="E-mail" >
          <input type="password" name="password" placeholder="Password" >
          <input type="password" name="confpassword" placeholder="Repeat Password" >

          <button type="submit" name="signup-submit">Signup</button>
        </form>
      </section>
    </div>
  </main>




 <?php
   require "view-comp/footer.php";
  ?>
