<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coronavirus - Members</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="coronaStyle.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <h1>The Coronavirus</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
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

    <div class="mainDivHome">

      <div class="mainDivHomeSub2 mainDivHomeSub2Test">
        <div class="mainDivHomeSub1 mainDivHomeSub1Test">


        </div>
        <div class="mainDivHomeSub1 mainDivHomeSub1Test">

          <form class="testForm" action="login.php" method="POST">
            <fieldset>
              <legend><h1>Hello Username</h1></legend>

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
