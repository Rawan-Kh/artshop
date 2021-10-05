<?php
include("cartfun.php");
?>
    <style>
      .type{
        display: flex;
      }
   .qtat{
     display:flex;
   }
   </style> 

<div class="page__title-area">
      <div class="container">
        <div class="page__title-container">
          <ul class="page__titles">
            <li class="back">
            <a href="shop.php" class="btn btn-info">Back to shopping</a>
              <!-- <button href="shop.php"> < continue shopping</button> -->
            </li>
          </ul>
        </div>
      </div>
    </div> 
<?php
			// $query = "SELECT * FROM product ORDER BY id ASC";
			// $statement = $connect->prepare($query);
			// $statement->execute();
			// $result = $statement->fetchAll();
      $conn=mysqli_connect("localhost","root","");
      mysqli_select_db($conn,"artshop");
      $id=$_GET["id"];
      $query="SELECT * FROM product WHERE id=$id ORDER BY id ASC";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($result))
			{
			?>

    <!-- Product Details -->
  <section class=" product-detail ">
    <div class="details container-md">
      <div class="left">
        <div class="main ">
       
          <img id="pic" class="picture" src="../adminpanel/<?php echo$row["product_img"]; ?>"/>

        </div>
        <div class="thumbnails " >
          <div class="thumbnail" >
            <img class="picture active" id="pic1" src="../adminpanel/<?php echo$row["product_img"]; ?>" onclick="changeimg(this)" height="100%" width="100%">
          </div>
          <div class="thumbnail" id="pic2">
            <img class="picture" id="pic2" src="../adminpanel/<?php echo$row["pic2"]; ?>" onclick="changeimg(this)"/>
          </div>
          <div class="thumbnail" id="pic3" >
            <img class="picture" id="pic3" src="../adminpanel/<?php echo$row["pic3"]; ?>" onclick="changeimg(this)"/>
          </div>
          <div class="thumbnail" id="pic4">
            <img class="picture" id="pic4" src="../adminpanel/<?php echo$row["pic4"]; ?>" onclick="changeimg(this)"/>
          </div>
         
        
        <!-- </div> -->
        </div>
      </div>
      <div class="right">
        <!-- <span>Home/T-shirt</span> -->
        <form method="post">
        <h1> <?php echo$row["product_name"]; ?></h1>
        <input type="hidden" name="product_name" value="<?php echo $row["product_name"]; ?>" /></h1>
        <div class="price"><h2>$<?php echo$row["product_price"]; ?></h2></div>
        <input type="hidden" name="product_price" value="<?php echo $row["product_price"]; ?>" /></h1>
          <!-- <div> -->
          <!-- <form name="form1" action="" method="post" class="form"> -->
        <input type="hidden" name="product_id" value="<?php echo $row["id"]; ?>" />

          <li class="select">  
                    <div >
                      <label for="size">Size:</label>
                      <select name="size" >
                        <option value="6.65">6.65</option>
                        <option value="7.50">7.50</option>
                      </select>
                      <!-- <span><i class='bx bx-chevron-down'></i></span>  -->
                    </div>
                    </li>
                    
                  <li class="type "> 
                    <div class="input-counter">
                      <label for="Quantity">Quantity:</label>
                      <div>
                        <ul class="qtat">
                        <!-- <li>
                          <button class="minus-btn ">-</button>
                        <span class="minus-btn"> - </span>
                        </li> -->
                        <li>
                        <input type="number" min="1" placeholder="choose quantity" name="quantity" max="20" >
                        </li>
                        <!-- <li>
                        <button class="plus-btn ">+</button>
                        <span class="plus-btn">+</span>
                        </li> -->
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                  <!-- <div class="select__option"> -->
                    <div>
                    <label for="size">Frame:</label>
                   <input type="checkbox" name="frame" id="frame">
                   <?PHP
                   if(isset($_POST['frame'])){
                   $frame_ans='YES';
                   }
                   else{
                     $frame_ans='NO';
                   }
                   ?>
                   </div>
                  </li>
                  <li class="type ">
               <label>Type: <?php echo$row["product_catog"] ?> </label> 
                  </li>
                  <h3>Product Detail</h3>
        <p><?php echo$row["product_description"]; ?></p>
          <!-- <button type="submit" name="submit1" class="addCart"><i class="fa fa-shopping-cart"></i> Add to cart </button> -->
          <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
               
          </div>
        </form>

      </div>
    </div>
    <?php
			}
			?>
			

  </section>

  <section class="section featured ">
    <div class="top container ">
      <h1>Related Products</h1>
      <!-- <a href="#" class="view-more">View more</a> -->
    </div>

    <!--recommended_items-->
  <div class="recommended_items">
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">	
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/home/recommend1.jpg" alt="" />
                  <h2>$100</h2>
                  <p>Polo RED</p>
                  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/home/recommend2.jpg" alt="" />
                  <h2>$20</h2>
                  <p> Black Edition</p>
                  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/home/recommend3.jpg" alt="" />
                  <h2>$50</h2>
                  <p>Easy Polo Black Edition</p>
                  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      		
    </div>
  </div>
  </section>
  
  <?php
include "footer.php";
?>
