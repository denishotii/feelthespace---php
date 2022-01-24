<?php 
session_start();
    if(!$_GET['pId']){
        header("Location: ../index.php?error=product_id");
    }else{
    
        if(isset($_POST['submit'])){
        include "../db/db.php";
    
        $pId = $_GET['pId'];
        $select = "SELECT * FROM products WHERE id='$pId'";
	
        $query = mysqli_query($connect, $select);

        $row = mysqli_fetch_assoc($query);
                    $id = $row['id'];
                    $fileName = $row['fileName'];
                    $price = $row['price'];
                    $av = $row['fileAv'];
                    $save = $row['save'];
                    $dPrice = $row['dPrice'];
                    if($save == ""){
                        $newPrice = $price;
                    }else{
                        $newPrice = $dPrice;
                    }
              $uId = $_SESSION['id'];
              $fullName = $_POST['fullname'];
              $email = $_POST['email'];
              $address = $_POST['address'];
              $city = $_POST['city'];
              $phoneNumber = $_POST['number'];
              $pagesa = $_POST['fatura'];
              $date = date('Y-m-d H:i:s');
              
              $order = "INSERT INTO orders (uId, phoneNumber, fullName, email, address, city, 
              pagesa, productId, productName,productPrice, oDate) 
              VALUES ('$uId','$phoneNumber','$fullName','$email','$address','$city','$pagesa','$id','$fileName','$newPrice','$date')";
              
                  if(mysqli_query($connect,$order)){
                  $_SESSION['productId'] = $id;

                  $selectone = "SELECT * FROM admin_login WHERE StoreID='$storeId'";
	
                  $query = mysqli_query($connect, $selectone);
          
                  $rowone = mysqli_fetch_assoc($query);
                        // $storeEmail = $rowone['storeEmail'];
                  $_SESSION['storeEmail'] = $storeEmail;
                    header("Location: purchaseEmailToUser.php");
                    // header("Location: ../thanks4order.php?succes=order_succes");
                  }
            
            }  
            }
?>