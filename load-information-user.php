<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tram";

    $connect = new mysqli($servername, $username, $password, $dbname);



    $id = $_POST['album'];
    $id = substr($id,13);

    $sql = 'SELECT stationID, stationName, image FROM stations WHERE stationID = '.$id.';';
    $data = $connect->query($sql);
    $row = $data->fetch_assoc();
    $image = $row["image"];
    $station = $row["stationName"];

    $_SESSION["banner"] = $row["stationName"];
?>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Quattrocento+Sans|Roboto|Signika" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/locationStyle.css" />
<!-- Art so good already -->

</head>
<body>
  <h1 class="center" id="head-text"><?php echo $station; ?></h1>
  <table style="width: 100%">
    <tr>
      <td class="center">
        <div id="image-box">
          <?php
          echo '<img id="location-image" src="'.$image.'">';
          ?>
        </div>
      </td>
    </tr>
  </table>

</body>
</html>
