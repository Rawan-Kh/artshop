<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"artshop");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./usercss/styles.css" />
    <link rel="stylesheet" href="./usercss/pagination.css" />
    <link rel="stylesheet" href="./usercss/A_green.css" />
    <link href="usercss/bootstraper.min.css" rel="stylesheet">
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link href="css/prettyPhoto.css" rel="stylesheet"> -->
    <!-- <link href="css/price-range.css" rel="stylesheet"> -->
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <link href="usercss/all.css" rel="stylesheet">
    <!-- <link href="css/responsive.css" rel="stylesheet"> -->
    <title>artshop | products</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="navigation container">
            <div class="logo"><h1>Codevo</h1></div>

            <div class="menu">
                <div class="top-nav">
                    <div class="logo"><h1>Codevo</h1></div>
                    <div class="close"><i class="bx bx-x"></i></div>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="product.html" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">games</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="account.html" class="nav-link">Account</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.html" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
                    </li>
                </ul>
            </div>

            <a href="cart.html" class="cart-icon"><i class="bx bx-shopping-bag"></i></a>

            <div class="hamburger"><i class="bx bx-menu"></i></div>
        </div>
    </nav>

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">        
             <form>
                <select>
                    <option value="1">USD</option>
                    <option value="2">EGP</option>
                </select>
                <span><i class='bx bx-chevron-down'></i></span>
            </form>  
            <form>
                <select>
                    <option value="1">Defualt Sorting</option>
                    <option value="2">Sort By Price</option>
                    <option value="3">Sort By Popularity</option>
                    <option value="4">Sort By Sale</option>
                    <option value="5">Sort By Rating</option>
                </select>
                <span><i class='bx bx-chevron-down'></i></span>
            </form>
                        </div>
              </div>
        </div>
       
                <div class="features_items">
                    <h2 class="title text-center">all products</h2>

                   <?php

 include("pagination.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 16; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "product"; //you have to pass your query over here

$res=mysqli_query($link,"select * from {$statement} LIMIT {$startpoint} , {$limit}");
while($row=mysqli_fetch_array($res))
{
?>
 <div class="col-sm-3">
                        <div class="product-image-wrapper">
                         
                            <div class="single-products">
                            <!-- <div class="product"> -->
                                <div class="productinfo text-center">
                                   <img src="../adminpanel/<?php echo $row["product_img"]; ?>" />
                                   <!-- <div class="product-footer"> -->
                                <div class="productinfo text-center">
                                    <h2>$<?php echo $row["product_price"]; ?></h2>
                                    <p><?php echo $row["product_name"]; ?></p>
                                    <a href="product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
                                
                                </div>
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>

<?php

}
                    ?>
                  </div>

<ul class="pagination">
<?php
    echo pagination($statement,$limit,$page);
?>
</ul>

 
        
    </section>

 
    <!-- Footer -->
    <footer id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>EXTRAS</h3>
                    <a href="#">Brands</a>
                    <a href="#">Gift Certificates</a>
                    <a href="#">Affiliate</a>
                    <a href="#">Specials</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>INFORMATION</h3>
                    <a href="#">About Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>MY ACCOUNT</h3>
                    <a href="#">My Account</a>
                    <a href="#">Order History</a>
                    <a href="#">Wish List</a>
                    <a href="#">Newsletter</a>
                    <a href="#">Returns</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT US</h3>
                    <div>
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        42 Dream House, Dreammy street, 7131 Dreamville, USA
                    </div>
                    <div>
                        <span>
                            <i class="far fa-envelope"></i>
                        </span>
                        company@gmail.com
                    </div>
                    <div>
                        <span>
                            <i class="fas fa-phone"></i>
                        </span>
                        456-456-4512
                    </div>
                    <div>
                        <span>
                            <i class="far fa-paper-plane"></i>
                        </span>
                        Dream City, USA
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
</body>

</html>