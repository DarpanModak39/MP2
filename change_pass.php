<?php

include_once './dbcon.php';
session_start();
$_SESSION["message"]="";


if(isset($_POST["submit"]))
{
    
    $cpwd=md5($_POST["cpwd"]);
    $npwd=md5($_POST["npwd"]);
    $npwdrepeat=md5($_POST["npwdrepeat"]);
    $uid=$_SESSION["id"];
    
    $sql="SELECT *FROM user WHERE id ='$uid'";
    $result=mysqli_query($con,$sql);
    $use =mysqli_fetch_assoc($result);

    if($use)
    {
        if($use["pwd"] ===$cpwd )
        {
            if($npwd===$npwdrepeat)
            {
                $sql="UPDATE user SET pwd='$npwd' WHERE id='$uid' ";
                $result=mysqli_query($con,$sql);
                if($result)
                {
                   $_SESSION["message"]="Password Change Successfully";
                }
                else{$_SESSION["msg"]="Server Error Please try later";}
                $_SESSION["message"]="Password Change Successfully";
            }
            else{
                $_SESSION["message"]="New Password do not match";
            }
            
        }
        else{
            $_SESSION["message"]="Wrong Current Password";
        }
    }

}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Insurance Management System</title>
</head>
<body>
  
    <!--header section-->
    <div class="header">
      <h1>Vehicle Insurance Mangement System</h1>
  </div>

    <!--top navigation section-->
    <div class="nav">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle">
        <div class="menu">
            <a href="insurance.php">Get Insured</a>
            <a href="claim.php">Claim</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
            <a href="all_insurance.php">All Insurance</a>
            <!--search container-->
            <div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search icon"></i></button>
                </form>
              </div>
        </div>
    </div>

 <!--user signup page-->
        
    <div class="signup">
    <div class="inf"><?= $_SESSION['message']?></div><br>
    <form action="" method="post" class="container">
        <h2>Change Password</h2>
        
        Current Password:<br>
        <input name="cpwd" type="password" style="width:35%" required/>
        <br><br>

        New Password:<br>
        <input name="npwd" type="password" style="width:35%" required/>
        <br><br>

        New Password Repeat:<br>
        <input name="npwdrepeat" type="password" style="width:35%" required/>
        <br><br>

        <input type="submit" name="submit" value="Save">

        <input type="reset">

    
    </form>


    </div>



    <!--footer section-->
    <div class="footer">
        <p><a href="contact_us.php">Contact US</a>|
        <a href="Privacy_policy.php">Privacy Policy</a></p>

  <p>&copy;2021 VEHICLE INSURANCE MANAGEMENT SYSTEM <br>All rights reserved.</p>
  </div>
</body>
</html>