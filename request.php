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
        $sql="UPDATE insurance SET status='Insurance Granted',date=NOW() WHERE id='$uid' ";
            $result=mysqli_query($con,$sql);
            if(!$result){$_SESSION["msg"]="Server Error Please try later";}
    }
    elseif(isset($_POST["ri"])){
        $uid=mysqli_real_escape_string($con,$_POST["queryid"]);
        $sql="UPDATE insurance SET status='Insurance Rejected',date=NOW() WHERE id='$uid' ";
            $result=mysqli_query($con,$sql);
            if(!$result){$_SESSION["msg"]="Server Error Please try later";}
    }

    $sql="SELECT * FROM insurance";
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
    <td> ID Proof</td>
    <td> Address Proof</td>
    <td> Driving License </td>
    <td> Vehical Registration Number </td>
    <td> RC</td>
    <td> Category</td>
    <td> Payment Status</td>
    <td> Status</td>
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
                    <td>
                        <form action='image.php' method='post'> 
                            <input type='hidden' name='image' value='$row[3]'>
                            <input type='submit' value='View Image' name='viewimage'>
                        </form>
                    </td>
                    <td>
                        <form action='image.php' method='post'> 
                            <input type='hidden' name='image' value='$row[4]'>
                            <input type='submit' value='View Image' name='viewimage'>
                        </form>
                    </td>";
                echo"
                    <td> $row[5]</td>";
                echo"                    
                <td>
                        <form action='image.php' method='post'> 
                            <input type='hidden' name='image' value='$row[6]'>
                            <input type='submit' value='View Image' name='viewimage'>
                        </form>
                    </td>";
                echo"
                    <td> $row[7]</td>";

                $sqlp="SELECT * FROM payment  WHERE vnum='$row[5]' AND category='$row[7]'";
                $resultp=mysqli_query($con,$sqlp);
                $rowp=mysqli_fetch_row($resultp);
                if($rowp)
                {
                    echo"
                    <td> $rowp[3]</td>";
                }
                else{
                    echo"<td>Payment Not Done</td>";
                }
                                

                    
                if($row[8]==='Request Submitted to Admin')
                    {
                        echo"    
                            <td>$row[8]
                            <form action='request.php' method='post'> 
                                <input type='hidden' name='queryid' value=$row[0]>
                                <input type='submit' value='Grant Insurance' name='gi'>
                            </form>
                            <form action='request.php' method='post'>
                                <input type='hidden' name='queryid' value=$row[0]>
                                <input type='submit' name='ri' value='Reject Insurance'>
                            </form>
                            </td></tr>";
                    }
                    else
                    {
                        echo"<td>$row[8]</td></tr>";    
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