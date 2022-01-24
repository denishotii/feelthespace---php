<?php
    session_start();
    
    //Inicializimi i variablave
    $emri = "";
    $mbiemri = "";
    $email    = "";
    $password = "";
    $password_repeat = "";
    $gjinia = "";
    $adresa = "";
    $qyteti = "";
    $nrtel = "";
    $terms = "";

    $error;
    $errors = array();

    include "../db/db.php";

        if(isset($_POST['signup']))
        {
            //mysqli_real_escape_string(); eshte nje funksion qe i largon karakteret speciale. Përdoret për të krijuar një string legal SQL që mund të përdoret në një query te SQL.
            $emri = mysqli_real_escape_string($connect,$_POST['emrisp']);
            $mbiemri = mysqli_real_escape_string($connect,$_POST['mbiemrisp']);
            $email = mysqli_real_escape_string($connect,$_POST['emailsp']);
            $password = mysqli_real_escape_string($connect,$_POST['passwordsp']);
            $password_repeat = mysqli_real_escape_string($connect,$_POST['passwordsp-repeat']);
            $gjinia =  mysqli_real_escape_string($connect,$_POST['gjinia']);
            $adresa = mysqli_real_escape_string($connect,$_POST['adresa']);
            $qyteti = mysqli_real_escape_string($connect,$_POST['qyteti']);
            $nrtel = mysqli_real_escape_string($connect,$_POST['nrtel']);
            $terms = mysqli_real_escape_string($connect,$_POST['terms']);
                  
            
                
            $query = "SELECT * FROM user_login WHERE email='$email' LIMIT 1";
                
            $result = mysqli_query($connect, $query);
            $user = mysqli_fetch_assoc($result);
      
            if ($user) 
            { // if user exists
                if ($user['email'] === $email) 
                {
                    $error = 1;
                    header("Location: ../signup.php?error=Ky email është përdorur më parë! Ju lutem provoni me një email tjetër!");
                }
            }
            if ($password !== $password_repeat){ 
                $error = 1;
                header("Location: ../signup.php?error=Password nuk përputhet!");
            }
            if(!preg_match("/^[a-zA-ZëË_]*$/", $emri)){
                $error = 1;
                header("Location: ../signup.php?error=Tek EMRI përdor vetëm shkronja!");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error = 1;
                header("Location: ../signup.php?error=Shëno një email valid!");
            }
            if(strlen($password) < 6){
                $error = 1;
                header("Location: ../signup.php?error=Password duhet të jetë 6 ose më shumë shifra!");
            }
            if($error == 0)
            {
              // $password = md5($password);//encrypt i passwordit para se ta ruajme ne database
                
                //Kujdes te veqant tek insertimi i te dhenave!!!
               
                    $regist ="INSERT INTO user_login (emri, mbiemri,email,password,gjinia,adresa,qyteti,nrtel,terms)
                    VALUES ('$emri','$mbiemri','$email','$password','$gjinia','$adresa','$qyteti','$nrtel','$terms')";
                    
                        mysqli_query($connect,$regist);
                        $_SESSION['myEmail'] = $email;
                        header("Location: confirmEmail.php");
        
                   }
            }
    ?>
    