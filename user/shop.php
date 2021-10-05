<?php
include "header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"artshop");
?>
          

<!-- <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" /> -->
<!-- <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" /> -->

<section class="section all-products" id="products">
        <div class="top container ">        
             <form>
                <select>
                    <option value="1">USD</option>
                    <option value="2">EGP</option>
                </select>
                <!-- <span><i class='bx bx-chevron-down'></i></span> -->
            </form>  
            <form>
            <!-- <span><i class='bx bx-chevron-down'></i></span> -->
                <select>
                    <option value="1">Defualt Sorting</option>
                    <option value="2">Sort By Price</option>
                    <option value="3">Sort By Popularity</option>
                </select>
            </form>
                        </div>
              </div>
        </div>

            <div class="padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">All Products</h2>

                   <?php

 include("pagination.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 8; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "product"; //you have to pass your query over here

$res=mysqli_query($link,"select * from {$statement} LIMIT {$startpoint} , {$limit}");
while($row=mysqli_fetch_array($res))
{
?>

 <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                <img src="../adminpanel/<?php echo $row["product_img"]; ?>" width="180" height="381" /> 
                                    <h2>$<?php echo $row["product_price"]; ?></h2>
                                    <p><?php echo $row["product_name"]; ?></p>
                                    <a href="product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
                                </div>
                              
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
<?php
}
                    ?>
                  </div>

                    
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
<div class="col-sm-3 ">

<ul class="pagination">
					<?php
                        echo pagination($statement,$limit,$page);
                    ?>
					</ul>
</div>
<?php
include "footer.php";
?>
