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
        
        * { box-sizing: border-box;
}
body{
    background-color: blanchedalmond;
}

/* Create two equal columns that floats next to each other */
.column-1 {
  float: left;
  width: 50%;
  padding: 20px;
  margin: 2px;
  height: 500px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
div.contactus{
    padding: 22px;
}
/*======media queries =====*/
@media only screen and (max-width: 600px){
    div.contactus{
        float:left;
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

      <!--Contact us -->
      <div class="contactus">
      <h2>Vehicle Insurance Management System</h2>
      <div class="row">
          <div class="column-1">
      <address>
          <h3>Address</h3>
        <p>Vehicle Insurance Management System <br>
        At Post narangal Tq degloor Dist Nanded(431723)</p>
        <h2>For feedback and queries:</h2>
        <p>xyz@gmail.com <br><b>Customer Service:9623202280</b></p>
        <h2>For Any Issue:</h2>
        <p>complaint@gmail.com</p>
    </address>
    </div>
    <div class="column-2">
    <!--Google Maps-->
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120611.08928003!2d77.2458144429545!3d19.14725098521304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d66bb9d31721%3A0x43892c180155daf1!2sNanded%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1622781804574!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
    </div>
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