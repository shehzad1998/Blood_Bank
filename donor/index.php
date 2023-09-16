<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <!-- <link href="StyleSheet.css" rel="stylesheet" type="text/css" /> -->

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/header.css">
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

<div style="height:300px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
    <img src="Images/donorpannel.png"/>
        
			
			
	</div>

      
</body>
</html>