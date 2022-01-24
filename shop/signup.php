<?php 
  session_start();
  if(isset($_SESSION['email'])){
    header("Location: index.php?error=user_already_signed_in");
}else{
$error = "";
if (isset($_GET['error'])) {
    $error = $_GET['error']; 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feel the Space || Register</title>
	<link rel="stylesheet" href="css/signupstyle.css">
  <link rel="icon" href="file/favicon.png" sizes="50x50" /> 
</head>
<body>

<form action="inc/signup.inc.php" method="post" class="wrapper">
    <div class="title">
      Register as a customer of Feel the Space
    </div><br>
    <p style="color: red;"><?= $error ?></p>
    <br>
    <div class="form">
       <div class="inputfield">
          <label>Name</label>
          <input type="text" class="input" name="emrisp" required>
       </div>  
        <div class="inputfield">
          <label>Surname</label>
          <input type="text" class="input" name="mbiemrisp" required>
       </div>  
       <div class="inputfield">
          <label>Email</label>
          <input type="text" class="input" name="emailsp" required>
       </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="passwordsp" required>
       </div>  
      <div class="inputfield">
          <label>Repeat Password</label>
          <input type="password" class="input" name="passwordsp-repeat" required>
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gjinia">
              <option value="none" name="gjinia">Choose</option>
              <option value="mashkull" name="gjinia">Male</option>
              <option value="femer" name="gjinia">Female</option>
              <option value="anonim" name="gjinia">Anonymous</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Adress</label>
          <input type="text" class="input" name="adresa" required>
       </div> 
      <div class="inputfield">
          <label>City</label>
          <input type="text" class="input" name="qyteti" required>
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="nrtel" placeholder="44123456" required>
       </div> 

      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" name="terms" value="PO" required>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="signup">
      </div>
      <a style="text-decoration:none;color:blue;" href="signin.php">Already registered? Sign in!</a>
    </div>
</form>	
	
</body>
</html>
<?php } ?>