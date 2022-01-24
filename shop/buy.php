<?php 
    session_start();
    // if(!isset($_SESSION['email'])){
    //     header("Location: signin.php?error=user_is_not_signed_in");
    // }else{
    if(!$_GET['pId']){
        header("Location: index.php?error=product_id");
    }else{
        include "db/db.php";
    
        $pId = $_GET['pId'];
        $select = "SELECT * FROM products WHERE id='$pId'";
	
        $query = mysqli_query($connect, $select);
        $queryResult = mysqli_num_rows($query);

            while($row = mysqli_fetch_assoc($query)){
                    $id = $row['id'];
                    $fileName = $row['fileName'];
                    $fileUpload = $row['fileUpload'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $availability = $row['fileAv'];
                    $save = $row['save'];
                    $dPrice = $row['dPrice'];
                    if($save == ""){
                        $newPrice = $price;
                    }else{
                        $newPrice = $dPrice;
                    }
                } 
         if(isset($_SESSION['email'])){            
        $user_id = $_SESSION['id'];
        $userPassword = $_SESSION['password'];
        $selectone = "SELECT * FROM user_login WHERE id='$user_id' AND password='$userPassword'";
        $queryone = mysqli_query($connect, $selectone);

            while($rowone=mysqli_fetch_array($queryone)){
                    $emri = $rowone['emri'];
                    $mbiemri = $rowone['mbiemri'];
                    $email = $rowone['email'];
                    $password = $rowone['password'];
                    $adresa = $rowone['adresa'];
                    $qyteti = $rowone['qyteti'];
                    $nrtel = $rowone['nrtel'];
                // $isConfirm = $row['confirm'];
                }
            }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Feel the Space || Checkout</title>
    <link rel="icon" href="file/favicon.png" sizes="50x50" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="CSS/buy.css">
</head>
<body>

<h2>Feel the Space SHOP | Checkout Form</h2>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form id="validate" method="post" action="inc/buy.inc.php?pId=<?php echo $id ?>">
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Name and Surname</label>
                        <input type="text" id="fname" name="fullname" placeholder="Allan Walker"<?php if(isset($_SESSION['email'])){ ?>value="<?= $emri." ".$mbiemri ?>" <?php } ?> required>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="soeng.souy@gmail.com" <?php if(isset($_SESSION['email'])){ ?> value="<?= $email ?>" <?php } ?> required>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="110 W. 15th Phnom Penh" <?php if(isset($_SESSION['email'])){ ?> value="<?= $adresa ?>" <?php } ?> required>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Phnom Penh" <?php if(isset($_SESSION['email'])){ ?> value="<?= $qyteti ?>" <?php } ?> required>

                        <div class="row">
                            <div class="col-50">
                                <label for="state"><i class="fa fa-phone"></i> Phone Number</label>
                                <input type="text" id="state" name="number" placeholder="44123456" <?php if(isset($_SESSION['email'])){ ?> value="<?= $nrtel ?>"<?php } ?> required>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="cname">Billing Options:</label>
                        <label>
                            <input id="fatura" style="display:inline;" type="radio" name="fatura" value="cash" required><h4 style="display:inline;">Pay in cash</h4>
                            <p style="font-size:small;">In addition to online payments, you can also pay upon receipt of the product in cash.</p>
                        </label>
                        <label>
                            <input id="fatura" style="display:inline;" type="radio" name="fatura" value="transfer bankar"><h4 style="display:inline;">Pay by bank transfer</h4>
                            <p style="font-size:small;">Please indicate the invoice or order number on the payment details. As long as the payment appears in our system, your order can not be sent.</p>
		                </label>
                        <label>
                            <input id="fatura" style="display:inline;" type="radio" name="fatura" value="kartele"><h4 style="display:inline;">Pay by card online</h4>
                            <p style="font-size:small;">Make online payments with your bank (any bank) credit or debit cards, through the payment system provided by Raiffeisen Bank.</p>
                        </label>
                    </div>
                </div>
                <label>
                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn" name="submit">
            </form>
        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $queryResult ?></b></span></h4>
            <p><a href="product.php?id=<?php echo $id ?>"><?php echo $fileName ?></a> <span class="price"><?php echo $newPrice ?> €</span></p>
            <hr>
            <p>Total <span class="price" style="color:black"><b><?php echo $newPrice ?> €</b></span></p>
        </div>
    </div>
</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            email: {
                required: true,
            },
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            fatura: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input full name*",
            email:"Please input email*",
            city:"Please input city*",
            address:"Please input address*",
            state:"Please input state*",
            fatura:"Please select one*",
        },
    });
</script>
<?php
 include "parts/livechat.php";
?>
</body>
</html>
<?php } // }?>