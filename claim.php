<?php
    session_start();
    include_once './dbcon.php';
    if($_SESSION["type"]!=="user")
    {
        header("location:./userlogin.php");
    }
    $_SESSION["message"]="";

if(isset($_POST["submit"]))
{
    $cvideo=mysqli_real_escape_string($con,"Images/useruploads/".uniqid('',true).$_FILES["cvideo"]["name"]);
    $fir=mysqli_real_escape_string($con,"Images/useruploads/".uniqid('',true).$_FILES["fir"]["name"]);
    $desc=mysqli_real_escape_string($con,$_POST["desc"]);
    
    $uid=$_SESSION["id"];
    
    if(copy($_FILES["cvideo"]["tmp_name"],$cvideo) && copy($_FILES["fir"]["tmp_name"],$fir) )
    {
        $sql="INSERT INTO claim(uid,cvideo,fir,description) VALUES('$uid','$cvideo','$fir','$desc')";
        $result=mysqli_query($con,$sql);
        if($result)
        { 
            $_SESSION["message"]="Request for Claim is sent";
        
        }
        else{$_SESSION["message"]="Server error please try after some time ";}
    }
    else
    {
        $_SESSION['message']='File upload failed';
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Insurance Management System</title>
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="./css/style.css">
    
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



    <div class="signup">
    <div class="inf"><?=$_SESSION["message"]?></div><br>
    <form action="" method="post"  id="myform" class="container" enctype="multipart/form-data">
        <h2>Claim</h2>

        Video:<br>
        <input type="file" name="cvideo" accept="video/*" capture style="width:35%" required  />
        <br><br>

        FIR:<br>
        <input type="file" name="fir" style="width:35%" required/>
        <br><br>

        Description:<br>
        <input name="desc" type="text" style="width:30%" />
        <br><br>

        <input type="submit" name="submit" value="Submit">
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
