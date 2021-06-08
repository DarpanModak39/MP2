<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Insurance Management System</title>
    <style>
        div.privacy{
            background-color: cyan;
            padding: 32px;
        }
        h1.p1{
            text-align: center;
            padding: 1px;
            margin: 2px;
        }
        h2.p2{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        @media only screen and (max-width: 600px){
            div.privacy{
                float: right;
            }
        }
    </style>
    <body>

  
        <!--header section-->
        <div class="header">
          <h1>Vehicle Insurance Management System</h1>
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
      <!--Privacy Policy about Vims-->
      <div class="privacy">
          <h1 class="p1">Privacy Policy <br>........</h1>
          <h2 class="p2">Vehicle Insurance Management System Privacy Statement:</h2>
          <p class="p3">Vehicle Insurance Management Solutions values its relationship with you and is committed to protecting your privacy. This Privacy Statement (or “Statement”) describes our privacy practices as they relate to the information we collect from and about you on our website (vehicle Insurance management system) and mobile application (collectively, our “Website”) and from other sources as described below, such as via email or our customer call center. This Policy applies to our prospective, current and former customers, as well as other visitors to our Website.
             We encourage you to read our Privacy Statement carefully. Should you have any questions or concerns, please contact us at privacypolicy@gmail.com  or via the Contact Information listed below.
             When you choose to interact with our Website in any way, you agree with the privacy practices set forth in this Statement. As such, please do not use our Website unless you have read and agree with the terms below. (This Statement does not apply to data we collect from and about our employees.)
            We may update this Statement from time to time by posting an updated Statement on our Website and updating the “effective date” at the top of this page. We encourage you to stay informed of our privacy practices by visiting this area of our Website frequently. Your continued use of our Website after we make any changes means that you consent to those changes.
            Our Website may include links to other websites that we do not maintain and whose privacy practices may differ from ours. This Privacy Statement applies only to VIMS’ processing activities and does not apply to the processing activities associated with any other websites. Once you click on a link to another website, you are no longer using our Website and this Statement does not apply to how the operator of the other website may collect, use and disclose your information.</p>
         <h2 class="p2">Security:</h2>
         <p class="p3">We take reasonable steps to secure your information from unauthorized use, disclosure, alteration and destruction. This includes restricting 
             access to information to our employees and others who we believe must use it to deliver our products or services to you. 
             Since email cannot be secured completely against unauthorized interception, we ask that you please not use email to send us any nonpublic personal or confidential information.
        </p>
        <h2 class="p2">Contact Information:</h2>
        <p class="p3">If you have any questions, concerns or complaints about the manner in which we collect, store, use or disclose your information, please contact us at privacypolicy@gmail.com or by mail at:</p>
      </div>

      
    <!--footer section-->
    <div class="footer">
        <p><a href="contact_us.php">Contact US</a>|
        <a href="Privacy_policy.php">Privacy Policy</a></p>

  <p>&copy;2021 VEHICLE INSURANCE MANAGEMENT SYSTEM <br>All rights reserved.</p>
  </div>
        
      </body>
      </html>