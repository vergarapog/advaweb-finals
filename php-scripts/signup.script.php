<?php

if (isset($_POST['signup-submit'])) {

  require 'databasehandler.script.php';

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confpassword = $_POST['confpassword'];

   if (empty($username) || empty($email) || empty($password) || empty($confpassword)) {
     header("Location: ../signup.php?error=emptyfields&username=".$username."&email=".$email);
     exit();
   }

   else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && (!preg_match("/^[a-zA-Z0-9]*$/", $username))) {
     header("Location: ../signup.php?error=invalidemailusername");
     exit();
   }

   else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     header("Location: ../signup.php?error=invalidemail&username=".$username);
     exit();
   }

   else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
     header("Location: ../signup.php?error=invalidusername&email=".$email);
     exit();
   }

   else if ($password !== $confpassword) {
     header("Location: ../signup.php?error=passwordcheck&username=".$username."&email=".$email);
     exit();
   }

   else if (strlen($password) < 8) {
     header("Location: ../signup.php?error=passwordcheck2&username=".$username."&email=".$email);
     exit();
   }

   else {

     $sql = "SELECT usernameUser FROM users WHERE usernameUser=? ";
     $stmnt = mysqli_stmt_init($connection);
     if(!mysqli_stmt_prepare($stmnt, $sql)){
       header("Location: ../signup.php?error=sqlerror");
       exit();
     }

       else {
         mysqli_stmt_bind_param($stmnt, "s", $username);
         mysqli_stmt_execute($stmnt);
         mysqli_stmt_store_result($stmnt);
         $resultCheck = mysqli_stmt_num_rows($stmnt);
         if($resultCheck > 0){
           header("Location: ../signup.php?error=userTaken&email=".$email);
           exit();
         }

          else{
             $sql = "INSERT INTO users (usernameUser, emailUser, pwdUser) VALUES (?, ?, ?) ";
             $stmnt = mysqli_stmt_init($connection);
             if(!mysqli_stmt_prepare($stmnt, $sql)){
               header("Location: ../signup.php?error=sqlerror");
               exit();
             }
             else {
               $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

               mysqli_stmt_bind_param($stmnt, "sss", $username, $email, $hashedPassword );
               mysqli_stmt_execute($stmnt);
               header("Location: ../signup.php?signup=success");
               exit();
             }
        }
     }
   }
     mysqli_stmnt_close($stmnt);
     mysqli_close($connection);

}

else {
  header("Location: ../signup.php");
  exit();
}
