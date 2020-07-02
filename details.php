<?php
  require "view-comp/header.php";
 ?>

 <?php
 // Check to see the URL variable is set and that it exists in the database
 if (isset($_GET['id'])) {
 	// Connect to the MySQL database
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
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title><?php echo $product_name; ?></title>
 <link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
 </head>
 <body>
 <div align="center" id="mainWrapper">

   <div id="pageContent">
   <table width="100%" border="0" cellspacing="0" cellpadding="15">
   <tr>
     <td width="19%" valign="top"><img src="images/<?php echo $id; ?>.png" width="700" height="500" alt="<?php echo $product_name; ?>" /><br />
       <a style="padding-left: 260px;" href="images/<?php echo $id; ?>.png">View Full Size Image</a></td>
     <td width="81%" valign="top"><h3><?php echo $product_name; ?></h3>
       <p><?php echo "₱".$price; ?><br />
         <br />

 <br />
         <?php echo $details; ?>
 <br />
         </p>

       <form id="form1" name="form1" method="post" action="<?php echo $checkoutlink; ?>">
        Quantity: <input type="number" name="quantity" id="pid" value="1" min="1" max="99"  />
         <br><br>
         <input class="btn btn-dark" type="submit" name="button" id="button" value="Purchase" />
       </form>



       </td>
     </tr>
 </table>
   </div>

 </div>
 <?php
   require "view-comp/footer.php";
  ?>
