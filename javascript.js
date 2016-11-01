$(document).ready(function(){
  $("#banner").slideToggle(1200);

});


function addTram(){
  var map = document.getElementById("map");
  var ctx = map.getContext("2d");
  ctx.fillStyle = "#FF0000";
  ctx.fillRect(20, 20, 150, 100);
}
