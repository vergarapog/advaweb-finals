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

                   $payByCODLink = 'payment-pages/paybycod.php?id=' . $id . '';
                   $payByCardLink = 'payment-pages/paybycard.php?id=' . $id . '';
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
                         <p>Confirm Checkout</p>
                     </div>
<div class="form-content">
  <h5>To be delivered to: &nbsp;&nbsp;&nbsp; <?php echo $fName; ?> <?php echo $mName; ?> <?php echo $lName; ?> <?php echo $suffix; ?></h5>
<br>
  <h5> Delivery Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $address; ?></h5>
   </form>



<br>
<hr>
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

 <script>
 $('.creditCardText').keyup(function() {
  var foo = $(this).val().split("-").join(""); // remove hyphens
  if (foo.length > 0) {
    foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
  }
  $(this).val(foo);
});
</script>

<h5>Mode of payment: <b><u>Credit Card</u></b></h5><br>
<form style="padding-bottom: 30px; " method="post" action="php-scripts/payment.script.php">

  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Credit card number:</label>
    <div class="col-sm-10">
      <input name="CCnum" type="text" class="form-control creditCardText"  pattern=".{19,}" minlength="19" maxlength="19"  required >
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Expiration Date:</label>
    <div class="col-sm-10">
      <input name="CCExpDate" class="form-control"  type="month" min="<?php echo date('Y');?>-<?php echo date('m');?>" value="2020-07" required >
    </div>
  </div>


  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">CVV:</label>
    <div class="col-sm-10">
      <input name="CVV" type="text" class="form-control" maxlength="4" required >
    </div>
  </div>

  <br>

  <div class="row">
    <input  name="idUser" type="hidden" value="<?php echo $_SESSION['userId']; ?>">
    <input  name="idProd" type="hidden" value="<?php echo $_GET['id']; ?>">
    <input  name="quantity" type="hidden" value="<?php echo $quantity; ?>">
    <input  name="price" type="hidden" value="<?php echo $price * $quantity; ?>">
    <input  name="isCod" type="hidden" value="0">


    <input  class="btn btn-danger col-2" style="margin-right: 10px;"  value="Cancel" onclick="history.back()" />

      <button type="submit" class="btn btn-success col-2" name="payment-submit">Order</button>
  </div>

</form>



   </div>

   </div>
  </div>
</div>


 <?php
   require "view-comp/footer.php";
  ?>
