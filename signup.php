<?php
  require "view-comp/header.php";
 ?>

  <main>
    <div>
      <section>
        <!-- <h1>Registration Page</h1> -->
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
<br>
   <div class="container register-form">
                <div class="form">
                     <div class="note">
                         <p>Registration Page</p>
                     </div>

<div class="form-content">


        <form action="php-scripts/signup.script.php" method="post">
    <div class="row">
          <div class="col-md-6">

              <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username" >
              </div>

              <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="E-mail" >
              </div>

          </div>

          <div class="col-md-6">
              <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" >
              </div>

                <div class="form-group">
          <input type="password" class="form-control" name="confpassword" placeholder="Repeat Password" >
                </div>
              </div>

          <button type="submit" class="btnSubmit" name="signup-submit">Signup</button>
        </form>

  </div>
</div>


    </div>




      </section>
    </div>
  </main>




 <?php
   require "view-comp/footer.php";
  ?>
