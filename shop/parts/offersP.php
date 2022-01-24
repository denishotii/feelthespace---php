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
                <li class="glide__slide" style="display:inline;">
                  <div class="product">
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
                      <a href="inc/addToCart.php?pId=<?php echo $fileId?>&url=<?php echo $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']?>"><button type="submit" class="product__btn" style="background-color: blue;">SHTO NË SHPORTË <i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>
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
                  </div>
                  </li>
                  <?php } ?>