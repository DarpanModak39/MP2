<?php
    session_start();
    include_once './dbcon.php';
    if($_SESSION["type"]!=="user")
    {
        header("location:./userlogin.php");
    }
    $_SESSION["message"]="";
    $type=$_SESSION["type"];
    $id=$_SESSION["id"];

    $sql="SELECT *FROM $type WHERE id ='$id'";
    $result=mysqli_query($con,$sql);
    $user =mysqli_fetch_assoc($result);

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
            <a href="paymenthistory.php">Payment History</a>
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
        <h2>Profile Details</h2>
        Full Name:<br>
        <input name="fname" type="text" style="width:30%" required value="<?php print($user['name'])?>" />
           <br><br> 
        Date of Birth:<br>
        <input name="dob" type="date" style="width:35%" required   value="<?php print($user['dob'])?>"/>
        <br><br>

        Email:<br>
        <input name="email" type="email" style="width:35%" required  value="<?php print($user['email'])?>"/>
        <br><br>

        Gender:<br>
        <select name="gender" style="width:30%" default="<?php $user['gender']?>">
        <option value="M">Male</option>
        <option value="F">Female</option>
        </select><br><br>


        Licence Issue Date:<br>
        <input name="lidate" type="date" style="width:35%" required  value="<?php print($user['lidate'])?>"/>
        <br><br>
        
        
        Licence Issue State:<br>
        <input name="lstate" type="text" style="width:35%" required  value="<?php print($user['lstate'])?>"/>
        <br><br>

        Licence Number:<br>
        <input name="lnum" type="text" style="width:35%" required   value="<?php print($user['lnum'])?>"/>
        <br><br>

        Address:<br>
        <input name="address" type="text" style="width:35%" required value="<?php print($user['address'])?>"/>
        <br><br>

        State:<br>
        <input name="state" type="text" style="width:35%" required value="<?php print($user['state'])?>"/>
        <br><br>

        Pincode:<br>
        <input name="pin" type="text" style="width:35%" required  value="<?php print($user['pincode'])?>"/>
        <br><br>

        <button><a href="./change_pass.php" style="text-decoration:none;">Change Password</a></button>

    
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