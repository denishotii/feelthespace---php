<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: ../signin.php?error=user_is_not_signed_in");
}else{

    $pId = $_GET['pId'];
    $url = $_GET['url'];
    $uId = $_SESSION['id'];
    $cDate = date('Y-m-d H:i:s');
    $error = 0;

    include "../db/db.php";

    $query = "SELECT * FROM cart WHERE uId='$uId' AND pId='$pId' LIMIT 1";
    $result = mysqli_query($connect, $query);
     $product = mysqli_fetch_assoc($result);

     if ($product) 
            { // if user exists
                    $error = 1;
                    header("Location: $url&product=is_in_cart");
            }
            if($error == 0)
            {
              // $password = md5($password);//encrypt i passwordit para se ta ruajme ne database
                
                //Kujdes te veqant tek insertimi i te dhenave!!!
               
                    $insCart ="INSERT INTO cart (uId,pId,cDate)
                    VALUES ('$uId','$pId','$cDate')";
                    
                        mysqli_query($connect,$insCart);
                        // $_SESSION['myEmail'] = $email;
                        header("Location: $url&succesC=product_added");
        
                   }

}