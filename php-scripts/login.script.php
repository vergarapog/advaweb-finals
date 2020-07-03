<?php

  if(isset($_POST['login-submit'])){

    require 'databasehandler.script.php';

    $emailusername = $_POST['emailusername'];
    $password = $_POST['password'];

      if (empty($emailusername) || empty($password)){
        header("Location: ../index.php?error=emptyfields");
        exit();
      }
        else{
          $sql = "SELECT * FROM users WHERE usernameUser = ?;";
          $stmt = mysqli_stmt_init($connection);
           if (!mysqli_stmt_prepare($stmt, $sql)){
             header("Location: ../index.php?error=sqlerror");
             exit();
           }
           else{
             mysqli_stmt_bind_param($stmt, "s", $emailusername);
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
              if($row = mysqli_fetch_assoc($result)){
                $passwordCheck = password_verify($password, $row['pwdUser']);
                if($passwordCheck == false){
                  header("Location: ../index.php?error=wrongpass");
                  exit();
                }
                else if($passwordCheck == true){
                  session_start();
                  $_SESSION['userId'] = $row['idUser'];
                  $_SESSION['userName'] = $row['usernameUser'];

                  $_SESSION['fName'] = $row['fName'];
                  $_SESSION['mName'] = $row['mName'];
                  $_SESSION['lName'] = $row['lName'];
                  $_SESSION['suffix'] = $row['suffix'];
                  $_SESSION['address'] = $row['address'];

                  header("Location: ../mainshop.php?login=success");

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
                  $file = fopen("../log-files/logins.txt","a+");
                  fwrite($file,"\n" . $ip . " - " . $emailusername. " - " . $now);

                  exit();
                }
                else {
                  header("Location: ../index.php?error=wrongpass");
                  exit();
                }
              }
              else{
                header("Location: ../index.php?error=nouser");
                exit();
              }

           }
        }

  }



  else {
    header("Location: ../index.php");
    exit();
  }
