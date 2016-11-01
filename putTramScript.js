$(document).ready(function(){
  putTram();
});




function putTram(){
  var m = document.getElementById('map');
  var map = m.getContext('2d');
  var Green = document.getElementsByClassName('object_Green');
  var TramGreen = Green.getContext('2d');
  map.font = "30px Arial";
  map.fillText("Hello World",10,50);
}
