<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Insurance Management System</title>
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
            <a href="index.php">Home</a>
            <a href="signup.php">User Signup</a>
            <a href="userlogin.php">User Login</a>
            <a href="admin.php">Admin Login</a>
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
    <!--insurance image-->
    <div class="imagepic">
        <img src="./Images/car accident.PNG" alt=" car accident" width="100%">
    </div>

    <!--main content section-->
    <div class="row">
        <div class="column">
            <p><b>About:</b><i>Vehicle Insurance Management System</i></p><hr>
            <p>Insurance management is the operation, control, and oversight of real estate management a needs to be carried for, monitored and accountability given for its useful life
              and condition This is much akin to the role of management in any business. 
              Insurance management is also the management of personal property, equipment, tooling, and physical capital assets that are acquired and used to build, repair, and maintain 
              Insurance acquisition, control, accountability, responsibility, maintenance,utilization, and disposition.
              For example, an owner of a single family may engage the services of a property management company. The company will then advertise the rental property, handle tenant inquiries, screen applicants,
              select suitable candidates, draw up a lease agreement conduct a move in inspection, move the tenant(s) into the property and collect rental income.
              The company will then coordinate any maintenance issues, supply the owner(s) with financial statements and any relevant information regarding the property etc.</p>


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