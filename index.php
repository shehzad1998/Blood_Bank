<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <!-- <link href="StyleSheet.css" rel="stylesheet" type="text/css" /> -->
    <link href="css/index.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
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
</head>

<body>
 
<div class="nav_bg">

		<?php require('header1.php');?>
	

        <!-- <div>

          <div class="h_btm_bg">
<div class="wrap">
<div class="h_btm">
	<div class="header-para">
		<img src="cpics/welcome.png"/>		
		<p>Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year.
Donate Blood 	
Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility.

We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
	</div>  
	
	<div class="clear"></div>
</div>
</div>
</div>
<div class="s_bg">
<div class="wrap">
<div class="main_cont">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
  	    		<li>
  	    	    <img src="Images/slider1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider2.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider3.jpg"/>
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider4.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider5.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider6.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider7.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider8.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
	<div class="ribben">
	   <div class="l-triangle-top"></div>
	   <div class="l-triangle-bottom"></div>
		   <div class="rectangle"></div>
	      <div class="r-triangle-top"></div>
	   <div class="r-triangle-bottom"></div>
	   <div class="clear"></div>
	</div>
<div class="main">
	<div class="content">		
			<h4>Blood bank:</h4>
			<p>We welcome you to in our WebSite. If you are a donor , We appreciate you <a href="index1.php">signing up</a> online as a Donor. If you need blood we are happy to serve you. This blood donor list is hosted by <a href="index.php">www.lifesaver.com</a> on behalf of "Life Saver Blood Bank"
as a public service without any profit motive.This is a free service. While the Organisers have taken all steps to obtain accurate and up-to-date information of potential blood donors, 
the Organisers and ICM Computers do not guarantee accuracy of the information contained herein or the suitability of the persons listed as any liability for direct or consequential damage to any person using this blood donor list including 
loss of life or damage due to infection of any nature arising out of blood transfusion from persons whose names have been listed in this website.
We request donors to update contact details regularly.</p>
	</div>
	<div class="sidebar">
			<h2>Latest News</h2>
			<div class="blog_posts">

    <marquee direction="up" scrolldelay="300"><table >
<tr><td>
                         <div class="blog_desc">
						<div class="blog_heading">
							<span style="font-weight:bold"><b>HDFC Bank sets Guinness record in blood collection</b>
<p>The blood donation camp organised by HDFC Bank on December 6, 2013 involving 61,902 participants has found a place in Guinness Book of Records as the largest such drive on a single day</p></span>
							
						 </div>	
                         <br />
	<span style="font-weight:bold"><b>World Blood Donor Day: Poor health reduces women blood donors in India</b>
<p>While the overall number of blood donors in India has grown over the years, women constitute only a tiny 10 percent share owing to health problems like pernicious anaemia and low haemoglobin levels or being underweight</p></span>
					  </div>
                        </td></tr>
                   
                </table></marquee>  
				 
					 <div class="clear"></div>	
					</div>
				</div>	 -->
				<div class='row donationTypes'>

