<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Insurance Management System</title>
    <style>
        .third_party{
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
            .third_party{
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
      <div class="third_party">
      <div>
        <h2 style="text-decoration-line: underline; margin: 20px;">ALL THIRD PARTY INSURANCE DETAILS</h2>
          <table>
              <tr>
                  <th>Category ID</th>
                  <td>7</td>
              </tr>
              <tr>
                <th>Category</th>
                <td>Third Party Insurance</td>
            </tr>
            <tr>
                <th>Category Description</th>
                <td>Third-party insurance offers protection against damages to the third-party by the insured vehicle. <br>
                     It covers physical injuries, damages to the vehicle, damage to the property, and death. Exclusions. <br>
                      Third-party insurance does not provide any compensation, if: The accident was caused due to drunken driving.</td>
            </tr>
        </table>
          </div><hr>

      <!--another table-->
      <div class="two">
          <h2 style="text-decoration-line: underline; margin: 20px;">ALL THIRD PARTY INSURANCE POLICIES</h2>
        <table class="col-1">
            <tr>
                <th>Policy ID</th>
                <td>8</td>
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
              <td>4 Years</td>
          </tr>
        </table>
    </div>
    <div class="buy">
        <p>To buy Insurance Please Pay via UPI to 7410258963@upi</p>
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