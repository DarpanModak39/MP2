<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vehicle Insurance Management System</title>
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        background-color: blanchedalmond;
      }

      /* Create two equal columns that floats next to each other */
      .column {
        float: left;
        width: 25%;
        padding: 10px;
        height: 500px; /* Should be removed. Only for demonstration */
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      table,
      th,
      td {
        border: 2px solid black;
        border-collapse: collapse;
      }
      th,
      td {
        padding: 15px;
        text-align: center;
      }
      /*=====Media queries about all insurance=====*/
      @media only screen and (max-width: 600px) {
        div.insurance {
          float: left;
        }
        div.footer {
          display: none;
        }
        div.column {
          width: 70%;
          float: right;
        }
        h2.i1 {
          float: right;
        }
      }
    </style>
  </head>
  <body>
    <!--header section-->
    <div class="header">
      <h1>Vehicle Insurance Management System</h1>
    </div>

    <!--top navigation section-->

    <!--All insurance policy -->
    <div class="insurance">
      <h2 class="i1">All Insurance Category</h2>
      <hr class="h1" />
      <div class="row">
        <div class="column">
          <table>
            <tr>
              <th>Two Wheeler Insurance</th>
            </tr>
            <tr>
              <td>
                <a href="two_wheeler_in.php"
                  ><img
                    src="./Images/two wheeler insurance.png"
                    alt="Two Wheeler Insurance"
                    width="300"
                    height="300"
                /></a>
              </td>
            </tr>
          </table>
        </div>
        <div class="column">
          <table>
            <tr>
              <th>Four Wheeler Insurance</th>
            </tr>
            <tr>
              <td>
                <a href="four_wheeler_in.php"
                  ><img
                    src="./Images/four wheeler insurance.jpg"
                    alt="Four Wheeler Insurance"
                    width="300"
                    height="300"
                /></a>
              </td>
            </tr>
          </table>
        </div>
        <div class="column">
          <table>
            <tr>
              <th>Commercial Vehicle Insurance</th>
            </tr>
            <tr>
              <td>
                <a href="commercial_in.php"
                  ><img
                    src="./Images/commercial vehicle insurance.jpg"
                    alt="Commercial Vehicle Insurance"
                    width="300"
                    height="300"
                /></a>
              </td>
            </tr>
          </table>
        </div>
        <div class="column">
          <table>
            <tr>
              <th>Third Party Car Insurance</th>
            </tr>
            <tr>
              <td>
                <a href="third_party_in.php"
                  ><img
                    src="./Images/Third party car insurance.jpg"
                    alt="Third Party car Insurance"
                    width="300"
                    height="300"
                /></a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <!--footer section-->
    <div class="footer">
      <p>
        <a href="contact_us.php">Contact US</a>|
        <a href="Privacy_policy.php">Privacy Policy</a>
      </p>

      <p>
        &copy;2021 VEHICLE INSURANCE MANAGEMENT SYSTEM <br />All rights
        reserved.
      </p>
    </div>
  </body>
</html>
