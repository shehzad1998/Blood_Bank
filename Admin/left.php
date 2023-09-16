<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<!--slider-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
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

   
   <!-- <div style="width:1000px; height:fit-content; box-shadow:-10px 10px 5px #CCC"> -->
       <!-- <div style="width:800px;float:left; height:500px"> -->
<table style="width:100%; height:600px">
<tr><td style="font-size:24px; color:#F00; font-weight:bold"></td></tr>
<br />
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td class="lefttd"><a id="v-pills-profile-tab" class="nav-link tab-pane" data-toggle="pill" href="adduser.php" >Add User</a></td></tr>
<tr><td class="lefttd"><a id="v-pills-profile-tab"class="nav-link tab-pane" data-toggle="pill"href="upuser.php">Update User</a></td></tr>
<tr><td class="lefttd"><a class="nav-link tab-pane" data-toggle="pill"href="deluser.php">Delete User</a></td></tr>

<?php }?>

<tr><td class="lefttd"><a class="nav-link tab-pane" data-toggle="pill"href="addcamp.php">Add Camp</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td class="lefttd"><a class="nav-link tab-pane" data-toggle="pill"href="updatecamp.php">Update Camp</a></td></tr>
<tr><td class="lefttd"><a class="nav-link tab-pane" data-toggle="pill"href="deletecamp.php">Delete Camp</a></td></tr>

<?php }?>
<tr><td class="lefttd"><a class="nav-link tab-pane" data-toggle="pill"href="addgallery.php">Add Gallery</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td class="lefttd"><a class="nav-link tab-pane" data-toggle="pill" href="deletegallery.php">Delete Gallery</a></td></tr>
<?php }?>
<tr><td class="lefttd"><a class="nav-link tab-pane" data-toggle="pill" href="viewcamp.php">View camps</a></td></tr>

</table>
<!-- </div></div> -->


</body>
</html>