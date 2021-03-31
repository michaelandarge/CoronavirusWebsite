<?php
  session_start();
  define('BROWSER-TAB-TITLE', 'PHP Forms');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coronavirus - Testing</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="coronaStyle.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body class="container-fluid">
    <header>
      <h1>The Coronavirus</h1>
    </header>

    <nav class="">
        <ul style="">
          <li> <a class="active" href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li> <a href="symptoms.html"><i class="fa fa-heartbeat" aria-hidden="true"></i> Symptoms </a>
            <!--
            <ul class="submenu">
              <li><a href="#">Cough</a></li>
              <li><a href="#">Fever</a></li>
              <li><a href="#">Chills</a></li>
              <li><a href="#">Sore Throat</a></li>
              <li><a href="#">Muscle Pain</a></li>
            </ul>-->
          </li>
          <li> <a href="highRisk.html"><i class="fa fa-user" aria-hidden="true"></i> High Risk</a></li>
          <li> <a href="treatments.html"><i class="fa fa-user-md" aria-hidden="true"></i> Treatments</a></li>
          <li><a href="testings.php"><i class="fa fa-medkit" aria-hidden="true"></i> Testing</a></li>
        </ul>
    </nav>

    <?php
      if(isset($_SESSION['errors']) && !empty($_SESSION['errors'])){
        foreach ($_SESSION['errors'] as $key => $value) {
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
          echo '<strong>Holy guacamole!</strong> You should check in on some of those fields below.';
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';


        }
      }
     ?>
    <div class="mainDivHome">

      <div class="mainDivHomeSub2 mainDivHomeSub2Test">
        <div class="mainDivHomeSub1 mainDivHomeSub1Test">

          <form class="testForm" action="Includes/registration.php" method="POST">
            <fieldset>
              <legend><h1>Register for Testing</h1></legend>
              <input type="text" name="username" placeholder="Username" required><br>
              <input type="password" name="password" placeholder="Password"><br>
              <input type="password" name="confirmPassword" placeholder="Confirm Password"><br>
              <input type="text" name="firstName" placeholder="First Name" required><br>
              <input type="text" name="lastName" placeholder="Last Name" required><br>
              <input type="email" name="email" placeholder="E-mail Address" required><br>
              <input type="tel" name="phone" placeholder="Phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
              <input type="date" name="scheduledDate" placeholder="Scheduled date: yyyy-mm-dd" value="<?php echo date('Y-m-d'); ?>" required><br>
              <input style="" type="submit" name="register" value="Register">
            </fieldset>

          </form>
        </div>
        <div class="mainDivHomeSub1 mainDivHomeSub1Test">

          <form class="testForm" action="login.php" method="POST">
            <fieldset>
              <legend><h1>Already Registered? Login Here</h1></legend>

              <input type="text" name="username" placeholder="Username" required><br>
              <input type="password" name="password" placeholder="Password"><br>
              <input style="" type="submit" name="loginButton" value="Login">
            </fieldset>

          </form>
        </div>
      </div>
    </div>

    <footer><small>Copyright &copy 2021 Michael Andarge. All Rights Reserved.</small></footer>
  </body>
</html>
