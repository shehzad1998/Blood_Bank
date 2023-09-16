<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/header.css">
</head>

<body>

	<header>
          <div class="left">
              <img src="img/logo.png" alt="">
          </div>
          <div class="mid">
              <ul class="navbar">
                <li><a href="../index.php">Preview Website</a></li>
            </ul>
          </div>
            <div class="right">
              <button onclick="myFunction()" class="dropbtn" ><img class="dropbtn"  src="img/Profile.jpg"  alt="Profile" ></button>
              <div id="myDropdown" class="dropdown-content">
                <a href="logout.php">Log Out</a>
              </div>
            </div>

    </header>
	<script>function myFunction() {
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
</body>
</html>