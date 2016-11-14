<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tram";

  $connect = new mysqli($servername, $username, $password, $dbname);
  if($connect->connect_error){
    die("Connection error: ".$connect->connect_error);
  }
?>

<html>
<head>
  <title>MU-Tram Project</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Quattrocento+Sans|Roboto|Signika" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/toggleStyle.css" />
  <link rel="stylesheet" type="text/css" href="css/search.css" />
  <link rel="stylesheet" type="text/css" href="css/Tramstyle.css" />
  <link rel="stylesheet" type="text/css" href="css/putTramStyle.css" />
  <link rel="stylesheet" type="text/css" href="css/LogInForm.css" />
  <link rel="stylesheet" type="text/css" href="css/registerStyle.css" />

<!-- Art so good already -->

</head>
<body>
  <!-- MenuFile -->
  <?php include 'menubar.php';?>

  <div id="back">
    <div id="backpage">
      <div id="registerBox">
        <h1 class="center">Register</h1>
        <form action="checkID.php" method="post" >
          <table  style="width: 20%; background-color: #aef ">
            <tr>
              <td><b>First name</b></td>
              <td><input type="text" placeholder="Enter first name" name="firstname" required></td>
            </tr>
            <tr>
              <td><b>Last name</b></td>
              <td><input type="text" placeholder="Enter last name" name="lastname" required></td>
            </tr>
            <tr>
              <td><b>Username</b></td>
              <td><input type="text" placeholder="Enter username" name="username" required></td>
            </tr>
            <tr>
              <td><b>Password</b></td>
              <td><input type="password" placeholder="Enter password" name="password" required></td>
            </tr>
            <tr>
              <td><b>Date of birth</b></td>
              <td><input type="date" placeholder="mm/dd/yy" name="birthday" required></td>
            </tr>
            <tr>
              <td><b>Gender</b></td>
                  <input type="radio" name="gender" value="female">Female <br>
              </td>
            </tr>
            <tr>
              <td><button type="submit" class="submit-register">Register</button></td>
              <td>Ss</td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>

  <?php include 'credit.php';?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="javascript/TramjQuery.js"></script>
  <script src="javascript/javascript.js"></script>
  <script src="javascript/jquery.js"></script>
  <script src="javascript/toggleScript.js"></script>
  <script src="javascript/TramScript.js"></script>
</body>
</html>
