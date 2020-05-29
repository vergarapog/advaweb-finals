<?php

if (isset($_POST['signup-submit'])) {

  require 'databasehandler.script.php';

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confpassword = $_POST['confpassword'];

   if (empty($username) || empty($email) || empty($password) || empty($confpassword)) {
     header("Location: ../signup.php?error=emptyfields&username=".$username."&email=".$email);
   }
}
