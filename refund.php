<?php
    session_start();
    include_once './dbcon.php';
    include('smtp/PHPMailerAutoLoad.php');
    if($_SESSION["type"]!=="admin")
    {
        header("location:./admin.php");
    }

    
    if(isset($_POST["save"]))
    {
        $uid=mysqli_real_escape_string($con,$_POST["queryid"]);
        $userid=mysqli_real_escape_string($con,$_POST["userid"]);
        $pproof=mysqli_real_escape_string($con,"Images/useruploads/".uniqid('',true).$_FILES["pproof"]["name"]);

        if(copy($_FILES["pproof"]["tmp_name"],$pproof) )
        {
        $sql="UPDATE refund SET pproof='$pproof',statusr='Refund Done' WHERE id='$uid'";
        $result=mysqli_query($con,$sql);

        if($result)
        {
            $sqlu="SELECT email,name from user where id='$userid'";
            $resultu=mysqli_query($con,$sqlu);
            $rowu=mysqli_fetch_row($resultu);
            $mail = new PHPMailer(true);

    $msg="
    Dear $rowu[1],<br>
    We have received your email acknowledging receipt of the work done and noticing us to do the refund for 
    the claim against the insurance.We have completed the paperwork and had done the refund successfully to the UPI provided by you.
    The details of the transaction is attached with this email.
    Thank you for your patience and understanding and for providing us with the opportunity to be of service to you.<br>
    Sincerely,<br>
    Team VIMS.";

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'darpan.modak@walchandsangli.ac.in';                     //SMTP username
    $mail->Password   = 'qhWKcdLN';                               //SMTP password
    $mail->SMTPSecure = 'tsl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->addAddress($rowu[0], $rowu[1]);     //Add a recipient

    //Attachments
    $mail->addAttachment($pproof);         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Refund';
    $mail->Body    = $msg;

    $mail->send();
    $_SESSION["message"]="Email for refund done sent successfully";
} catch (Exception $e) {
    $_SESSION["message"]="Email for refund done failed to send";
}
        }
        }

    }
    $sql="SELECT * FROM refund";
    $result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Insurance Management System</title>
    <link rel="stylesheet" href="./css/style.css">

    <style>
        td{
            padding:5px 20px;
        }
    
    </style>
    
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
            <a href="request.php">View Request</a>
            <a href="view_claim.php">View Claim</a>
            <a href="refund.php">Refunds</a>
            <a href="generatereport.php">Generate Report</a>
            <a href="./logout.php">Logout</a>
            <!--search container-->
            <div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search icon"></i></button>
                </form>
              </div>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <table>
    <tr>
    <td> Request ID </td>
    <td> User ID </td>
    <td> Receipt of Work</td>
    <td> UPI</td>
    <td>Status</td>
    </tr>
    <tr>
        <?php
            while($row=mysqli_fetch_row($result))
            {
                echo"
                    <tr>
                    <td> $row[0]</td>
                    <td> $row[1]</td>";
                echo"
                    <td>
                        <form action='image.php' method='post'> 
                            <input type='hidden' name='image' value='$row[2]'>
                            <input type='submit' value='View Image' name='viewimage'>
                        </form>
                    </td>
                    <td> $row[3]</td>";
                    
                    if($row[5]==="Request Submitted to Admin")
                    {
                        echo"    
                            <td>$row[5]
                            <form action='refund.php' method='post' enctype='multipart/form-data'>
                                Payment Proof:<br>
                                <input type='file' name='pproof' style='width:35%' required/>
                                <br><br>
                                <input type='hidden' name='queryid' value=$row[0]>
                                <input type='hidden' name='userid' value=$row[1]>
                                <input type='submit' value='Send Mail' name='save'>
                            </form>
                            </td>";
                    }
                    elseif($row[5]==="Refund Done")
                    {
                        echo"<td>$row[5]
                        
                        </td></tr>";    
                    }
            }

        ?>
    </tr>
</table>


        </div>

    </div>
    
    <!--footer section-->
    <div class="footer">
        <p><a href="contact_us.php">Contact US</a>|
        <a href="Privacy_policy.php">Privacy Policy</a></p>

  <p>&copy;2021 VEHICLE INSURANCE MANAGEMENT SYSTEM <br>All rights reserved.</p>
  </div>

</body>
</html>