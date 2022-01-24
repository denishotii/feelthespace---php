<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
      
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
      
      
        <!-- Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
      ">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      
        <!-- Custom StyleSheet -->
        <link rel="stylesheet" href="styles.css" />
  
      </head>
      <body>
    </body>

    <footer id="footer" class="section footer">
        <div class="container">
          <div class="footer__top">
            <div class="footer-top__box">
              <h3>Categories</h3>
              <a href="category.php?c=tshirt">T-shirt</a>
                    <a href="category.php?c=hoodeis" >Hoodies</a>
                    <a href="category.php?c=stickers">Stickers</a>
                    <a href="category.php?c=wristbands">Wristbands</a>
                    <a href="category.php?c=badges">Badges</a>
                    <a href="category.php?c=cap">Cap</a>
              <!-- <a href="#">Specials</a>
              <a href="#">Site Map</a> -->
            </div>
            <div class="footer-top__box">
              <h3>Info</h3>
              <a href="#">About us</a>
              <a href="#">Privacy Policy</a>
              <!-- <a href="#">Kushtet e Përdorimit</a>
              <a href="#">Na Kontaktoni</a> -->
              <!-- <a href="#">Site Map</a> -->
            </div>
            <?php 
               if(!isset($_SESSION['email'])){
            ?>
            <div class="footer-top__box">
              <h3>ACCOUNT</h3>
              <a href="signin.php?please_signin">My Account</a>
              <a href="signin.php?please_signin">Order History</a>
              <a href="signin.php?please_signin">Wish List</a>
              <a href="signin.php?please_signin">Notifications</a>
              <!-- <a href="signin.php?please_signin">Returns</a> -->
            </div>
            <?php }else{ 
              $uId = $_SESSION['id'];
              ?>
            <div class="footer-top__box">
              <h3>ACCOUNT</h3>
              <a href="user.php">My Account</a>
              <a href="orderHistory.php">Order History</a>
              <a href="wishlist.php">Wish List</a>
              <a href="#">Notifications</a>
              <!-- <a href="#">Returns</a> -->
            </div>
            <?php } ?>
            <div class="footer-top__box">
              <h3>Contact</h3>
              <!-- <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-location"></use>
                  </svg>
                </span>
                42 Dream House, Dreammy street, 7131 Dreamville, USA
              </div> -->
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-envelop"></use>
                  </svg>
                </span>
                <a style='display:inline' href="mailto:info@libraria.shop">info@feelthespace.shop</a>
              </div>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-phone"></use>
                  </svg>
                </span>
                <a style='display:inline' href="tel:044123456">044 123 456</a>
              </div>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-paperplane"></use>
                  </svg>
                </span>
                Kosovë
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer-bottom__box">
    
          </div>
          <div class="footer-bottom__box">
    
          </div>
        </div>
        </div>
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
    
      <!-- Custom JavaScript -->
      <!-- <script src="./js/products.js"></script> -->
      
      <script src="./js/slider.js"></script>
    
      <?php
 include "parts/livechat.php";
?>
    </html>