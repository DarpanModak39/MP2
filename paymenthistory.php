<?php
    session_start();
    include_once './dbcon.php';
    
    $uid=$_SESSION["id"];
    $sql="SELECT mobile from user where id='$uid'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_row($result);
                    
    $sqlp="SELECT * FROM payment where mnumber='$row[0]'";
    $resultp=mysqli_query($con,$sqlp);
    


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

    <div class="row">
        <div class="column">
            <table>
    <tr>
    <td> ID </td>
    <td> Razorpay Order_ID </td>
    <td> Razorpay Payment ID</td>
    <td> Category</td>
    <td> Vehical Registration Number </td>
    </tr>
    <tr>
        <?php
                while($rowp=mysqli_fetch_row($resultp))
                    {
                        echo"
                        <tr>
                            <td> $rowp[0] </td>
                            <td> $rowp[1] </td>
                            <td> $rowp[2]</td>
                            <td> $rowp[5]</td>
                            <td> $rowp[6]</td>
                            </tr>
                        
                        
                        
                        ";



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