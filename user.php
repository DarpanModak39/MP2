<?php
    include_once './dbcon.php';
    session_start();
    if($_SESSION["type"]!=="user")
    {
        header("location:./userlogin.php");
    }

    $uid=$_SESSION["id"];

    $sql="SELECT * FROM insurance WHERE uid='$uid'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_row($result);

    $sqli="SELECT * FROM claim WHERE uid='$uid'";
    $resulti=mysqli_query($con,$sqli);
    $rowi=mysqli_fetch_row($resulti);

    $sqlr="SELECT * FROM refund WHERE uid='$uid'";
    $resultr=mysqli_query($con,$sqlr);
    $rowr=mysqli_fetch_row($resultr);

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
    
    <?php
            echo"
            <div class='signup'>
            <div class='column'>
            <p><b>Insurance Policy ID :$row[0]</b><hr>
            <b>Category :$row[7]</b><hr>
            <b>Issue Date :$row[10]</b><hr>
            <b>Status :$row[9]</b><hr>
            <b>Claim Request ID :$rowi[0]</b><hr>
            <b>Claim Status :$rowi[5]</b>";
            if($rowi[5]==="Claim Accepted")
            {
                echo"    
                    <button><a href='refunds.php' style='text-decoration:none;'>Initiate Refund</a></button></p>
                ";
            }
            echo"
            <b>Refund Request ID :$rowr[0]</b><hr>
            <b> Refund Status :$rowr[5]</b>";
            if($rowr[5]==="Refund Done")
            {
                echo"    
                    <form action='image.php' method='post'> 
                        <input type='hidden' name='image' value='$row[4]'>
                        <input type='submit' value='View Image' name='viewimage'>
                    </form>
                ";
            }
            echo"
            </p></div>";

    ?>
    
    
    </div>
    <!--footer section-->
    <div class="footer">
        <p><a href="contact_us.php">Contact US</a>|
        <a href="Privacy_policy.php">Privacy Policy</a></p>

  <p>&copy;2021 VEHICLE INSURANCE MANAGEMENT SYSTEM <br>All rights reserved.</p>
  </div>
    
</body>
</html>
