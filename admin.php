<?php

include_once './dbcon.php';
session_start();
$_SESSION["message"]="";


if(isset($_POST["login"]))
{
    
    $username=mysqli_real_escape_string($con,$_POST["uname"]);
    $pwd=mysqli_real_escape_string($con,$_POST["pwd"]);

    if($username=="Admin")
    {
        if($pwd=="admin" )
        {
            $_SESSION["type"]="admin";
            header("location:./admindash.php");
        }
        else
        {
            $_SESSION["message"]="Wrong Password";
        }
    }
    else
    {
        $_SESSION["message"]="Account does not exists";
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
          <a href="index.php">Home</a>
          <a href="signup.php">User Signup</a>
          <a href="userlogin.php">User Login</a>
          <a href="admin.php">Admin Login</a>
          <a href="all_insurance.php">All Insurance</a>
           <!--search container-->
           <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
      </div>
  </div>

 <!--user signup page-->
        
    <div class="signup">    
        <div class="inf"><?= $_SESSION['message']?></div><br>
    <form action="" method="post" class="container">
        <h2>Admin Login</h2>

        Username:<br>
        <input name="uname" type="text" style="width:35%" required/>
        <br><br>

        Password:<br>
        <input name="pwd" type="password" style="width:35%" required/><br><br>
        
        <input type="submit" name="login" value="Login">
    </form><br>
    </div>



    <!--footer section-->
    <div class="footer">
        <p><a href="contact_us.php">Contact US</a>|
        <a href="Privacy_policy.php">Privacy Policy</a></p>

  <p>&copy;2021 VEHICLE INSURANCE MANAGEMENT SYSTEM <br>All rights reserved.</p>
  </div>
  
</body>
</html>