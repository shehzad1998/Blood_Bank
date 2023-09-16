<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/1/request.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
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
	.bg{background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./img/bg.jpg);}
  </style>
</head>

<body>
<?php include('admin/function.php'); ?>


<div class="nav_bg">

		<?php require('header1.php');?>

		<div class="bg">
        <div class="form-box">
            <div class="button">
                <div id="btn"></div>
                <button type="button" class="toggle-btn">Request For Blood</button>
            </div> 
            
            <div>
                <form action="requests.php" method="post" id="request" class="input-grp" >
                    <input type="text" name="f_name" class="input-field" placeholder="First Name" required>
                    <input type="text" name="l_name" class="input-field" placeholder="Last Name" required>
                            <table id="gender" class="checkbox
                                <tr>
                                    <td>Gender</td>
                                    <td class="more-padding-on-right"></td>
                                    <td>
                                        <input type="radio" name="gender" id="male" name="gender" value="Male">
                                        <label for="Male">male</label>
                                    </td>
                                    <td class="more-padding-on-right"></td>
                                    <td>
                                        <input type="radio" name="gender" id="female" name="gender" value="Female">
                                        <label for="Female">female</label>
                                    </td>
                                </tr>
                            </table> 
                    <input type="number" name="age" class="input-field" placeholder="Age" required>
                    <input type="numbber" name="mobile" class="input-field" placeholder="Mobile Number" required>  
                    <input type="email" name="email" class="input-field" placeholder="Email" required>
                    <table>
                        <tr>
                            <td>Require Date</td>
                            <td class="more-padding-on-right"></td>
                            <td>
                                <input type="date" name="reqdate" class="input-field">
                            </td>
                        </tr>
                    </table>
                    <table id="blood-grp">
                        <tr>
                            <td> 
                                <label for="b-grp" name="b_grp">Blood group</label>                            
                            </td>
                            <td class="more-padding-on-right"></td>
                            <td>
                            <select name="b_grp" id="b_grp">
                                <option style="display: none;">Please Select</option>
                                <option >A-</option>                                                                        
                                <option >B+</option>    
                                <option >AB+</option>    
                                <option >A-</option>                                    
                                <option >B-</option>    
                                <option >O+</option>    
                                <option >O-</option>
                            </select>   
                            </td>
                        </tr>
                        <tr>
                            <td class="more-padding-on-bottom"></td>
                        </tr>
                        <tr>
                            
                            <td>Discriptoion:</td>
                            <td class="more-padding-on-right"></td>
                            <td>
                                <textarea name="discription" class="text-field" cols="21" rows="3"></textarea>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" name= "sbmt" class="submit-btn">Request</button>
                </form>
            </div>           
        </div>
    </div>
          
        

<?php

if(isset($_POST["sbmt"])) 
{
	$f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $b_grp = $_POST['b_grp'];
    $reqdate = $_POST['reqdate'];		
    $detail = $_POST['discription'];		
		
	$cn=makeconnection();
			$s="INSERT INTO `requestes` (`f_name`, `l_name`, `gender`, `age`, `mobile`, `email`, `bgroup`, `reqdate`, `detail`) 
			VALUES ('$f_name', '$l_name', '$gender', '$age', '$mobile', '$email', '$b_grp', '$reqdate', '$detail')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>