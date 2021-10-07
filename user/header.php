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
    <link href="./usercss/pagination.css" rel="stylesheet" />
    <link href="./usercss/cartstyle.css" rel="stylesheet"/>
    <link href="usercss/bootstraper.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="./usercss/al.css" rel="stylesheet">
    <link href="./usercss/stylerss.css" rel="stylesheet" />
    <link href="./usercss/styler.css" rel="stylesheet" />

  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
  <!-- Animate On Scroll -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- scripts -->
    <script src="js/index.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/changeimg.js"></script>


    
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <title>artshop | products</title>
</head>

<body>
  <!-- Header -->
  <header id="home" class="header">
    <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <div class="logo">
          <h1>Codevo</h1>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
              <h1>Codevo</h1>
            </div>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="index.php" class="nav-link scroll-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="shop.php" class="nav-link">Products</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link scroll-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link scroll-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="new_cart.php" class="nav-link icon"> <span id="cart__total"><?php  if(isset($_COOKIE["shopping_cart"]))
              {
                $found=0;
                $cookie_data = stripslashes($_COOKIE['shopping_cart']);
                $cart_data = json_decode($cookie_data, true);
                foreach($cart_data as $keys => $values)
         {$found= $found + 1;
              }
          echo $found;
            }
              ?></span><i class="bx bx-shopping-bag"></i></a>
            </li>
          </ul>
        </div>

        <a href="cart.php" class="cart-icon">
          <i class="bx bx-shopping-bag"></i>
        </a>

        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </nav>
