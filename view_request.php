<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Request</title>
    <link rel="stylesheet" href="css/ViewRequest.css">
    <style>
        .form-box{width: fit-content; height: auto;}
    </style>
</head>
<body>
<?php require('header1.php');?>



  
<div class="bg">
        <div class="form-box" >
            <table cellpadding="10" cellspacing="5" width="1000px" height="100px"  style="margin:auto" >

                        <tr><td colspan="7" align="center"><img src="img/viewrequest.png" height="90px" /></td></tr>
             
                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
                        <tr style="background-color:bisque" align="center" class="bold">            
                          <td class="bold" style="color:red"  name= "b_grp" >Blood Group</td>
                          <td align="center" style="color:red" name= "f_name">Name</td>
                          <td align="center" style="color:red" name = "gender">Gender</td>
                          <td align="center" style="color:red" name = "mobile">Mobile No</td>
                          <td align="center" style="color:red" name = "email">Email</td>
                          <td align="center"    style="color:red" name = "require_date">Till Required Date</td>
                        </tr>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "bloodbank";
                        
                        $conn = mysqli_connect($servername, $username, $password, $database);
                        $sql = "SELECT * FROM `requestes`";
                        $result = mysqli_query($conn, $sql);
                        $r=mysqli_num_rows($result);
                        
while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
            <tr style="background-color:bisque" align="center" class="bold">
                
                <td><?php echo $row['bgroup'];?></td>
                <td><?php echo $row['f_name'];?>&nbsp;<?php echo  $row['l_name'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['reqdate'];?></td>
            </tr>
            <?php
                }
            ?>

            </table>
        </div>
    </div>


</body>
</html>