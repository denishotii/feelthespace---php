<?php
session_start();

if (isset($_POST['login'])) {

    include "../db/db.php";
    $email = $_POST['email'];
	$password = $_POST['password'];

    $login = "SELECT * FROM user_login WHERE email='$email' AND password='$password'";
                   
    $con = mysqli_query($connect, $login);

    if(mysqli_num_rows($con)>0)
    {   
        $row = mysqli_fetch_array($con);
        $id = $row["id"];
        $emri = $row['emri'];
        $mbiemri = $row['mbiemri'];
        $myEmail = $row["email"];
        $myPassword = $row["password"];
        $isConfirm = $row['confirm'];
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $myEmail;
        $_SESSION['password'] = $myPassword;
        $_SESSION['isConfirm'] = $isConfirm;
        if($_SESSION['isConfirm'] == 1){
            // if (!empty($_POST['remember'])) {
            //     setcookie()
            // }
        header("Location: ../index.php?login=succes");
        }else{
            session_destroy();
            header("Location: ../signin.php?error=Ju lutem konfirmoni emailin tuaj!");
        }
    }
     elseif(empty($email) || empty($password))
       {
        header("Location: ../signin.php?error=Fushat janë të zbrazëta!");
         echo "<script>alert('Username ose Password jane te zbrazeta!')</script>";
       }
    else
    {
        header("Location: ../signin.php?error=Emaili ose paswordi janë gabim!");
        echo "<script>
        alert('Username ose Password jane gabim!')
        </script>";
        exit();
    }

}