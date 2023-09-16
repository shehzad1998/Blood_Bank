<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="css/1/search.css">
  <style>
    .bg{    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./img/bg.jpg);
}
  </style>
</head>
<body>
<?php require('header1.php');?>
    <div class="bg">
        <div class="form-box">
            <div class="search">
                <img src="img/search.png" alt="Search">
                
            </div>
            <div >
            <form method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr style="font-size: 15px;">
                        <td>Search Available Blood:</td>
                        <td class="more-padding-on-right"></td>
                        <td>
                            <select name="s2" id="blood-grp">
                            <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bloodbank";
$conn = mysqli_connect($servername, $username, $password, $database);
$s = "select * from bloodgroup";
$result = mysqli_query($conn, $s);
$r = mysqli_num_rows($result);
//echo $r;
while ($data = mysqli_fetch_array($result)) {
    if (isset($_POST["show"]) && $data[0] == $_POST["s2"]) {
        echo "<option value=$data[0] selected>$data[1]</option>";
    }
    else {
        echo "<option value=$data[0]>$data[1]</option>";
    }



}
mysqli_close($conn);

?>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from bloodgroup where bg_id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$bg_id=$data[0];
	$bg_name=$data[1];
	
		
		
	mysqli_close($cn);
}
?>

                              </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="sbmt" class="submit-btn">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>

            </div>
        </div>
    </div>
    <?php 
if(isset($_POST["sbmt"]))
{
	header("location:result.php?bg=".$_POST["s2"]);
	echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
}

?>
</body>
</html>