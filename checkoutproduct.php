<?php
  require "view-comp/header.php";
 ?>

 <?php
 // Check to see the URL variable is set and that it exists in the database
 		if(isset($_SESSION['userId'])){
             if (isset($_GET['id'])) {
             	// Connect to the MySQL database
              $userName  =   $_SESSION["userName"];
              $fName  =   $_SESSION['fName'];
              $mName  =   $_SESSION['mName'];
              $lName  =   $_SESSION['lName'];
              $suffix  =   $_SESSION['suffix'];
              $address  =   $_SESSION['address'];

              $quantity = $_POST["quantity"];

              $payByCODLink = "";
              $payByCardLink = "";
              $checkoutlink = "";
               include "php-scripts/databasehandler.script.php";
             	$id = preg_replace('#[^0-9]#i', '', $_GET['id']);
             	// Use this var to check to see if this ID exists, if yes then get the product
             	// details, if no then exit this script and give message why
             	$sql = mysqli_query($connection, "SELECT * FROM products WHERE id='$id' LIMIT 1");
             	$productCount = mysqli_num_rows($sql); // count the output amount
                 if ($productCount > 0) {
             		// get all the product details
             		while($row = mysqli_fetch_array($sql)){
             			 $product_name = $row["product_name"];
             			 $price = $row["price"];
             			 $details = $row["details"];

                   $payByCODLink = 'paybycod.php?id=' . $id . '';
                   $payByCardLink = 'paybycard.php?id=' . $id . '';
                   $checkoutlink = 'checkoutproduct.php?id=' . $id . '';
                      }

             	} else {
             		echo "That item does not exist.";
             	    exit();
             	}

             } else {
             	echo "Data to render this page is missing.";
             	exit();
             }
             mysqli_close($connection);
           } else {
              header("Location: errorpages/notloggedin.php");
           }
 ?>
<br>
   <div class="container register-form">
                <div class="form">
                     <div class="note">
                         <p>Checkout Product</p>
                     </div>
<div class="form-content">
  <fieldset disabled>
   <form class=" mr-auto  justify-content-center " action="search.php" method="post" valign="center">
     <div class="form-group row">
       <label for="colFormLabel" class="col-sm-2 col-form-label">Username:</label>
       <div class="col-sm-10">
         <input type="email" class="form-control" id="colFormLabel" placeholder="<?php echo $userName; ?> ">
       </div>
     </div>
     <div class="form-group row">
       <label for="colFormLabel" class="col-sm-2 col-form-label">Name:</label>
       <div class="col-sm-10">
         <input type="email" class="form-control" id="colFormLabel" placeholder="<?php echo $fName; ?> <?php echo $mName; ?> <?php echo $lName; ?> <?php echo $suffix; ?>">
       </div>
     </div>

     <div class="form-group row">
       <label for="colFormLabel" class="col-sm-2 col-form-label">Address:</label>
       <div class="col-sm-10">
         <input type="email" class="form-control" id="colFormLabel" placeholder="<?php echo $address; ?>">
       </div>
     </div>
     </fieldset>
   </form>



<br>
<h4>Products Ordered:</h4><br>
   <div id="pageContent">
   <table width="100%" border="0" cellspacing="0" cellpadding="15" >
   <tr>
     <td width="19%" valign="top"><img src="images/<?php echo $id; ?>.png" width="500" height="300" alt="<?php echo $product_name; ?>" /><br />
       <!-- <a style="padding-left: 260px;" href="images/<?php echo $id; ?>.png">View Full Size Image</a></td> -->
     <td width="81%" valign="top"><h3><?php echo $product_name; ?></h3>

         <br /><u></u>
 <p class="lead" >Price: <b style="color: red;"><?php echo "₱".$price * $quantity; ?></b><br />
  </p>

<p class="lead">Quantity: <b > <?php echo $quantity; ?></b>
 <br />
         </p>

       </td>
     </tr>
 </table>
 <br>
<h5>Please choose mode of payment:</h5><br>

          <div class="row">

          <form style="padding-right: 10px; padding-left: 15px; " method="post" action="<?php echo $payByCODLink; ?>">
            <input id="prodId" name="price" type="hidden" value="<?php echo $price * $quantity; ?>">
            <input id="prodId" name="quantity" type="hidden" value="<?php echo $quantity; ?>">
           <input  class="btn btn-info " type="submit" value="Cash on Delivery" />
          </form>

          <form method="post" action="<?php echo $payByCardLink; ?>">
            <input id="prodId" name="price" type="hidden" value="<?php echo $price * $quantity; ?>">
            <input id="prodId" name="quantity" type="hidden" value="<?php echo $quantity; ?>">
            <input  class="btn btn-info " type="submit" value="Credit Card" />
          </form>

          </div>
   </div>

   </div>
  </div>
</div>


 <?php
   require "view-comp/footer.php";
  ?>
