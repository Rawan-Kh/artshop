<?php
include "header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"artshop");
?>

    <!-- Hero -->
    <img src="./images/banner.png" alt="" class="hero-img" />

    <div class="hero-content">
      <!-- <h2><span class="discount">70% </span> SALE OFF</h2> -->
      <h1>
        <span>lorem ipsum</span>
        <span>and lorem ipsum</span>
      </h1>
      <a class="btn" href="#testimonial">Discover</a>
    </div>
  </header>

  <!-- Main -->
  <main>
    <!-- <section class="advert section">
      <div class="advert-center container">
        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                Girls <br />
                Clothing
              </h2>
              <h4>Worlds Best Brands</h4>
            </div>
          </div>
          <img src="./images/advert1.png" alt="">
        </div>

        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                Summer <br />
                Clothing
              </h2>
              <h4>Worlds Best Brands</h4>
            </div>
          </div>
          <img src="./images/advert2.png" alt="">
        </div>

        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                Boys <br />
                Clothing
              </h2>
              <h4>Worlds Best Brands</h4>
            </div>
          </div>
          <img src="./images/advert3.png" alt="">
        </div>
      </div>
    </section> -->

    <!-- Featured -->
    <!-- <section class="section featured">
      <div class="title">
        <h1>Featured Products</h1>
      </div>

      <div class="product-center container">
        <div class="product">
          <div class="product-header">
            <img src="./images/pic2.jpg" alt="">
            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#">
              <h3>Boy’s T-Shirt</h3>
            </a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic1.jpg" alt="">
            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic3.jpg" alt="">
            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic4.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
      </div>
    </section> -->

    <!--Latest -->
    <!-- <section class="section featured">
      <div class="title">
        <h1>Latest Products</h1>
      </div>

      <div class="product-center container">
        <div class="product">
          <div class="product-header">
            <img src="./images/pic5.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic2.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic1.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic4.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic1.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic3.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic2.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic5.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">$50</h4>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Product Banner -->
    <!-- <section class="section">
      <div class="product-banner">
        <div class="left">
          <img src="./images/test.jpg" alt="" />
        </div>
        <div class="right">
          <div class="content">
            <h2><span class="discount">70% </span> SALE OFF</h2>
            <h1>
              <span>Collect Your</span>
              <span>Kids Collection</span>
            </h1>
            <a class="btn" href="#">shop now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="section">
     
      <div class="testimonial-center container">
        <div id="testimonial" class="testimonial">
          
          <h4>prints</h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
            fugiat labore. Veritatis et omnis consequatur.
          </p>
        
          <div class="img-cover">
            <!-- <img src="./images/profile1.jpg" alt="" /> -->
          </div>
          <a href="#" class="cta2">view &rightarrow;</a>
        </div>
        <div class="testimonial">
          
          <h4>gallery</h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
            fugiat labore. Veritatis et omnis consequatur.
          </p>
          
          <div class="img-cover">
            <!-- <img src="./images/profile2.jpg" alt="" /> -->
          </div>
          <a href="shop.php" class="cta2">view &rightarrow;</a>
        </div>
        <div class="testimonial">
          
          <h4>games</h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
            fugiat labore. Veritatis et omnis consequatur.
          </p>
         
          <div class="img-cover">
            <!-- <img src="./images/profile3.jpg" alt="" /> -->
          </div>
          <a href="games.php" class="cta2">enjoy &rightarrow;</a>
        </div>
      </div>
    </section> 

    <!-- Brands -->
    <!-- <section class="section">
      <div class="brands-center container">
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
      </div>
    </section> -->
  </main>

  <?php
  include "footer.php";
  ?>
