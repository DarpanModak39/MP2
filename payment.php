<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Insurance Management System</title>
    <style>
        
* {
  margin: 0;
  padding: 0;
}
  
body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: bold;
  background-color: bisque;
}
  
.container {
  height: 900px;
  width: 400px;
  background-image: linear-gradient(#1e6b30, #308d46);
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  position: absolute;
  border-bottom-left-radius: 180px;
  border-top-right-radius: 150px;
}
  
.main-content {
  height: 235px;
  background-color: #1b9236;
  border-bottom-left-radius: 90px;
  border-bottom-right-radius: 80px;
  border-top: #1e6b30;
}
  
.text {
  text-align: center;
  font-size: 300%;
  text-decoration: aliceblue;
  color: aliceblue;
}
  
.course {
  color: black;
  font-size: 25px;
  font-weight: bolder;
}
  
.centre-content {
  height: 180px;
  margin: -70px 30px 20px;
  color: aliceblue;
  text-align: center;
  font-size: 20px;
  border-radius: 25px;
  padding-top: 0.5px;
  background-image: linear-gradient(#1e6b30, #308d46);
}
  
.centre-content-h1 {
  padding-top: 30px;
  padding-bottom: 30px;
  font-weight: normal;
}
  
.price {
  font-size: 60px;
  margin-left: 5px;
  bottom: 15px;
  position: relative;
}
  
.pay-now-btn {
  cursor: pointer;
  color: #fff;
  height: 50px;
  width: 290px;
  border: none;
  margin: 5px 30px;
  background-color: rgb(71, 177, 61);
  position: relative;
}
  
.card-details {
  background: rgb(8, 49, 14);
  color: rgb(225, 223, 233);
  margin: 10px 30px;
  padding: 10px;
  /* border-bottom-left-radius: 80px; */
}
  
.card-details p {
  font-size: 15px;
}
  
.card-details label {
  font-size: 15px;
  line-height: 35px;
}
  
.submit-now-btn {
  cursor: pointer;
  color: #fff;
  height: 30px;
  width: 140px;
  border: none;
  margin: 5px 30px;
  background-color: rgb(71, 177, 61);
  
}
.cancel-now-btn{

    cursor: pointer;
  color: #fff;
  height: 30px;
  width: 140px;
  border: none;
  margin: 5px 0px;
  background-color: rgb(71, 177, 61);
}

        
    </style>
    </head>
    <body>
      <!--payment regarding insurance-->
      <div class="container">
        <div class="main-content">
          <p class="text">GeeksforGeeks</p>
        </div>
    
        <div class="centre-content">
          <h1 class="price">1000<span>/-</span></h1>
          <p class="course">
             Buy Vehicle Insurance!
          </p>
          <form action="pay.php" method="post">
            Category:<br>
             <select name="category" style="width:30%">
             <option value="Two Wheeler">Two Wheeler</option>
             <option value="Four Wheeler">Four Wheeler</option>
             <option value="Commercial Vehical">Commercial Vehical</option>
             <option value="Third Party Car">Third Party Car</option>
             </select><br><br>

             Mobile Number:<br>
             <h6>Please Enter Mobile Number Linked With Account</h6>
            <input name="mnumber" type="tel" style="width:35%" required/><br><br>

            Vehical Registration Number:<br>
          <input name="vnum" type="text" style="width:30%" required />
          <br><br>

            <input type="submit" name="payment" value="Proceed To Payment">


          </form>
        </div>
    
        

        
        
      </body>
      </html>