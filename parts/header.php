<html>
    <head>
    <script src="https://kit.fontawesome.com/46323304fb.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="file/favicon.png" sizes="50x50" /> 
      
        <!-- Google Fonts -->

        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
      
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
      
      
        <!-- Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" type="text/css" />
      
        <!-- Custom StyleSheet -->
        <link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="css/discount.css" />
        <link rel="stylesheet" href="css/marginclass.css" />
        <link rel="stylesheet" href="./css/search.css">
        <link rel="stylesheet" href="./css/product-cart.css">
        <link rel="stylesheet" href="./css/button.css">
        <link rel="stylesheet" href="./css/carousel.css">
        <link rel="stylesheet" href="./css/scroll.css">


        <script src="./js/carousel.js"></script>
        <title>Feel the Space </title>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js" type="text/javascript"></script>
        <script>
  $(document).ready(function(){
    $('.ct-slick-homepage').slick({
    });
  });
  </script>
      </head>
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <style>
          /* Style The Dropdown Button */
          .dropbtn {
            background-color: white;
            color: black;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
          }

          /* The container <div> - needed to position the dropdown content */
          .dropdown {
            position: relative;
            display: inline-block;
          }

          /* Dropdown Content (Hidden by Default) */
          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }

          /* Links inside the dropdown */
          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
          }

          /* Change color of dropdown links on hover */
          .dropdown-content a:hover {background-color: #f1f1f1}

          /* Show the dropdown menu on hover */
          .dropdown:hover .dropdown-content {
            display: block;
          }

          /* Change the background color of the dropdown button when the dropdown content is shown */
          .dropdown:hover .dropbtn {
            background-color: none;
          }
          .dr-link:hover{
            color:red;
          }
          .logo-nav{
            width: 300ox;
            height: 70px;
            padding-top: 8px;
          }
</style>
      <body>
      <?php 
        if(isset($_GET['succesC'])){
          include "parts/alertc.php";
        }
        if(isset($_GET['successW'])){
          include "parts/alertw.php";
        }
      ?>

    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-menu"></use>
            </svg>
          </div>

          <div class="nav__logo">
            <a href="./" >
              <img class="logo-nav" src="images/logo.png">
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <!-- <span class="nav__category">Bleje.al</span> -->
              <img src="file/logo-tr-sm.png" alt="" class="nav__category logo-nav">
              <a href="#" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="../" class="nav__link">Home</a>
              </li>
              <li class="nav__item">
                <!-- <a href="#category" class="nav__link scroll-link">Category</a> -->
                <div class="dropdown">
                  <button class="dropbtn nav__link">Category</button>
                  <div class="dropdown-content">
                    <a href="category.php?c=tshirt" class="dr-link">T-shirt</a>
                    <a href="category.php?c=hoodies" class="dr-link">Hoodies</a>
                    <a href="category.php?c=stickers" class="dr-link">Stickers</a>
                    <a href="category.php?c=wristbands" class="dr-link">Wristbands</a>
                    <a href="category.php?c=badges" class="dr-link">Badges</a>
                    <a href="category.php?c=cap" class="dr-link">Cap</a>
                  </div>
                </div>
              </li>
              <li class="nav__item">
                <!-- <a href="#category" class="nav__link scroll-link">Category</a> -->
                <!-- <div class="dropdown">
                  <button class="dropbtn nav__link">Libraritë</button>
                  <div class="dropdown-content">
                    <a href="shop.php?c=2121&n=Libraria Buzuku" class="dr-link">Libraria Buzuku</a>
                    <a href="shop.php?c=2323&n=Libraria 7Days" class="dr-link">Libraria 7Days</a>
                    <a href="shop.php?c=2222&n=Libraria Altera" class="dr-link">Libraria Altera</a>
                  </div>
                </div> -->
              </li>
              <li class="nav__item">
                <a href="#news" class="nav__link scroll-link">Info</a>
              </li>
              <li class="nav__item">
                <a href="#contact" class="nav__link scroll-link">Contact</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">
          <?php 
            if(!isset($_SESSION['email'])){
              ?>
					<a href="signin.php" class="icon__item">
            <span class="icon__user"><i class="fas fa-sign-in-alt"></i></span>
            </a>
				<?php 
			}else{ 
				?>
            <!-- <a href="user.php" class="icon__item">
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg>
            </a> -->
            <div class="dropdown">
                  <button class="dropbtn nav__link icon__item"><svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg></button>
                  <div class="dropdown-content">
                    <a href="user.php" class="dr-link">Profile</a>
                    <a href="orderHistory.php" class="dr-link">Orders</a>
                    <a href="wishList.php" class="dr-link">Wish list</a>
                    <a href="inc/signout.php" class="dr-link">Log out</a>
                  </div>
                </div>
          <?php } ?>
          <!-- <form action="search.php" method="POST" id="form" class="icon" style="display: none;">
					      <input style="border: none;width:110px;height:40px;" type="text" placeholder="Search.." name="search" required>
      				  <button class="button1" name="submit-search" type="submit"><i class="fas fa-search"></i></button>
					</form> -->
        
            <!-- <a href="#" id="search" class="icon__item">
              <svg class="icon__search">
                <use xlink:href="./images/sprite.svg#icon-search"></use>
              </svg>
            </a> -->
            <a id="search" class="icon__item">
              <svg class="icon__search">
                <use xlink:href="./images/sprite.svg#icon-search"></use>
              </svg>
            </a>
      <form action="search.php" method="POST" class="search-box">
    		<input type="text" name="search" placeholder="Search Everything..." required >
    		<input type="submit" name="submit-search" value="Search"/>
  		</form>
            <?php 
            if(!isset($_SESSION['email'])){
              ?>
            <a href="signin.php?please_signin" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <span id="cart__total">0</span>
            </a>
            <?php }else{ ?>
              <a href="cart.php" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <?php
                include "db/db.php";
                $uId = $_SESSION['id'];
                $query = "SELECT * FROM cart WHERE uId='$uId'";
                $result = mysqli_query($connect, $query);
                $product = mysqli_num_rows($result);
                // $countP = count($product)
              ?>
              <span id="cart__total"><?php echo $product ?></span>
            </a>
            <?php } ?>
          </div>
        </nav>
      </div>
    </div>
    <script src="./js/index.js"></script>
    <script>
    $(document).ready(function() {
     
     $("#search").click(function() {
        $(".search-box").toggle();
        $("input[type='text']").focus();
      });

  });
    </script>
</body>
    </html>