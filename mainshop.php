<?php
  require "view-comp/header.php";
 ?>

 <?php
 // Run a select query to get my letest 6 items
 // Connect to the MySQL database
 require 'php-scripts/databasehandler.script.php';
 $dynamicList = "";
 $sql = mysqli_query($connection, "SELECT * FROM products");
 $productCount = mysqli_num_rows($sql); // count the output amount
 if ($productCount > 0) {
 	while($row = mysqli_fetch_array($sql)){
              $id = $row["id"];
 			 $product_name = $row["product_name"];
 			 $price = $row["price"];

 			 $dynamicList .= '<table width="100%" border="0" cellspacing="0" cellpadding="6" class="center">
         <tr>
           <td  valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 15px solid;" src="images/' . $id . '.png" alt="' . $product_name . '" width="600" height="400" border="1" /></a></td>
           <br>
           <td width="83%"  style="color:white;"><b>' . $product_name . '</b><br/>
             ‎₱' . $price . '<br /><br><br>
             <a class="p-3 mb-2 bg-info text-white" href="product.php?id=' . $id . '">View Product Details</a></td>
         </tr>
       </table>';
     }
 } else {
 	$dynamicList = "We have no products listed in our store yet";
 }
 mysqli_close($connection);
 ?> <br>

 <form class="form-inline mr-auto row justify-content-center " action="search.php" method="post" valign="center">
   <input class="form-control mr-sm-2 col-9" type="text" name="search" placeholder="Search">
   <button class="btn btn-dark btn-rounded btn-sm my-0 col-1" type="submit" name="search-submit">SEARCH</button>
 </form>

  <main style="background-color:gray;">


     <p><?php echo $dynamicList; ?><br />
       </p>

     </main>



 <?php
   require "view-comp/footer.php";
  ?>
