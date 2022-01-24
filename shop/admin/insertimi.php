<?php session_start(); 
     if(!isset($_SESSION['username'])){
         header("Location: login.php?error=no_user");
     }else{ ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertimi i Produkteve</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<form method="post" action="insert.inc.php" class="wrapper" enctype="multipart/form-data">
    <div class="title">
      Insertimi i Produkteve
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Emri Produktit:</label>
          <input type="text" class="input" name="fileName">
       </div>  
        <div class="inputfield">
          <label>Imazh i Produktit:</label>
          <input type="file" name="fileUpload">
       </div>  
       <div class="inputfield">
          <label>Pershkrimi i Produktit</label>
          <textarea class="input" name='content' cols='30' rows='15'></textarea>
       </div>  
      <div class="inputfield">
          <label>Qmimi i Produktit:</label>
          <input type="text" class="input" name="filePrice">
       </div> 
       <div class="inputfield">
          <label>Sasia e Produktit:</label>
          <input type="text" class="input" name="fileAv">
       </div>
        <div class="inputfield">
          <label>Kategoria</label>
          <div class="custom_select">
            <select name="category">
                <option value="tshirt">T-shirt</option>
                <option value="hoodies">Hoodies</option>
                <option value="stickers">Stickers</option>
                <option value="wristbands">Wristbands</option>
                <option value="badges">Badges</option>
                <option value="cap">Cap</option>
            </select>
          </div>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" name="upload" class="btn">
      </div>
      <a href='./'>Home</a>
    </div>
</form>	
<a href='../'>Home</a>
</body>
</html>

<?php         
}  
    ?>