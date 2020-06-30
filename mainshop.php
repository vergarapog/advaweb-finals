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
           <td width="17%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 20px solid;" src="images/' . $id . '.png" alt="' . $product_name . '" width="600" height="400" border="1" /></a></td>
           <td width="83%" valign="top" style="color:white;"><b>' . $product_name . '</b><br />
             ‎₱' . $price . '<br /><br><br>
             <a class="p-3 mb-2 bg-info text-white" href="product.php?id=' . $id . '">View Product Details</a></td>
         </tr>
       </table>';
     }
 } else {
 	$dynamicList = "We have no products listed in our store yet";
 }
 mysqli_close($connection);
 ?>

  <main style="background-color:gray;">
     <p><?php echo $dynamicList; ?><br />
       </p>

       <div id="grid">
  <div id="a">a</div>
  <div id="b">b</div>
  <div id="c">c</div>
  <div id="d">d</div>
  <div id="e">e</div>
  <div id="f">f</div>
  <div id="g">g</div>
  <div id="h">h</div>
</div>



  </main>




 <?php
   require "view-comp/footer.php";
  ?>
