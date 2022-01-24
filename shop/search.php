<?php 
    session_start();
?>
<html>
    <head>
    <title>Feel the Space Shop | Search</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="file/favicon.png" sizes="50x50" /> 
        <style>
        .div{
            margin-top: 80px;
            margin-left: 125px;
        }
        .div-1{
            border: 1px solid black /*#FFFAFA*/;
            width: 22.5%;
            height: 380px;
            margin-left: 25px;
            float: left;
            margin-top: 40px;
            background-color:	#FFFAFA;
        }
        .img{
            width:100%;
            height:200px
        }
        </style>
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/footer.css">
    </head>
    <body>
        <?php 
            include "parts/header.php";
        ?>
        <div style="margin-left: 100px; margin: 50px;">
          <h3>Search Results of <b><?= $_POST['search'] ?></b></h3>
        </div>
       <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="category__center">
        <?php
            include "db/db.php";

                if (isset($_POST['submit-search'])) {
                    $search = mysqli_real_escape_string($connect, $_POST['search']);
                    $sql = "SELECT * FROM products WHERE fileName LIKE '%$search%' OR description LIKE '%$search%' OR price LIKE '%$search%' OR category LIKE '%$search%'";
                    $result = mysqli_query($connect, $sql);
                    $queryResult = mysqli_num_rows($result);

                    $insert="SELECT * FROM search WHERE searched='$search' LIMIT 1";
                    $query=mysqli_query($connect,$insert);
                    $exist=mysqli_fetch_assoc($query);
                    if($exist){
                        $n = $exist['times'];
                        $i = $n + 1;
                        $plus_query = "UPDATE search SET times='$i' WHERE searched='$search'";
                        mysqli_query($connect, $plus_query);
                    }else{
                        $insertInto = "INSERT INTO search(searched)
                        VALUES('$search');";
                        mysqli_query($connect, $insertInto);
                    }

                    if($queryResult > 0){
                        while($row = mysqli_fetch_assoc($result)){
                          $fileId = $row['id'];
                          $fileName = $row['fileName'];
                          $fileUpload = $row['fileUpload'];
                          $fileDescription = substr($row['description'],0,55);
                          $price = $row['price'];
                          $save = $row['save'];
                          $dPrice = $row['dPrice'];
                        ?>
                         <div class="product category__products">
                         <?php if($save != null){ ?>
                  <div class="discount">
                    <p class="discount-p"><?php echo "-".$save."%" ?></p>
                  </div><?php } ?>
                    <div class="product__header">
                      <img src="./file/<?php echo $fileUpload ?>" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3><?php echo $fileName ?></h3>
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
                      <a href="inc/addToCart.php?pId=<?php echo $fileId?>&url=<?php echo $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']?>"><button type="submit" style="background-color: #fc6a03; color:white; font-weight: bolder; border-color: white;" class="product__btn">SHTO NË SHPORTË <i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>
                    </div>
                  <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="./product.php?id=<?php echo $fileId ?>">
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
                  </div>
        <?php } ?>
        </ul>
                <?php
                    }else{
                        ?>
                        <div class="div div-seaarch">
                            <h1>Sorry, we couldn't find anything with the term: <b><?php echo $search ?></b>.</h1>
                        </div>
                <?php
                    }
                } 
         ?>
</div>
        </div>
         <?php
            include "parts/footer.php";
        ?>
      <!--  <div style="position:relative;top:45vh;z-index:100;">
        
        </div>-->
    </body>
</html>