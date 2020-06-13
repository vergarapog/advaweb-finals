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
              echo '<center><p class = "text-warning bg-danger"><b>Fill in all fields!<b></p><center>';
            }
            else if($_GET['error'] == "invalidemailusername"){
              echo '<center><p class = "text-warning bg-danger"><b>Invalid Username and E-Mail!<b></p><center>';
            }
            else if($_GET['error'] == "invalidusername"){
              echo '<center><p class = "text-warning bg-danger"><b>Invalid Username!<b></p><center>';
            }
            else if($_GET['error'] == "invalidemail"){
              echo '<center><p class = "text-warning bg-danger"><b>Invalid E-Mail!<b></p><center>';
            }
            else if($_GET['error'] == "passwordcheck"){
              echo '<center><p class = "text-warning bg-danger"><b>Your passwords do not match!<b></p><center>';
            }
            else if($_GET['error'] == "passwordcheck2"){
              echo '<center><p class = "text-warning bg-danger"><b>Password has less than 8 characters!<b></p><center>';
            }
            else if($_GET['error'] == "userTaken"){
              echo '<center><p class = "text-warning bg-danger"><b>Username is already taken!<b></p><center>';
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
              <br>
              <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="E-mail" >
              </div>

          </div>

          <div class="col-md-6">
              <div class="form-group">
          <input id="password1" type="password" class="form-control" name="password" placeholder="Password" >
          <!-- <p><small>Password must have more than 8 characters.</small></p> -->
          <p id="validate-status2">Password must have more than 8 characters.</p>
              </div>

                <div class="form-group">
          <input id="password2" type="password" class="form-control" name="confpassword" placeholder="Repeat Password" >
                </div>
                <p id="validate-status"></p>
              </div>
<br>
          <button type="submit" class="btnSubmit" name="signup-submit">Signup</button>
        </form>

  </div>
</div>


    </div>




      </section>
    </div>
  </main>




<br><br><br><br><br><br><br>

 <?php
   require "view-comp/footer.php";
  ?>
