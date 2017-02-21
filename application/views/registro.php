
<!DOCTYPE html>
<?php
$mensaje = "";
$CI =& get_instance();
if($_POST){
  $datos = $_POST;
  $datos['ip'] = $_SERVER['REMOTE_ADDR'];
  $CI->db->insert('persona',$datos);
  $mensaje = "Registro Recibido";
}
 ?>
<html>

  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <link rel="stylesheet" href="/tarea6/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tarea6/css/registro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/tarea6/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container" id="frm_cont">
      <h3><?php echo $mensaje ?></h3>
      <h3>Firma con Nosotros</h3>
      <form  method="post">
      <div class="row">
        <div class="col col-sm-6">
          <div class="form-group input-group">
            <span class="input-group-addon">Cedula</span>
            <input type="text" name="cedula" class="form-control" required/>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Nombre</span>
              <input type="text" name="nombre" class="form-control" required/>
              </div>

              <div class="form-group input-group">
                <span class="input-group-addon">Apellido</span>
                <input type="text" name="apellido" class="form-control" required/>
              </div>

              <div class="form-group input-group">
                <span class="input-group-addon">Telefono</span>
                <input type="tel" name="telefono" class="form-control" required/>
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon">Comentario</span>
                  <textarea name="comentario" class="form-control" required></textarea>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="<?php echo base_url('app')?>" class="btn btn-info">Regresar</a>
                  </div>

      </div>
      </div>
      <input type="hidden" name="lat" id="lat"/>
      <input type="hidden" name="lon" id="lon" />
</form>
    </div>
    <script src="/tarea6/js/registro.js"></script>
  </body>
</html>
