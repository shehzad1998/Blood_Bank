<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request For Donation</title>
    <link rel="stylesheet" href="css/request.css">
<style>
    .bg{
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(img/bg.jpg);
    }
 
 </style>
</head>
<body>
<?php require('header1.php');?>
    <div class="bg">
        <div class="form-box">
            <div class="button">
                <div id="btn"></div>
                <button type="button" class="toggle-btn">Request To Donate</button>
            </div> 
            
            <div>
                <form action="Request_for_donate.php" method="post" id="request" class="input-grp" >
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
                            <td>Date For Donation</td>
                            <td class="more-padding-on-right"></td>
                            <td>
                                <input type="date" name="date_for_donate" class="input-field">
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
                                <option style="display: none;">Please select</option>    
                                <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
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
                                <textarea name="description" class="text-field" cols="21" rows="3"></textarea>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" class="submit-btn">Request</button>
                </form>
            </div>           
        </div>
    </div>
    <?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];    
    $date_for_donate = $_POST['date_for_donate'];    
    $b_grp = $_POST['b_grp'];
    $description = $_POST['description'];

 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "bloodbank";

 $conn = mysqli_connect($servername, $username, $password, $database);
 if (!$conn){
    die("sorry faild to connect! ".mysqli_connect_error());
 }
 else{
   $sql =  "INSERT INTO `req_for_donation` (`f_name`, `l_name`, `gender`, `age`, `mobile`, `email`, `date_for_donate`, `b_grp`, `description`) 
   VALUES ('$f_name', '$l_name', '$gender', '$age', '$mobile', '$email', '$date_for_donate', '$b_grp', '$description')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Record Save');</script>";
    }
    else{
        echo "<script>alert('Saving Record Failed');</script>";
    }
 }
}

?>
 

</body>
</html>