<?php
    session_start();
    include_once './dbcon.php';
    if($_SESSION["type"]!=="admin")
    {
        header("location:./admin.php");
    }

    
    if(isset($_POST["gi"]))
    {
        $uid=mysqli_real_escape_string($con,$_POST["queryid"]);
        $sql="UPDATE claim SET status='Claim Accepted' WHERE id='$uid' ";
            $result=mysqli_query($con,$sql);
            if(!$result){$_SESSION["msg"]="Server Error Please try later";}
    }
    elseif(isset($_POST["ri"])){
        $uid=mysqli_real_escape_string($con,$_POST["queryid"]);
        $sql="UPDATE claim SET status='Claim Rejected' WHERE id='$uid' ";
            $result=mysqli_query($con,$sql);
            if(!$result){$_SESSION["msg"]="Server Error Please try later";}
    }

    $sql="SELECT * FROM claim";
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
            padding:5px 10px;
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
    <td> User Video</td>
    <td> FIR</td>
    <td> Description</td>
    <td>Policy Insurance Date</td>
    <td>Vehicle Registration Number</td>
    <td>Category</td>
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
                    <form action='video.php' method='post'> 
                            <input type='hidden' name='video' value='$row[2]'>
                            <input type='submit' value='View Video' name='viewvideo'>
                        </form>
                    </td>
                    <td>
                        <form action='image.php' method='post'> 
                            <input type='hidden' name='image' value='$row[3]'>
                            <input type='submit' value='View Image' name='viewimage'>
                        </form>
                    </td>
                    <td> $row[4]</td>";

                    $sqli="SELECT * FROM insurance WHERE uid='$row[1]' AND status='Insurance Granted'";
                    $resulti=mysqli_query($con,$sqli);
                    while($rowi=mysqli_fetch_row($resulti))
                    {
                        echo"
                            <td> $rowi[9]</td>
                            <td> $rowi[5]</td>
                            <td> $rowi[7]</td>";
                        
                    }
                    
                    if($row[5]==="Request Submitted to Admin")
                    {
                        echo"    
                            <td>$row[5]
                            <form action='view_claim.php' method='post'> 
                                <input type='hidden' name='queryid' value=$row[0]>
                                <input type='submit' value='Accept Claim' name='gi'>
                            </form>
                            <form action='view_claim.php' method='post'>
                                <input type='hidden' name='queryid' value=$row[0]>
                                <input type='submit' name='ri' value='Reject Claim'>
                            </form>
                            </td></tr>";
                    }
                    elseif($row[5]==="Claim Accepted")
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

    <button><a href="refund.php"></a></button>
</body>
</html>