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
                <link rel="stylesheet" type="text/css" href="table.css">
                
        </head>
        <body>
            <?php 
                include "header.php";
            ?>
        <table border='1' class="content-table" style='border:2px solid black;position:relative;top:50px;left:100px;'>
        <thead>
                    <tr>
                        <td>Offer Id</td>
                        <td>Offer Name</td>
                        <td>Ofeer Image</td>
                        <td>Offer Description</td>
                        <td>Update File</td>
                        <td>Delete File</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        include "db.php";
                        
                        $select = "SELECT * FROM offers;";
                        
                        $query = mysqli_query($connect, $select);
                        
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['oId'];
                            $fileName = $row['oName'];
                            $fileUpload = $row['oImage'];
                            $description = $row['oDescription'];
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $fileName; ?></td>
                        <td><img src="./img/<?php echo $fileUpload; ?>" width="80" height="60"></td>
                        <td style="width:300px"><?php echo $description; ?></td>
                        <td><a href="update.php?update=<?php echo $id; ?>">Update</a></td>
                        <td><button onclick="deleteProduct(<?php echo $id?>);" value="Delete">Delete</button></td>
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
        
                    function deleteDiscount(deleteId){
                        
                        if(confirm('A jeni te sigurt?')){
                            document.location.href = 'dDiscount.php?id='+deleteId;
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