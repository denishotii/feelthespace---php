<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=no_user");
    }else{
?>
<html>


<head>
        <title>I-shop | Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="table.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <?php 
        include "header.php";
    ?>
<table border='1' class="content-table" style='border:2px solid black;position:relative;top:50px;left:100px;'>
<thead>
            <tr>
                <td>Search Id:</td>
                <td>Searched for:</td>
                <td>Times:</td>
            </tr>
            </thead>
            <tbody>
            <?php
                include "db.php";
                
                $select = "SELECT * FROM search;";
                
                $query = mysqli_query($connect, $select);
                
                while($row = mysqli_fetch_array($query))
                {
                    $id = $row['Sid'];
                    $searched = $row['searched'];
                    $times = $row['times'];
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $searched; ?></td>
                <td><?php echo $times ?> Times</td>
            </tr>
              <?php  } ?>
              </tbody>
        </table>
        <script language="JavaScript" type="text/javascript">
            
            function deleteProduct(deleteId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'delete.php?delete='+deleteId;
                    return true;
                }
            }
        </script>
        <script type="text/javascript">
        function goBack() {
          window.history.back();
        }
    </script>
        </body>
        <?php 
    }
        ?>
</html>