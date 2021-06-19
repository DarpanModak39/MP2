<?php
    session_start();
    include('smtp/PHPMailerAutoLoad.php');
    include_once './dbcon.php';
    if($_SESSION["type"]!=="user")
    {
        header("location:./userlogin.php");
    }
    $_SESSION["message"]="";

if(isset($_POST["submit"]))
{
    $rof=mysqli_real_escape_string($con,"Images/useruploads/".uniqid('',true).$_FILES["rof"]["name"]);
    $upi=mysqli_real_escape_string($con,$_POST["upi"]);
    $pwd=mysqli_real_escape_string($con,$_POST["pwd"]);
    
    $uid=$_SESSION["id"];

    $sqlp="SELECT name,email FROM user WHERE id='$uid'";
    $resultp=mysqli_query($con,$sqlp);
    $rowp=mysqli_fetch_row($resultp);
    
    if(copy($_FILES["rof"]["tmp_name"],$rof) )
    {
        $sql="INSERT INTO refund(uid,rof,upi,statusr) VALUES('$uid','$rof','$upi','Request Submitted to Admin')";
        $result=mysqli_query($con,$sql);
        if($result)
        { 
            
            $mail = new PHPMailer(true);

    $msg="Respected Sir,<br>

This letter serves as a formal request to your company for a full refund for the claim that I requested.
I have been a loyal and sincere client of your insurance company. I always paid the money on time.
I had already raised a request on claim and had been successfully accepted by the company.So I request you to
refund the money on my UPI $upi as soon as possible.I had also attached the copy of the receipts.
I hope that you will have no problem refunding the money. I am looking forward to hearing from you.<br><br>

Yours faithfully,<br>
$rowp[0].";

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $rowp[1];                     //SMTP username
    $mail->Password   = $pwd;                               //SMTP password
    $mail->SMTPSecure = 'tsl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->addAddress('darpan.modak@walchandsangli.ac.in', 'Admin');     //Add a recipient

    //Attachments
    $mail->addAttachment($rof);         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Refund';
    $mail->Body    = $msg;

    $mail->send();
    $_SESSION["message"]="Email for refund sent successfully";
} catch (Exception $e) {
    $_SESSION["message"]="Email for refund failed to send";
}

        
        }
        else{$_SESSION["message"]="Server error please try after some time";}
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



    <div class="signup">
    <div class="inf"><?=$_SESSION["message"]?></div><br>
    <form action="" method="post"  id="myform" class="container" enctype="multipart/form-data">
        <h2>Refund</h2>

        Receipt of Work:<br>
        <input type="file" name="rof" style="width:35%" required/>
        <br><br>

        UPI:<br>
        <input name="upi" type="text" style="width:30%" required />
        <br><br>

        Password of Email:<br>
        <input name="pwd" type="password" style="width:30%" required />
        <br><br>

        <input type="submit" name="submit" value="Send Mail">
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
