<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Insurance Management System</title>
    <style>
        .two_wheeler{
           background-color: navajowhite;
           margin: 2px;
           padding: 60px;

        }
        
        table, th, td {
            border: 1px solid orangered;
            border-collapse: collapse;
            padding: 4px;
            margin: 20px;
        }
        th{
            background-color: chartreuse;
            color: black;
            text-align: center;
            padding: 14px;
            margin: 4px;
        }
        td{
            text-decoration: none;
            font-size: 20px;
            padding: 4px;
        }
        .buy{
            text-align: center;
            
        }
        @media only screen and (max-width: 600px)
        {
            .two_wheeler{
                float: right;
            }
            .footer{
                display: none;
            }

        }
    </style>
    <body>
  
        <!--header section-->
        <div class="header">
          <h1>Vehicle Insurance Management System</h1>
      </div>
    
      <!--top navigation section-->

      <!--Two Wheeler information regarding -->
      <div class="two_wheeler">
      <div>
        <h2 style="text-decoration-line: underline; margin: 20px;">ALL TWO WHEELER INSURANCE DETAILS</h2>
          <table>
              <tr>
                  <th>Category ID</th>
                  <td>1</td>
              </tr>
              <tr>
                <th>Category</th>
                <td>Two Wheeler Insurance</td>
            </tr>
            <tr>
                <th>Category Description</th>
                <td>Two wheeler insurance refers to an insurance policy, taken to cover against any damages that may occur to your motorcycle
                    / two wheeler due to an accident, theft, or natural disaster. two insurance provides protection against third party liabilities
                    arising from injuries to one or more individuals. Bike Insurance is an ideal solution to meet financial costs and losses that may arise due to the damages <br> caused to the motorcycle.
                    The bike insurance cover provides protection to all types of two wheelers like motorcycle,scooty, scooter etc.</td>
            </tr>
        </table>
          </div><hr>

      <!--another table-->
      <div class="two">
          <h2 style="text-decoration-line: underline; margin: 20px;">ALL TWO WHEELER INSURANCE POLICIES</h2>
        <table class="col-1">
            <tr>
                <th>Policy ID</th>
                <td>2</td>
            </tr>
            <tr>
              <th>Policy Name</th>
              <td>Star Comprehensive</td>
          </tr>
          <tr>
              <th>Policy Cost</th>
              <td>1000</td>
          </tr>
          <tr>
              <th>Duration</th>
              <td>1 Years</td>
          </tr>
        </table>
        
    </div>
    <div class="buy">
        <button style="padding: 10px;"><a href="payment.php" style="text-decoration:none">Click to Buy Insurance</a></button>
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