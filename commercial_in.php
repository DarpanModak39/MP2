<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Insurance Management System</title>
    <style>
        .commercial_insurance{
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
            .commercial_insurance{
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
      <div class="commercial_insurance">
      <div>

        <h2 style="text-decoration-line: underline; margin: 20px;">ALL COMMERCIAL INSURANCE DETAILS</h2>
          <table>
              <tr>
                  <th>Category ID</th>
                  <td>5</td>
              </tr>
              <tr>
                <th>Category</th>
                <td>Commercial Insurance</td>
            </tr>
            <tr>
                <th>Category Description</th>
                <td>Commercial insurance is a type of business insurance that offers solutions 
                     for industrial sectors <br> including but not limited to construction, manufacturing, telecom, textiles, logistics etc. <br>
                     These solutions aim to offer a safety net for business operations and assets when the need arises.</td>
            </tr>
        </table>
          </div><hr>

      <!--another table-->
      <div class="two">
          <h2 style="text-decoration-line: underline; margin: 20px;">ALL COMMERCIAL INSURANCE POLICIES</h2>
        <table class="col-1">
            <tr>
                <th>Policy ID</th>
                <td>6</td>
            </tr>
            <tr>
              <th>Policy Name</th>
              <td>Health Comprensive</td>
          </tr>
          <tr>
              <th>Policy Cost</th>
              <td>1000</td>
          </tr>
          <tr>
              <th>Duration</th>
              <td>3 Years</td>
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