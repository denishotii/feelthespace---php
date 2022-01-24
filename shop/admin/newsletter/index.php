<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=no_user");
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Libraria.shop || Newsletter</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<form method="post" action="dergo.inc.php" class="wrapper">
    <div class="title">
      Dergo Njoftim
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Emri i Ofertes:</label>
          <input type="text" class="input" name="subject">
       </div>   
       <div class="inputfield">
          <label>Pershkrimi i Ofertes</label>
          <textarea class="input" name='message' cols='30' rows='15'></textarea>
       </div>  
       <div class="inputfield">
          <label>Linku i Ofertes</label>
          <input type="text" class="input" name="linku">
       </div>
      <div class="inputfield">
        <input type="submit" value="Dërgo" name="submit" class="btn">
      </div>
      <a href='../'>Home</a>
    </div>
</form>	
<a href='../'>Home</a>
</body>
</html>


<?php }?>