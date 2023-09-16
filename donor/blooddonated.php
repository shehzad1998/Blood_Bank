<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link rel="stylesheet" href="css/header.css">
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
  <style>
     .bg{
	height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(../Img/bg.jpg);
	background-position: center;
	background-size: cover;
	position: absolute; 

  }
  </style>
</head>

<body>

<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../login.php");
}
?>
<?php include('function.php'); ?>

<div class="nav_bg">
<header>
          <div class="left">
              <img src="Images/logo.png" alt="">
          </div>
          <div class="mid" >
              <ul class="navbar" >
               
                <li><a href="blooddonated.php">Blood Donated</a></li>
                <li><a href="viewdonations.php">View Donations</a></li>
                <li><a href="viewrequest.php">View Requests</a></li>
            </ul>
          </div>
            <div class="right">
              <button onclick="myFunction()" class="dropbtn" ><img class="dropbtn"  src="Images/Profile.jpg"  alt="Profile" ></button>
              <div id="myDropdown" class="dropdown-content">
                <a href="updateprofile.php">Update</a>
                <a href="chngpwd.php">Change Password</a>
                <a href="logout.php">Log Out</a>
              </div>
            </div>

    </header>
	<script> 
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }</script>

<div class="bg">
<div style="height:400px; width:600px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" width="500px" class="tableborder" style="margin:auto" >

        <tr><td colspan="2" align="center"><img src="Images/bdonated.png" height="80px" /></td></tr>
             <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
  
   <tr><td class="lefttd">Select camp </td><td><select name="s3" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from camp";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s3"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from camp where camp_id='" .$_POST["s3"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$camp_id=$data[0];
	$camp_title=$data[1];
	$organized_by=$data[2];
	$state=$data[3];
	$city=$data[4];
	$pic=$data[5];
	$detail=$data[6];
		
		
	mysqli_close($cn);
}
?>
</td></tr>

         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> Date</td><td>

<input type="date" name="t2" id="t2">
</td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle">No Of Units</td><td><input type="number" name="t3"  required="required"  min="0" max="100" title="please enter only numbers between 1 to 10 for no. of units" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle"> Other Detail</td><td><textarea name="t4"></textarea></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Save" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></table></td></tr>	</table></form>
	</div>
	</div>

     <?php
if(isset($_POST["sbmt"])) 
{
	// $d=$_POST["year"]."-".$_POST["month"]."-".$_POST["day"];
	//echo $d;
$cn=makeconnection();
			$s="insert into donation(camp_id,ddate,units,detail,email) values('" . $_POST["s3"] . "','". $_POST["t2"] ."' ,'" . $_POST["t3"] . "','" . $_POST["t4"] . "','". $_SESSION["email"] ."')";
			
			//INSERT INTO `donation`(`donation_id`, `camp_id`, `ddate`, `units`, `detail`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
		

	

?> 	 


    
</body>
</html>