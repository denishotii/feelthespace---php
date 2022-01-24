<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=no_user");
    }else{
?>
<html>


<head>
        <title>Libraria.shop | Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
        <form method="post" action="">
        Sasia e Produkteve:<input type="text" name="sasia"><br><br>
        <input type="submit" name="enter" value="Insert">
        </form>
        <?php
        include "db.php";
    
    if(isset($_POST['enter']))
    {
        $discount=$_POST['sasia'];
        $id = $_GET['pId'];

        if($discount=='')
        {
            echo"<script>alert('Any input is Empty');</script>";
        }else{
                $ins_sql = "UPDATE products SET fileAv='$discount' WHERE id=$id";
                if(mysqli_query($connect,$ins_sql))      
                {
                    echo "<script>alert('File is Upload');</script>";
                    echo "<script>window.open('products.php','_self');</script>";
                }

            }

        }
    }
    ?>
</body>
</html>