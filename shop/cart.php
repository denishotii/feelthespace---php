<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location: signin.php?url=cart.php");
    }else{
    $allPrice = 0;
    $youSave = 0;
?>
<!DOCTYPE html>

<html>

<head>
<script src="https://kit.fontawesome.com/46323304fb.js" crossorigin="anonymous"></script>
	<title>Feel the Space | Cart</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="icon" href="file/favicon.png" sizes="50x50" /> 
    <style>
    a{
        text-decoration: none;  
    }
    .btn-outline{
        outline: none;
        display: block;
        border: solid 1px #ff781f;
        font-size: 16px;
        font-weight: 500;
        line-height:1;
        padding: 14px 28px;
        border-radius: 30px;
        background-color: #ff781f;
        color: #ffffff;
        cursor: pointer;
        transition: all 0.3s linear;
        float: left;

    }
    .btn-outline:hover,
    .btn-outline:focus{
        background-color: #ffffff;
        color: #ff781f;
    }
    .btn-outline:active{
        background-color: #ff781f;
        color: #ffffff;
    }
    @media screen and (max-width: 700px){
        .btn-outline{
            width: 100px;
            height: 30px;
            font-size: 16px;
            line-height: 0;
            padding: 0 0;
        }
        .checkout{
            display: none;
        }
    }
    @media screen and (max-width: 700px){
        .btn-outline{
            width: 80px;
            height: 30px;
            font-size: 16px;
            line-height: 0;
            padding: 0 0;
        }
        .checkout{
            display: none;
        }
    }
    </style>
</head>

<body>

<div class="container">
<br>
<a href="./"><h3 style="font-weight: bold; color: red;">Back to Home</h4></a>
	<h1>Shopping Cart</h1>

	<div class="cart">

		<div class="products">
        <?php
        include "db/db.php";
        $uId = $_SESSION['id'];
        $query = "SELECT * FROM cart WHERE uId='$uId'";
        $result = mysqli_query($connect, $query);
        $product = mysqli_num_rows($result);
        if($product < 1){ ?>
            <div class="product">
            <div class="product-info">
            <p>You have no product in your cart!</p><br>
            <p>Please go back to Home and add items to cart!</p>
            <a href="index.php" class="product-remove">

            <i class="fas fa-backward" aria-hidden="true"></i>

						<span class="remove">Go Back</span>

					</a>
            </div>
            </div>
       <?php }
        while( $row = mysqli_fetch_array($result))
        {
            $pId = $row['pId'];
            $cId = $row['cId'];
            $selectP = "SELECT * FROM products WHERE id='$pId'";
            $resultSelect = mysqli_query($connect, $selectP);
        while( $rowP = mysqli_fetch_array($resultSelect))
        {
	
	        $fileId = $rowP['id'];
            $fileName = $rowP['fileName'];
            $fileUpload = $rowP['fileUpload'];
            $fileDescription = substr($rowP['description'],0,100);
            $price = $rowP['price'];
            $save = $rowP['save'];
            $dPrice = $rowP['dPrice'];
        ?>

			<div class="product">
            <!-- <a href="product.php?id=<?= $fileId ?>"> -->
				<img src="file/<?php echo $fileUpload ?>">
            <!-- </a> -->
				<div class="product-info">

					<h3 class="product-name"><?php echo $fileName ?></h3>
                    <?php if($save == ""){ ?>
					<h4 class="product-price"><?php echo $price ?>  €</h4>
					<h4 class="product-offer"><?php echo "0" ?> %</h4>
                    <?php }else{ ?>  
                    <h4 class="product-price" style="text-decoration: line-through;"><?php echo $price ?>  €</h4>
                    <h4 class="product-price"><?php echo $dPrice ?>  €</h4>
					<h4 class="product-offer"><?php echo $save ?> %</h4>
                    <?php } ?> 
                    <a href="buy.php?pId=<?php echo $fileId ?>">
                        <div class="item">
                            <button class="btn-outline"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span class="checkout"> Checkout</span></button>
                        </div>
                    </a>
					<a href="inc/removeFromCart.php?cId=<?php echo $cId ?>" class="product-remove">

                    <i class="fas fa-trash" aria-hidden="true"></i>

						<span class="remove">Remove</span>

					</a>

				</div>
			</div>
            <?php 
        }             
        $allPrice += $dPrice;
        $youSave += $price - $dPrice;  
                }?>
		</div>

		<div class="cart-total">

			<p>

				<span>Çmimi TOTAL</span>

				<span><?php echo $allPrice ?>  €</span>

			</p>

			<p>

				<span>Numri i Produkteve</span>

				<span><?php echo $product ?></span>

			</p>

			<p>

				<span>Ti KURSEN</span>

				<span><?php echo $youSave ?>  €</span>

			</p>
		</div>

	</div>

</div>
<?php
 include "parts/livechat.php";
?>
</body>
</html>

<?php } ?>