<?php

include_once './dbcon.php';
session_start();
$_SESSION["message"]="";

if(isset($_POST["verifyotp"]))
{
    $mobileopt=mysqli_real_escape_string($con,$_POST["mobileotp"]);
    $sentotp=$_SESSION["myotp"];
    if(!isset($_SESSION['myotp']))
    {
        $_SESSION["message"]="Please send OTP for verification";
    }
    elseif($mobileopt==$sentotp)
    {
        header("location:./signup2.php");
    }
    else
    {
        $_SESSION["message"]="Wrong OTP entered";
    }
}
elseif(isset($_POST["sendotp"]))
{
    $number=$_SESSION["mnumber"]=mysqli_real_escape_string($con,$_POST["mnumber"]);
    $sql="SELECT *FROM user WHERE mnumber='$number' ";
    $result=mysqli_query($con,$sql);

    if($result)
    {
        $use =mysqli_fetch_assoc($result);
        if($use["mnumber"] ===$number)
        {
            $_SESSION["message"]="Mobile Number has linked to another account";
        }
    }

    else
    {  
        $_SESSION["myotp"]=$otp=mt_rand(10000,99999);
        
        $field = array(
            "sender_id" => "FSTSMS",
            "language" => "english",
            "route" => "qt",
            "numbers" => "$number",
            "message" => "40895",
            "variables" => "{#AA#}",
            "variables_values" => "$otp"
        );
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($field),
          CURLOPT_HTTPHEADER => array(
            "authorization: yi761af2YrtmpDFv9HIoSPXxk4NzEljOhZC8eTcgV5wbGWs3JQLRJSF0OQTepxG7WNuahnoZkzl14yEd",
            "cache-control: no-cache",
            "accept: */*",
            "content-type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        $_SESSION['message']="Please check your mobile for OTP";
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
        <h2>OTP Verification</h2>

        Mobile Number:<br>
        <input name="mnumber" type="tel" style="width:35%" required/><br><br>
        <input type="submit" name="sendotp" value="Send OTP">
    </form><br>

    <form action="" method="post" class="container">
        OTP:<br>
        <input name="mobileotp" type="tel" style="width:35%" required/><br><br>
        <input type="submit" name="verifyotp" value="Verify OTP">
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