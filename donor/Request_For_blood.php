<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request For Blood</title>
    <link rel="stylesheet" href="css/header1.css">

    <link rel="stylesheet" href="css/request.css">
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
        <div class="form-box">
            <div class="button">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" style="font-family:bold">Request For Blood</button>
            </div> 
            
            <div>
                <form action="Request_For_blood1.php" method="post" id="request" class="input-grp" >
                    <input type="text" name="f_name" class="input-field" placeholder="First Name" required>
                    <input type="text" name="l_name" class="input-field" placeholder="Last Name" required>
                            <table id="gender" class="checkbox
                                <tr>
                                    <td>Gender</td>
                                    <td class="more-padding-on-right"></td>
                                    <td>
                                        <input type="radio" name="gender" id="male" name="gender" value="Male">
                                        <label for="Male">Male</label>
                                    </td>
                                    <td class="more-padding-on-right"></td>
                                    <td>
                                        <input type="radio" name="gender" id="female" name="gender" value="Female">
                                        <label for="Female">Female</label>
                                    </td>
                                </tr>
                            </table> 
                    <input type="number" name="age" class="input-field" pattern="[0-9]{1,2}" placeholder="Age" required>
                    <input type="number" name="mobile" class="input-field" pattern="[0-9]{1,10}" placeholder="Mobile Number" required>  
                    <input type="email" name="email" class="input-field" placeholder="Email" required>
                    <table>
                        <tr>
                            <td>Require Date</td>
                            <td class="more-padding-on-right"></td>
                            <td>
                                <input type="date" name="date" class="input-field">
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
                                <option style="display: none;">A+</option>    
                                <option style="display: none;">B+</option>    
                                <option style="display: none;">AB+</option>    
                                <option style="display: none;">A-</option>                                    
                                <option style="display: none;">B-</option>    
                                <option style="display: none;">O+</option>    
                                <option style="display: none;">O-</option>    
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
			
		
	$cn=makeconnection();
		$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
			$s="insert into requestes(f_name,l_name,gender,age,mobile,bgroup,email,reqdate,detail) 
            values('" . $_POST["f_name"] ."','" . $_POST["l_name"] . "','" . $_POST["gender"] . "','" . $_POST["age"] . "','" . $_POST["mobile"] . "','" . $_POST["b_grp"] . $_POST["email"] . $d .  $_POST["date"] .  $_POST["discription"]  ."')";
			
			
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