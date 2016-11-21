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
    $_SESSION["stationID"] = $id;
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
  <h1><?php echo $station; ?></h1>
  <form action="check-upload-photo.php" method="post" enctype="multipart/form-data">
  <table style="width: 100%; margin: 10px">
    <tr>
      <td>
          <?php
          echo '<img id="location-image" src="'.$image.'">';
          ?>
      </td>
    </tr>
    <tr>
        <td>
          <p>other Photos</p>
        </td>
    </tr>
    <tr>
      <td style="margin: 20px">
        <?php
        echo '<img class="other-photos" src="'.$image.'">';
        echo '<img class="other-photos" src="'.$image.'">';
        echo '<img class="other-photos" src="'.$image.'">';
        ?>
      </td>
    </tr>
    <?php
      if(isset($_SESSION['login-user'])){
        ?><tr>
            <td style="margin: 20px">
              <label style="margin-top:10px;color:white;background-color:28B5C7" for="files" class="btn">Add photos</label>
              <input id="files" style="visibility:hidden;" name="updateProfile" type="file">
              <button style="margin-left:10px" type="submit">upload</button>
            </td>
        </tr><?php
      }






    ?>
  </table>
  </form>
</body>
</html>
