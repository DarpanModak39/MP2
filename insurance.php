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
    $idproof=mysqli_real_escape_string($con,"Images/useruploads/".uniqid('',true).$_FILES["idproof"]["name"]);
    $aproof=mysqli_real_escape_string($con,"Images/useruploads/".uniqid('',true).$_FILES["aproof"]["name"]);
    $dl=mysqli_real_escape_string($con,"Images/useruploads/".uniqid('',true).$_FILES["dl"]["name"]);
    $vnum=mysqli_real_escape_string($con,$_POST["vnum"]);
    $rc=mysqli_real_escape_string($con,"Images/useruploads/".uniqid('',true).$_FILES["rc"]["name"]);
    $category=mysqli_real_escape_string($con,$_POST["category"]);
    $pproof=mysqli_real_escape_string($con,"Images/useruploads/".uniqid('',true).$_FILES["pproof"]["name"]);

    $uid=$_SESSION["id"];
    
    if(copy($_FILES["idproof"]["tmp_name"],$idproof) && copy($_FILES["aproof"]["tmp_name"],$aproof) && copy($_FILES["dl"]["tmp_name"],$dl) && copy($_FILES["rc"]["tmp_name"],$rc) && copy($_FILES["pproof"]["tmp_name"],$pproof))
    {
        $sql="INSERT INTO insurance(uid,idproof,aproof,dl,vnum,rc,category,pproof,status) VALUES('$uid','$idproof','$aproof','$dl','$vnum','$rc','$category','$pproof','Request Submitted to Admin')";
        $result=mysqli_query($con,$sql);
        if($result)
        { 
            $_SESSION["message"]="Request for insurance is sent";
        
        }
        else{$_SESSION["message"]="Server error please try after some time $result";}
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
    <form action="" method="post" class="container" enctype="multipart/form-data">
        <h2>Get Insured</h2>

        ID Proof:<br>
        <input type="file" name="idproof" style="width:35%" required/>
        <br><br>

        Address Proof:<br>
        <input type="file" name="aproof" style="width:35%" required/>
        <br><br>

        Driving License:<br>
        <input type="file" name="dl" style="width:35%" required/>
        <br><br>

        Vehical Registration Number:<br>
        <input name="vnum" type="text" style="width:30%" required />
        <br><br> 

        RC:<br>
        <input type="file" name="rc" style="width:35%" required/>
        <br><br>

        Category:<br>
        <select name="category" style="width:30%">
        <option value="Two Wheeler">Two Wheeler</option>
        <option value="Four Wheeler">Four Wheeler</option>
        <option value="Commercial Vehical">Commercial Vehical</option>
        <option value="Third Party Car">Third Party Car</option>
        </select><br><br>

        Payment Proof:<br>
        <input type="file" name="pproof" style="width:35%" required/>
        <br><br>

        <input type="submit" name="submit" value="Submit">

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
