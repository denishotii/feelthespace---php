<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="file/favicon.png" sizes="50x50" /> 
<link rel="stylesheet" href="css/discount.css" />
</head>
<body>

  <!-- Header -->
  <header id="header" class="header">
    <?php 
      include "parts/header.php";
      include "parts/slider.php";
    ?>

    <!-- Hero -->
    
  </header>
  <!-- End Header -->

  <!-- Main -->
  <main id="main">
    <div class="container">
      <!-- Collection -->
      <section id="collection" class="section collection">
        <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_02" src="./file/foto3.jfif" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>We offer the best designs of mask!</span>
                <h1>JUST AT FEEL THE SPACE</h1>
                <a href="#shop">BUY NOW</a>
              </div>
            </div>
          </div>
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_01" src="./file/badges4.jfif" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>Find the best Badges in MARKET with SPACE DESIGN</span>
                <h1>LEADING</h1>
                <a href="#">BUY NOW</a>
              </div>
            </div>
          </div>
      </section>

      <!-- Latest Products -->
      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">Latest Products</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides latest-center">
              <?php 
                include "parts/latestP.php";
              ?>   
             </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest Products -->

      <section class="category__section section" id="category">
        <div class="tab__list">
          <div class="title__container tabs">
            <div class="section__titles category__titles ">
              <div id="divAllP-1" class="section__title filter-btn active" data-id="All Products">
                <span class="dot"></span>
                <h1 id="divAllP" class="primary__title">All Products</h1>
              </div>
            </div>
            <!-- <div class="section__titles">
              <div id="divTrP-1" class="section__title filter-btn" data-id="Trending Products">
                <span class="dot"></span>
                <h1 id="divTrP" class="primary__title">Trending Products</h1>
              </div>
            </div>

            <div class="section__titles">
              <div id="divSP-1" class="section__title filter-btn" data-id="Special Products">
                <span class="dot"></span>
                <h1  id="divSP" class="primary__title">Special Products</h1>
              </div>
            </div>

            <div class="section__titles">
              <div id="divFeP-1" class="section__title filter-btn" data-id="Featured Products">
                <span class="dot"></span>
                <h1 id="divFeP" class="primary__title">Featured Products</h1>
              </div>
            </div> -->

          </div>
        </div>
        <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="category__center">
          <?php 
            include "parts/aproducts.php";
          ?>
          </div>
          <!-- <form class="mpform" method="post" action="parts/aproducts.php">
            <input type="submit" name="mp" value="More Products" class="mp">
          </form> -->
        </div>
      </div>
    </section>

    <!-- Facility Section -->
    <section class="facility__section section" id="facility">
      <?php 
        include "./parts/facility.php";
      ?>
    </section>
    </div>

    <!-- Testimonial Section -->
    <section class="section testimonial" id="testimonial">
      <?php 
        include "./parts/infoWeb.php";
      ?>
    </section>

    <!--News Section  -->
    <section class="section news" id="news">
     <?php 
        include "./parts/shopNews.php";
     ?>
    </section>

    <!-- NewsLetter -->
    <section class="section newsletter" id="contact">
      <?php 
       include "./parts/newsletter.php";
      ?>
    </section>

  </main>

  <!-- End Main -->

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <?php
      include "parts/footer.php";
    ?>
  </footer>
  <!-- End Footer -->

  <!-- PopUp -->
  <div class="popup hide__popup">
    <div class="popup__content">
      <div class="popup__close">
        <svg>
          <use xlink:href="./images/sprite.svg#icon-cross"></use>
        </svg>
      </div>
      <div class="popup__left">
        <div class="popup-img__container">
          <img class="popup__img" src="./images/popup.jpg" alt="popup">
        </div>
      </div>
      <div class="popup__right">
        <div class="right__content">
          <h1>Get Discount <span>30%</span> Off</h1>
          <p>Sign up to our newsletter and save 30% for you next purchase. No spam, we promise!
          </p>
          <form action="#">
            <input type="email" placeholder="Enter your email..." class="popup__form">
            <a href="#">Subscribe</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Go To -->

  <a href="#header" class="goto-top scroll-link">
    <svg>
      <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
    </svg>
  </a>


  <!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- <script src="./js/products.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/slider.js"></script> -->
<?php
 include "parts/livechat.php";
?>
</body>

</html>