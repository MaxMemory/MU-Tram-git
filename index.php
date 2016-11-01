<html>
<head>
  <title>MU-Tram Project</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Quattrocento+Sans|Roboto|Signika" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="toggleStyle.css" />
  <link rel="stylesheet" type="text/css" href="search.css" />
  <link rel="stylesheet" type="text/css" href="Tramstyle.css" />
  <link rel="stylesheet" type="text/css" href="putTramStyle.css" />

<!-- test Art so bad guy. asdfasdf-->

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
    </ul>
  </div>
  <div id="back">
    <div id="backpage">
      <div id="MapBox">
        <h1 class="center" id="banner">Welcome to <span>MU</span>-Tram</h1>
        <table style="width: 100%">
          <tr>
            <td class="center">
              <canvas id="map"></canvas>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" class="center">
              <label class="switch" style="margin: auto">
                <input type="checkbox" id="TramAll" checked onclick="acBottomAll()" value="true">
                <div class="slider round"></div>
              </label>
              <h1 class="Big">All asdfsadf asdfs</h1>
              <label class="switch" style="margin: auto">
                <input type="checkbox" id="TramGreen" checked onclick="acBottomGreen()" value="true">
                <div class="slider round"></div>
              </label>
              <h1 class="Big">Green</h1>
              <label class="switch" style="margin: auto">
                <input type="checkbox" id="TramBlue" checked onclick="acBottomBlue()" value="true">
                <div class="slider round"></div>
              </label>
              <h1 class="Big">Blue</h1>
              <label class="switch" style="margin: auto">
                <input type="checkbox" id="TramRed" checked onclick="acBottomRed()" value="true">
                <div class="slider round"></div>
              </label>
              <h1 class="Big">Red</h1>
              <label class="switch" style="margin: auto">
                <input type="checkbox" id="TramYellow" checked onclick="acBottomYellow()" value="true">
                <div class="slider round"></div>
              </label>
              <h1 class="Big">Yellow</h1>
              <br />
              <canvas class="object_Green"></canvas>
              <canvas class="object_Blue"></canvas>
              <canvas class="object_Red"></canvas>
              <canvas class="object_Yellow"></canvas>

            </td>
          </tr>
        </table>
      </div>
      <div id="stationBox">
        <p style="color: white">Station</p>
        <?php
          $nStation = 40;
          for($i=1 ; $i<=$nStation; $i++){
            echo "<div class=\"stationinLine\"><a href=\"#\" style=\"width: 100%\">".$i."</a></div>";
          }
        ?>
      </div>
    </div>
  </div>
  <div id="credit">
      <div class="textcredit">Made by Pond, Ice, Art, Max | Faculty of ICT, Mahidol University.</p>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="TramjQuery.js"></script>
  <script src="javascript.js"></script>
  <script src="jquery.js"></script>
  <script src="toggleScript.js"></script>
  <script src="TramScript.js"></script>
</body>
</html>
