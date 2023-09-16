<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
</head>

<body>
      <header>
          <div class="left">
              <img src="img/logo.png" alt="">
          </div>
          <div class="mid">
              <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="reqbtn" onclick="ReqFunction()" href="#" >Request</a></li>
                <div id="reqdropdown" class="req-content">
                  <a href="requests.php">Request for blood</a>
                  <a href="Request_For_Donate.php">Request for donation</a>
                  <a href="search1.php">Availablity of Blood</a>
                  <a href="view_request.php">View Request</a>
                </div>
                <li><a href="camps.php">Camps</a></li>                
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="aboutus.php">About</a></li>
            </ul>
          </div>
            <div class="right">
              <button onclick="myFunction()" class="dropbtn" ><img class="dropbtn"  src="img/Profile.jpg"  alt="Profile" ></button>
              <div id="myDropdown" class="dropdown-content">
                <a href="login2.php">Login/Register</a>
               
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
      }
      function ReqFunction() {
        document.getElementById("reqdropdown").classList.toggle("show");
      }

      window.onclick = function(event) {
        if (!event.target.matches('.reqbtn')) {
          var dropdowns = document.getElementsByClassName("req-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
      </script>
</body>
</html>