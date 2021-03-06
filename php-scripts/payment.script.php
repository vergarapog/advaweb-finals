<?php

if (isset($_POST['payment-submit'])) {

  require 'databasehandler.script.php';

  $userName = $_POST['userName'];

  $idUser = $_POST['idUser'];
  $idProd = $_POST['idProd'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];

  $isCod = $_POST['isCod'];
  $CCnum = $_POST['CCnum'];
  $CCExpDate = $_POST['CCExpDate'];
  $CVV = $_POST['CVV'];


             $sql = "INSERT INTO orders (idUser, idProd, qty, totalPrice, isCod, CCnumber, CCexpDate, CVV) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";
             $stmnt = mysqli_stmt_init($connection);
             if(!mysqli_stmt_prepare($stmnt, $sql)){
               header("Location: ../mainshop.php?error=sqlerror");
               exit();
             }
             else {
               $hashedCCnum = password_hash($CCnum, PASSWORD_DEFAULT);
               $hashedCVV = password_hash($CVV, PASSWORD_DEFAULT);

               mysqli_stmt_bind_param($stmnt, "ssssssss", $idUser, $idProd, $quantity, $price, $isCod, $hashedCCnum, $CCExpDate, $CVV);
               mysqli_stmt_execute($stmnt);
               header("Location: ../ordersuccess.php");

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
               $file = fopen("../log-files/orders.txt","a+");
               fwrite($file,"\n" . $userName . " - " . $now);

               exit();
             }



     mysqli_stmnt_close($stmnt);
     mysqli_close($connection);

}

else {
  header("Location: ../mainshop.php");
  exit();
}