<div class='col-md-8 col-md-offset-2 donationTypeInfoWindow text-center' >
			<div class="typeHeading">
				<h1 >Types of donation</h1>
			</div>
			<!-- /Header -->

			<!-- Content -->
			<div class="content">
				<p style="text-align: center;">The human body contains five liters of blood, which is made of several useful components i.e. <strong>Whole blood</strong>, <strong>Platelet</strong>, and <strong>Plasma</strong>.</p>
				<p style="text-align: center;">Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.</p>
				<p style="text-align: center;">For <strong>plasma</strong> and <strong>platelet</strong> donation you must have donated whole blood in past two years.</p>
											
			</div>
			<br><br>
			<!-- "Tabs" -->
		 <ul class="nav nav-tabs">
			  
			  <li onclick="openInfo(event, 'wholeBlood')" id="wb" class=" active infoLink"><a href="javascript:void(0)">Whole Blood</a></li>
			  <li onclick="openInfo(event, 'plasma')" id="pls" class=" infoLink"><a href="javascript:void(0)">Plasma</a></li>
			  <li onclick="openInfo(event, 'platelet')" id="plt" class=" infoLink"><a href="javascript:void(0)">Platelet</a></li>
		</ul>
		
		
		<div class='row tabInfo'   id='wholeBlood'>
		<div class='col-md-4 '>
		
			<h3>What is it?</h3>
			
			<p>
			Blood Collected straight from the donor after its donation usually separated into red blood cells, platelets, and plasma.</p>
			
			<h3>Who can donate?</h3>
			
			<p>You need to be 18-65 years old, weigh 45kg or more and be fit and healthy.</p>
		

		</div>
		<div class='col-md-4 infoContent'>
		<h3>User For?</h3>
			
			<p>
			 Stomach disease, kidney disease, childbirth, operations, blood loss, trauma, cancer, blood diseases, haemophilia, anemia, heart disease.</p>
			
			<h3>Lasts For?</h3>
			
			<p>Red cells can be stored for 42 days.</p>
		
		</div>
		<div class='col-md-4 '>
		<h3>How long does it take?</h3>
			
			<p>
			15 minutes to donate.</p>
			
			<h3>How often can I donate?</h3>
			
			<p>Every 12 weeks</p>
		
		</div>
		</div>
		
		<div class='row tabInfo'  style='display:none'   id='plasma'>
		<div class='col-md-4 '>
		
			<h3>What is it?</h3>
			
			<p>
			The straw-coloured liquid in which red blood cells, white blood cells, and platelets float in.Contains special nutrients which can be used to create 18 different type of medical products to treat many different medical conditions.</p>
			
			<h3>Who can donate?</h3>
			
			<p>You need to be 18-70 (men) or 20-70 (women) years old, weigh 50kg or more and must have given successful whole blood donation in last two years. </p>
		

		</div>
		<div class='col-md-4 infoContent'>
		<h3>User For?</h3>
			
			<p>
			Immune system conditions, pregnancy (including anti-D injections), bleeding, shock, burns, muscle and nerve conditions, haemophilia, immunisations.</p>
			
			<h3>Lasts For?</h3>
			
			<p>Plasma can last up to one year when frozen.</p>
		
		</div>
		<div class='col-md-4 '>
		<h3>How  does it work?</h3>
			
			<p>
			We collect your blood, keep plasma and return rest to you by apheresis donation.</p>
		
		<h3>How long does it take?</h3>
			
			<p>
			15 minutes to donate.</p>
			
			<h3>How often can I donate?</h3>
			
			<p>Every 2-3 weeks.</p>
		
		</div>
		</div>
		
		<div class='row tabInfo' style='display:none'  id='platelet'>
		<div class='col-md-4 '>
		
			<h3>What is it?</h3>
			
			<p>
			The tiny 'plates' in blood that wedge together to help to clot and reduce bleeding. Always in high demand, Vital for people with low platelet count, like malaria and cancer patients.</p>
			
			<h3>Who can donate?</h3>
			
			<p>You need to be 18-70 years old (men), weigh 50kg or more and have given a successful plasma donation in the past 12 months</p>
		

		</div>
		<div class='col-md-4 infoContent'>
		<h3>User For?</h3>
			
			<p>
			Cancer, blood diseases, haemophilia, anaemia, heart disease, stomach disease, kidney disease, childbirth, operations, blood loss, trauma, burns.</p>
			
			<h3>Lasts For?</h3>
			
			<p>Just five days..</p>
		
		</div>
		<div class='col-md-4 '>
		<h3>How does it work?</h3>
			
			<p>
			We collect your blood, keep platelet and return rest to you by apheresis donation.</p>
			
		<h3>How long does it take?</h3>
			
			<p>
			45 minutes to donate.</p>
			
			<h3>How often can I donate?</h3>
			
			<p>Every 2 weeks</p>
		
		</div>
		</div>
</div>
</div>
<div class="table">
<table class="table table-responsive table-bordered ">
	<tbody>
	<tr>
	<th colspan="3" style='color:white;background-color:red;'>Compatible Blood Type Donors</th>
	</tr>
	<tr>
	<td><b>Blood Type</b></td>
	<td><b>Donate Blood To</b></td>
	<td><b>Receive Blood From</b></td>
	</tr>
	<tr>
	<td><span style="color: #961e1b;"><b>A+</b></span></td>
	<td>A+ AB+</td>
	<td>A+  A- O+ O-</td>
	</tr>
	<tr>
	<td><span style="color: #961e1b;"><b>O+</b></span></td>
	<td>O+ A+ B+ AB+</td>
	<td>O+ O-</td>
	</tr>
	<tr>
	<td><span style="color: #961e1b;"><b>B+</b></span></td>
	<td>B+ AB+</td>
	<td>B+ B- O+ O-</td>
	</tr>
	<tr>
	<td><span style="color: #961e1b;"><b>AB+</b></span></td>
	<td>AB+</td>
	<td>Everyone</td>
	</tr>
	<tr>
	<td><span style="color: #961e1b;"><b>A-</b></span></td>
	<td>A+ A- AB+ AB-</td>
	<td>A- O-</td>
	</tr>
	<tr>
	<td><span style="color: #961e1b;"><b>O-</b></span></td>
	<td>Everyone</td>
	<td>O-</td>
	</tr>
	<tr>
	<td><span style="color: #961e1b;"><b>B-</b></span></td>
	<td>B+ B- AB+ AB-</td>
	<td>B- O-</td>
	</tr>
	<tr>
	<td><span style="color: #961e1b;"><b>AB-</b></span></td>
	<td>AB+ AB-</td>
	<td>AB- A- B- O-</td>
	</tr>
	</tbody>
	</table>
</div>
<script>
function openInfo(evt, featureName) {
// Declare all variables
var i, tabcontent, tablinks;

// Get all elements with class="tabcontent" and hide them
tabcontent = document.getElementsByClassName("tabInfo");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}

// Get all elements with class="tablinks" and remove the class "active"
tablinks = document.getElementsByClassName("infoLink");
for (i = 0; i < tablinks.length; i++) {
tablinks[i].className = tablinks[i].className.replace(" active", "");
}

// Show the current tab, and add an "active" class to the button that opened the tab
document.getElementById(featureName).style.display = "block";
evt.currentTarget.className += " active";
}
</script>

</body>
</html>