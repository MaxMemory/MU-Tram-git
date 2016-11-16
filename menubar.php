<?php
  session_start();
?>


<body>
  <div id="menu">
    <ul class="menubar">
      <li><a href="index.php" >Home</a></li>
      <li><a href="#" >Location</a></li>
      <li><a href="aboutUS.php" >About us</a></li>
      <li style="float: right">
        <div class="dropdown">
          <a class="dropdown-toggle" id="menu1" data-toggle="dropdown" href="#">Language<span class="caret"></span>&nbsp;</a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">English</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Thai</a></li>
          </ul>
        </div>
      </li>
      <?php
      if(isset($_SESSION['login-user'])){
        echo "<li style=\"float: right\"><a href=\"logout.php\">log out</a></li>";
        echo "<p style=\"color:#bfff00; float: right\" >".$_SESSION['login-username']."</p>";
        echo '<img class="profile-menu" style="float: right" src="data:image/jpeg;base64,'.base64_encode($_SESSION['login-image']).'">';
      }
      else{
        echo "<li style=\"float: right\"><a href=\"#\" onclick=\"document.getElementById('startModal').style.display='block'\">Login</a></li>";
      }
      ?>

    </ul>
  </div>

  <div id="startModal" class="modal">
    <!-- Modal Content -->
    <form action="check-login.php" method="post" class="modal-content animate">

      <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button type="submit" name="submit-login">Login</button>
      </div>

      <div class="containerDown" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('startModal').style.display='none'" class="cancelbutton">Cancel</button>
        <span class="psw"><u><a href="register.php">sign up!</a></u></span>
      </div>
    </form>
  </div>

  <script src="javascript/menubar.js"></script>

</body>
