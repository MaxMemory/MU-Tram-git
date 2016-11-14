<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tram";

    $connect = new mysqli($servername, $username, $password, $dbname);
    if($connect->connect_error){
      die("Connection error: ".$connect->connect_error);
    }
    $U_firstName = $_POST['firstname'];
    $U_lastName = $_POST['lastname'];
    $U_userName = $_POST['username'];
    $U_password = $_POST['password'];
    $U_birthDay = $_POST['birthday'];
    $U_gender = $_POST['gender'];

    $sql = "INSERT INTO `user` (`userName`,`password`,`firstName`,`lastName`,`Date`,`Gender`) VALUES ('".$U_firstName."','".$U_lastName."','".$U_userName."','".$U_password."','".$U_birthDay."','".$U_gender."');";
    if ($connect->query($sql) === TRUE) {
      echo "New record created successfully";
    }
    else {
      echo "Error: " . $sql . "<br>" . $connect->error;
  }



?>
