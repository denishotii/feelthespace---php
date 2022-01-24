<?php 

    include "./db/db.php";

    if (isset($_POST['mp'])){
      $select = "SELECT * FROM products order by rand()";
    }
    else{
      $select = "SELECT * FROM products order by rand()";
    }

    $query = mysqli_query($connect, $select);
    
    //mysqli_fetch array -eshte nje funksion qe perdoret per te marre rreshtat nga databaza dhe per ti ruajtur ato si nje grup.
    while( $row = mysqli_fetch_array($query))
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
                      <h3 style="height:70px"><?php echo $fileName; ?></h3>
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
                      <a href="inc/addToCart.php?pId=<?php echo $fileId?>&url=<?php echo $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']?>"><button type="submit" class="product__btn" style="background-color: #fc6a03; color:white; font-weight: bolder; border-color: white;">SHTO NË SHPORTË <i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>
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
                  </ul>
                  </a>
                  </div>
            
<?php

      if(isset($_POST['mp'])){
        header("Location: ../index.php#category");
      }

} ?>