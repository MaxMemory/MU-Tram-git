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
<link rel="stylesheet" type="text/css" href="css/showAccount.css" />
<body>
<?php include 'menubar.php';?>

  <div id="backpage-showAccount">
    <form action="check-updateProfile.php" method="post" enctype="multipart/form-data">
    <?php
    $post_name = $_SESSION['login-username'];
    $sql = "SELECT * FROM user WHERE userName='$post_name'";
    $printout = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($printout)){
      echo "<div id=\"Username-style\" style=\"margin-left:10px\">".$row['userName']."</div>";
      echo '<table><tr><th rowspan="4">';
      echo '<img style="width:250px;height:250px;border-radius:150px" src="data:image/jpeg;base64,'.base64_encode( $row['profile'] ).'"/>'.'</th>';
      echo "<td><div id=\"show-name\">Name: ".$row['firstName']."</div></td></tr>";
      echo "<tr><td><div id=\"show-name\">Surname: ".$row['lastName']."</div></td></tr>";
      echo "<tr><td><div id=\"show-name\">Gender: ".$row['Gender']."</div></td></tr>";
      echo "<tr><td><div id=\"show-name\">Birthday: ".$row['birthDay']."</div></td></tr>";
    }
    ?>

    <tr><td><label style="margin-left:50px;margin-top:10px;color:white;background-color:28B5C7" for="files" class="btn">Change your profile</label>
      <input id="files" style="visibility:hidden;" name="updateProfile" type="file">
    </td></tr>
    <tr><td><button style="margin-left:20px" type="submit" name="submit-updateProfile">Save</button></td></tr>
      </table>
    </form>
  </div>

</body>
 </html>
