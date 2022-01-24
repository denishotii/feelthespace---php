<?php
    session_start();
    include "db.php";
    
    if(isset($_POST['upload']))
    {
        $fileName=$_POST['fileName'];
        $fileDescription=$_POST['content'];
        $fileUpload=$_FILES['fileUpload']['name'];
        $fileUpload_tmp=$_FILES['fileUpload']['tmp_name'];
        $filePrice = $_POST['filePrice'];
        $fileAv = $_POST['fileAv'];
        $category = $_POST['category'];
        // $select = "SELECT * FROM admin_login where storeID='$storeID'";
        // $query = mysqli_query($connect, $select);
                    
        //             while($row = mysqli_fetch_array($query))
        //             {
        //                 $storeEmail = $row['storeEmail'];
        //             }
        
        
        
        //$ _FILES ["file"] ["tmp_name"] përmban kopjen aktuale të përmbajtjes së file tuaj në server ndërsa. $ _FILES ["file"] ["name"] përmban emrin e file që keni ngarkuar nga kompjuteri.
        
        if($fileName=='' || $fileDescription=='' || $fileUpload == '' || $filePrice == '' || $fileAv == '' || $category == '')
        {
            echo"<script>alert('Any input is Empty');</script>";
        }
        else
        {   
          //Per te mos u ruajtur file i njejt dy ose me shume here.
          $insert="SELECT * FROM products WHERE fileName='$fileName' OR fileUpload='$fileUpload' LIMIT 1";
            $query=mysqli_query($connect,$insert);
            
            $exist=mysqli_fetch_assoc($query);
            
            if($exist)
            {
                if($exist['fileUpload']===$fileUpload)
                {
                    echo "<script>alert('This file already exists!')</script>";
                }
            }
            else
            {
           
                move_uploaded_file($fileUpload_tmp,"../file/$fileUpload");
            
            $uploadFile="INSERT INTO products(fileName,fileUpload,description,price,fileAv,category)
            VALUES('$fileName','$fileUpload','$fileDescription','$filePrice','$fileAv','$category');";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    echo "<script>alert('File is Upload');</script>";
                    echo "<script>window.open('index.php','_self');</script>";
                }
            }
        }
    }
          
?>