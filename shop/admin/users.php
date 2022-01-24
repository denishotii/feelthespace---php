<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=no_user");
    }else{
?>
<html>


<head>
    <title>I-shop | Users</title>
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" href="./css/header.css">

</head>
<body>
        <?php 
			include "header.php";
		?>
<table border='1' class="content-table" style='border:2px solid black;position:relative;top:50px;left:100px;'>
<thead>
            <tr>
                <td>User Id</td>
                <td>Email</td>
                <td>Password</td>
                <td>Is Email Confirmed</td>
                <td>Delete User</td>
            </tr>
            </thead>
            <tbody>
            <?php
                include "db.php";
                
                $select = "SELECT * FROM user_login;";
                
                $query = mysqli_query($connect, $select);
                
                while($row = mysqli_fetch_array($query))
                {
                    $id = $row['id'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $isConfirmed = $row['confirm'];
                    if($isConfirmed == 1){
                        $conf = "Yes";
                    }else{
                        $conf = "No";
                    };
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $password ?></td>
                <td style="text-align: center;"><?php echo $conf ?></td>
                <td><button onclick="deleteProduct(<?php echo $id?>);" value="Delete">Delete</button></td>
            </tr>
              <?php  } ?>
              </tbody>
        </table>
        <script language="JavaScript" type="text/javascript">
            
            function deleteProduct(deleteId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'delete_user.php?delete='+deleteId;
                    return true;
                }
            }
        </script>
        </body>
        <?php 
    }
        ?>
    <script type="text/javascript">
        function goBack() {
          window.history.back();
        }
    </script>
</html>