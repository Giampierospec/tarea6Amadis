<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lucha en contra de la impunidad</title>
    <link rel="stylesheet" href="/tarea6/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tarea6/css/inicio.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/tarea6/bootstrap/js/bootstrap.min.js"></script>

    </script>
  </head>
  <body>
        <div class="container-fluid" id="cont">
          <h1 class="text-center">Basta de Impunidad!</h1>
          <div id="map">
            Mapa
          </div>
            <a href="<?php echo base_url('app/registro');?>" class="btn  btn-info" id="btn_registro"> Registrarse</a>
        </div>
        <script >
        function initMap() {
          var myLatLng = {lat:18.45, lng: -69.66};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: myLatLng
          });
          <?php
          $CI =& get_instance();
          $rs = $CI->db->query("select * from persona order by id desc limit 10");
          $datos = $rs->result();
          foreach($datos as $persona){

            echo "
            myLatLng = {lat: {$persona->lat}, lng: {$persona->lon}};
            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: 'Hello World!'
            });
            ";
          }
          ?>

        }
        </script>
        <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApsdUksZZ9knDycP2eGAYZtGV28vcF05o&callback=initMap"></script>

  </body>

</html>
