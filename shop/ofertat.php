<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="css/discount.css" />
    <link rel="icon" href="file/favicon.png" sizes="50x50" /> 
</head>
<body>

  <!-- Header -->
  <header id="header" class="header">
    <?php 
      include "parts/header.php";
      $message = $_GET['message'];
    ?>

    <!-- Hero -->
    
  </header>
  <main id="main">
  <div class="container">
  <section class="category__section section" id="category">
        <div class="tab__list">
          <div class="title__container tabs">
            <div class="section__titles category__titles ">
              <div id="divAllP-1" class="section__title filter-btn active" data-id="All Products">
                <!-- <span class="dot"></span> -->
                <h1 id="divAllP" class="primary__title"><?= $message ?></h1>
              </div>
            </div>

          </div>
        </div>
        <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="category__center">
              <?php 
               // include "parts/offersP.php";
              ?>
              <?php   

include "./db/db.php";
$sId = $_GET['sId'];
$selectP = "SELECT * FROM products where storeID='$sId' AND save is not null  order by rand() ";

$queryP = mysqli_query($connect, $selectP);

//mysqli_fetch array -eshte nje funksion qe perdoret per te marre rreshtat nga databaza dhe per ti ruajtur ato si nje grup.
while( $row = mysqli_fetch_array($queryP))
    {

        $fileId = $row['id'];
        $fileName = $row['fileName'];
        $fileUpload = $row['fileUpload'];
        $fileDescription = substr($row['description'],0,55);
        $price = $row['price'];
        $save = $row['save'];
        $dPrice = $row['dPrice'];
    ?>
               <div class="product category__products">
               <a href="product.php?id=<?php echo $fileId;?>">
               <?php if($save != null){ ?>
                  <div class="discount">
                    <p class="discount-p"><?php echo "-".$save."%" ?></p>
                  </div><?php } ?>
                    <div class="product__header">
                      <img src="file\<?php echo $fileUpload; ?>" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3><?php echo $fileName; ?></h3>
                      <?php if($save != null){ ?>
                      <div class="product__price">
                      <b><h4 style="font-weight: bolder; font-size: large;display:inline;"><?php echo $dPrice?> €</h4></b><s style="display:inline;font-size:small;"><?php echo " ".$price." €" ?></s>
                      </div>
                      <?php }else{ ?>
                        <div class="product__price">
                        <b><h4 style="font-weight: bolder; font-size: large;"><?php echo $price?> €</h4></b>
                        </div>
                      <?php } ?>
                      <p class="desc"><?= $fileDescription."..." ?></p>
                      <a href="inc/addToCart.php?pId=<?php echo $fileId?>&url=<?php echo $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']?>"><button type="submit" style="background-color: #fc6a03; color:white; font-weight: bolder; border-color: white;" class="product__btn">Add To Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>
                    </div>
                  <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="product.php?id=<?php echo $fileId;?>">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="inc/addToWishList.php?pId=<?php echo $fileId;?>&url=<?php echo $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']?>">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                  </ul>
                  </a>
                  </div>
<?php } ?>
</div>     
          </div>
        </div>
      </section>
      </div>
  </main>
      <?php 
        include "parts/footer.php";
      ?>