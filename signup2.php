<?php

include_once './dbcon.php';
session_start();
$_SESSION["message"]="";

if(isset($_POST["submit"]))
{
    $name=mysqli_real_escape_string($con,$_POST["fname"]);
    $dob=mysqli_real_escape_string($con,$_POST["dob"]);
    $email=mysqli_real_escape_string($con,$_POST["email"]);
    $number=$_SESSION["mnumber"];
    $gender=mysqli_real_escape_string($con,$_POST["gender"]);
    $lidate=mysqli_real_escape_string($con,$_POST["lidate"]);
    $lstate=mysqli_real_escape_string($con,$_POST["lstate"]);
    $lnum=mysqli_real_escape_string($con,$_POST["lnum"]);
    $address=$_SESSION["address"]=mysqli_real_escape_string($con,$_POST["address"]);
    $state=mysqli_real_escape_string($con,$_POST["state"]);
    $pincode=mysqli_real_escape_string($con,$_POST["pin"]);
    $pwd=md5($_POST["pwd"]);
    $pwdRepeat=md5($_POST["pwdrepeat"]);

    if($pwd !==$pwdRepeat)
    {
        $_SESSION["message"]="Password do not match";
    }
    else
    {
      $sql="INSERT INTO user (name,dob,email,mobile,gender,lidate,lstate,lnum,address,state,pincode,pwd) VALUES ('$name','$dob','$email','$number','$gender','$lidate','$lstate','$lnum','$address','$state','$pincode','$pwd')";
      $result=mysqli_query($con,$sql);
      if($result)
        {
            header("location:./userlogin.php");
        }
        else{$_SESSION["msg"]="Server Error Please try later";}
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
        <h2>Signup:</h2>
        Full Name:<br>
        <input name="fname" type="text" style="width:30%" required />
           <br><br> 
        Date of Birth:<br>
        <input name="dob" type="date" style="width:35%" required/>
        <br><br>

        Email:<br>
        <input name="email" type="email" style="width:35%" required/>
        <br><br>

        Gender:<br>
        <select name="gender" style="width:30%">
        <option value="M">Male</option>
        <option value="F">Female</option>
        </select><br><br>


        Licence Issue Date:<br>
        <input name="lidate" type="date" style="width:35%" required/>
        <br><br>
        
        
        Licence Issue State:<br>
        <input name="lstate" type="text" style="width:35%" required/>
        <br><br>

        Licence Number:<br>
        <input name="lnum" type="text" style="width:35%" required/>
        <br><br>

        Address:<br>
        <input name="address" type="text" style="width:35%" required/>
        <br><br>

        State:<br>
        <input name="state" type="text" style="width:35%" required/>
        <br><br>

        Pincode:<br>
        <input name="pin" type="text" style="width:35%" required/>
        <br><br>

        Password:<br>
        <input name="pwd" type="password" style="width:35%" required/>
        <br><br>

        Password Repeat:<br>
        <input name="pwdrepeat" type="password" style="width:35%" required/>
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