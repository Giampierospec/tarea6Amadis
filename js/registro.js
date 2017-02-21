var lat = document.getElementById("lat");
var lon = document.getElementById("lon");

function latLon(){
  navigator.geolocation.getCurrentPosition(function(datos){
    lat.value = datos.coords.latitude;
    lon.value = datos.coords.longitude;
  });
}
//Eventos
window.addEventListener("load",latLon);
window.onload = function(){


}
