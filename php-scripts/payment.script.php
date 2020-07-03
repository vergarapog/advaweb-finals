<?php

if (isset($_POST['payment-submit'])) {

  require 'databasehandler.script.php';

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
               exit();
             }



     mysqli_stmnt_close($stmnt);
     mysqli_close($connection);

}

else {
  header("Location: ../mainshop.php");
  exit();
}
