<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <!-- <link href="StyleSheet.css" rel="stylesheet" type="text/css" /> -->
<link href="1.php">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
<link href="css/login1.css" rel="stylesheet" type="text/css" />
  
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
</head>

<body>
<?php include('admin/function.php'); ?>


 
<div class="nav_bg">

		<?php require('header1.php');?>
	
  
   
<!-- <div style="height:500px;">
     <form method="post" enctype="multipart/form-data">

   <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px;" >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2" align="center"><img src="Images/login2.png" width="300px" height="70px"></td></tr>
    
     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
                <tr><td align="right"><img src="Images/login1.png" width="200px" height="150px" /></td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0" height="200px">             


<tr><td class="lefttd">E-Mail</td><td><input type="email" name="t1" required="required"/></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password" name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  /></td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
 <tr><td style="font-size:14px">Not A DONOR.?</td><td ><a href="index1.php" style="color:#C30">Click here</a> to REGISTER.</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              
</table>
</td></tr></table>


		
</form>
</div> -->

<div class="bg">
        <div class="form-box">
            <div class="button">
                <div id="btn"></div>
                <button type="button" name="sbmt" class="toggle-btn" onclick="login()">Login</button>
                <button type="button"  class="toggle-btn" onclick="register()">Register</button>
            </div> 
            <div>
                <form id="login" class="input-grp" method="post" enctype="multipart/form-data">
                    <input type="email" class="input-field" placeholder="email" name="t1" required>
                    <input type="password" class="input-field" placeholder="Password" name="t2" required>
                    
                    <button type="sbmt" class="submit-btn" name="sbmt">Login</button>
                    
                </form>
            </div>
            <div>
                <form action="login2.php" method="post" id="register" class="input-grp" >
                    <input type="text" name="f_name" class="input-field" placeholder="First Name" required>
                    <input type="text" name="l_name" class="input-field" placeholder="Last Name" required>
                            <table id="gender" class="checkbox
                                <tr>
                                    <td>Gender</td>
                                    <td class="more-padding-on-right"></td>
                                    <td>
                                        <input  type="radio" id="male" name="gender" value="Male">
                                        <label for="Male">Male</label>
                                    </td>
                                    <td class="more-padding-on-right"></td>
                                    <td>
                                        <input type="radio" id="female" name="gender" value="Female">
                                        <label for="Female">Female</label>
                                    </td>
                                </tr>
                            </table> 
                            <table>
                            <tr>
                                <td><label for="dob" >Date of Birth</label></td>
                                <td class="more-padding-on-right"></td>
                                <td><input type="date" name="dob" class="input-field"  required></td>
                            </tr>
                            </table>
                    <input type="numbber" name="mobile" class="input-field" placeholder="Mobile Number" required>  
                    <input type="email" name="email" class="input-field" placeholder="Email" required>
                    <table id="blood-grp">
                        <tr>
                            <td> 
                                <label for="blood-grp" name="b_grp">Blood group</label>                            
                            </td>
                            <td class="more-padding-on-right"></td>
                            <td>
                                <select name="b_grp" id="blood-grp">
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
                                  </select>  
                            </td>
                        </tr>
                    </table>
                    <input type="password" name="pwd" class="input-field" placeholder="Password" required>
                    <input type="password"  class="input-field" placeholder="Confirm Password" required>
                    <input type="checkbox" class="checkbox"><span>Terms and conditions</span>
                    <button type="submit" class="submit-btn">Register</button>
                </form>
            </div>           
        </div>

    </div>      
    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");
     function register(){
         x.style.left = "-400px";
         y.style.left = "50px";
         z.style.left = "110px";
     }
     function login(){
         x.style.left = "50px";
         y.style.left = "450px";
         z.style.left = "0px";
     }
</script>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $b_grp = $_POST['b_grp'];
    $pwd = $_POST['pwd'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bloodbank";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("sorry faild to connect! " . mysqli_connect_error());
    }
    else {
        $sql = "INSERT INTO `donarregistration` (`f_name`, `l_name`, `gender`, `dob`, `mobile`, `b_id`, `email`, `pwd`) 
        VALUES ('$f_name', '$l_name', '$gender', '$dob', '$mobile', '$b_grp', '$email', '$pwd')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        if ($result) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">data inserted Sucsessfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
        }
        else {

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">data was not inserted Sucsessfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    }
}

?>

    
<?php

$_SESSION['donorstatus']="";

if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select * from donarregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";
//header("location:donor/index.php");
echo "<script>location.replace('donor/index.php');</script>";
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
?> 
</body>
</html>