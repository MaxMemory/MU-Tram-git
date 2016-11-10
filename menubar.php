<html>
<head>
  <title>MU-Tram Project</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Quattrocento+Sans|Roboto|Signika" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="search.css" />
  <link rel="stylesheet" type="text/css" href="LogInForm.css" />

</head>
<body>
  <div id="menu">
    <ul class="menubar">
      <li><a href="#" >Home</a></li>
      <li><a href="#" >Location</a></li>
      <li><a href="#" >About us</a></li>
      <li style="float: right">
        <div class="dropdown">
          <a class="dropdown-toggle" id="menu1" data-toggle="dropdown" href="#">Language<span class="caret"></span>&nbsp;</a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">English</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Thai</a></li>
          </ul>
        </div>
      </li>
      <li style="float: right"><a href="#" >Search</a></li>
      <li style="float: right"><a onclick="document.getElementById('startModal').style.display='block'">Login</a></li>
    </ul>
  </div>
</body>

<!-- This code is about Log in form -->
<div id="startModal" class="modal">

  <!-- Modal Content -->
  <form class="modal-content animate">

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('startModal').style.display='none'" class="cancelbutton">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('startModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</html>
