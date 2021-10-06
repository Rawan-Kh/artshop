<?php
    include("cartfun.php");
?>

<div class="container" >
  <?php if(!empty($_COOKIE['shopping_cart'])){?>
  <nav class="navbar navbar-inverse" style="background:#ff7c9c;">
    <div class="container-fluid pull-left" style="width:300px;">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;">Shopping Cart</a> </div>
    </div>
    <div class="pull-right" style="margin-top:7px;margin-right:7px;">
    <!-- <a href="shopping-cart.php?action=emptyall" class="btn btn-info">Empty cart</a> -->
  <a href="new_cart.php?action=clear" class="navbar-brand" style="color:#FFFFFF;"><b>Clear Cart</b></a>

</div>
  </nav>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Actions</th>
        <th>subtotal</th>
      </tr>
    </thead>

     <?php
     if(isset($_COOKIE["shopping_cart"]))
     {
         $total = 0;
         $cookie_data = stripslashes($_COOKIE['shopping_cart']);
         $cart_data = json_decode($cookie_data, true);
         
         foreach($cart_data as $keys => $values)
         {
    ?>
    <tr>
      <?php
    $conn=mysqli_connect("localhost","root","");
      mysqli_select_db($conn,"artshop");
      $id=$values['item_id'];
      $query="SELECT * FROM product WHERE id=$id ORDER BY id ASC";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($result)){
        ?>
      <td><img src="../adminpanel/<?php print $row['product_img']?>" width="50"></td>
      <?php } ?>
      <td><?php print $values['item_name']?></td>
      <td>$<?php print $values['item_price']?></td>
      <td><?php print $values['item_quantity']?> </td>
      <td>
      <a href="new_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a>
          <!-- <a href="shopping-cart.php?action=empty&id=<?php print $key?>" class="btn btn-info">Delete</a> -->
    </td>
     <?php $subtot =$values['item_price'] *$values['item_quantity']; ?>
      <td><?php print $subtot ?></td>
      
    </tr>
			<?php	
      $price=(int)$values["item_price"];
      $qty=(int)$values["item_quantity"];
					$total = $total + ($qty * $price);
				}
			?>
            <tr><td colspan="7" align="right"><h4>Total:$<?php echo number_format($total, 2); ?></h4></td></tr>
			<?php
			}
    }
			else
			{
				echo '
        <table class="table">
				<tr>
					<td align="center" style="text-align:center;">No Item in Cart </td>
				</tr>
        </table>
				';
			}
			?>
    
  </table>

  <a href="shop.php" class="btn btn-info">Back to shopping</a>
  
</div>
</body>
</html>
