<?php

if (isset($_POST['signup-submit'])) {

  require 'databasehandler.script.php';

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confpassword = $_POST['confpassword'];

  $fName = $_POST['fName'];
  $mName = $_POST['mName'];
  $lName = $_POST['lName'];
  $suffix = $_POST['suffix'];
  $address = $_POST['address'];

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
             $sql = "INSERT INTO users (usernameUser, emailUser, pwdUser, fName, mName, lName, suffix, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";
             $stmnt = mysqli_stmt_init($connection);
             if(!mysqli_stmt_prepare($stmnt, $sql)){
               header("Location: ../signup.php?error=sqlerror");
               exit();
             }
             else {
               $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

               mysqli_stmt_bind_param($stmnt, "ssssssss", $username, $email, $hashedPassword, $fName, $mName, $lName, $suffix, $address );
               mysqli_stmt_execute($stmnt);
               header("Location: ../signup.php?signup=success");

               $now = date('Y-m-d H:i:s');
               if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                  $ip=$_SERVER['HTTP_CLIENT_IP'];
                }
                elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
                }
                else{
                  $ip=$_SERVER['REMOTE_ADDR'];
                }
               $file = fopen("../log-files/registers.txt","a+");
               fwrite($file,"\n" . $ip . " - " . $username. " - " . $now);

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
