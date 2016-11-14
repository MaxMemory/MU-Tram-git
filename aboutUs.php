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
  <link rel="stylesheet" type="text/css" href="css/aboutUsStyle.css" />

<!-- Art so good already -->

</head>
<body>
  <!-- MenuFile -->
  <?php include 'menubar.php';?>

  <div id="box-background">
    <img class="image-border" src="image\Pond_Profile.jpg">
      <div class="content-box" style="margin-top:18px">Pond</div>

    <img class="image-border" src="image\Ice_Profile.jpg">
      <div class="content-box" style="margin-top:47px">Ice</div>

    <img class="image-border" src="image\Max_Profile.jpg">
      <div class="content-box" style="margin-top:49px">Max</div>

    <img class="image-border" src="image\Art_Profile.jpg">
      <div class="content-box" style="margin-top:50px">Art</div>
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
