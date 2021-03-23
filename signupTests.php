<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Coronavirus - Confirmation</title>
    <link rel="stylesheet" type="text/css" href="coronaStyle.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <h1>The Coronavirus</h1>
    </header>

    <nav>
        <ul style="">
          <li> <a class="active" href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li> <a href="symptoms.html"><i class="fa fa-heartbeat" aria-hidden="true"></i> Symptoms <span class="arrow">&#x25BC</span></a>
            <ul class="submenu">
              <li><a href="#">Cough</a></li>
              <li><a href="#">Fever</a></li>
              <li><a href="#">Chills</a></li>
              <li><a href="#">Sore Throat</a></li>
              <li><a href="#">Muscle Pain</a></li>
            </ul>
          </li>
          <li> <a href="highRisk.html"><i class="fa fa-users" aria-hidden="true"></i> High Risk</a></li>
          <li> <a href="treatments.html"><i class="fa fa-user-md" aria-hidden="true"></i> Treatments</a></li>
          <li><a href="testings.html"><i class="fa fa-medkit" aria-hidden="true"></i> Testing</a></li>
        </ul>
    </nav>

    <div class="mainDivHome">

      <div class="mainDivHomeSub2 mainDivHomeSub2Test">
        <div class="mainDivHomeSub1 mainDivHomeSub1Test">
          <div class="resultsReg" style="height:70vh">
            <?php
              if(isset($_POST['theName'], $_POST['email'], $_POST['phone'], $_POST['dates'])){

              $name = $_POST['theName'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $date = $_POST['dates'];
            // Create connection
            $conn = mysqli_connect("localhost", "root", "", "CoronaTest");

            // Check connection
              if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
              echo "<p style='text-align:center;'>No connection</p><br>";
              }
              else {
                // code...
                echo "<p style='text-align:center;'>Connected successfully</p><br>";
              }

              //add entry
              $query = "INSERT INTO testRegistration(theName, email, phone, dates) VALUES ('$name','$email','$phone', '$date')";
              $result = mysqli_query($conn,$query);

                if (!$result) {
                echo "<p style='text-align:center;'>Not added</p><br>";
                }
                else {
                  // code...
                  echo "<p style='text-align:center;'>Added successfully</p><br>";
                }
            }
            elseif (!(isset($_POST['dates']))){
              echo "Enter appropriate date format";
            }
             ?>
          </div>


        </div>
      </div>
    </div>

    <footer><small>Copyright &copy 2020 Michael Andarge. All Rights Reserved.</small></footer>
  </body>
</html>
