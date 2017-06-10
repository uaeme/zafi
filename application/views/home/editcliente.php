<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url()?>static/dist/css/vendor/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/proy/static/dist/css/flat-ui.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <h2>Editar Datos</h2>
          <form action="<?php echo base_url();?>index.php/Registro/editar_user/<?= $idc ?>" method="POST">
            <div class="form-group">
              <label for="nombre de usuario">nombre de usuario</label>
              <input type="text" name="username" value="<?= $userc?>" id="username" class="form-control" placeholder="username" required="">
            </div>
            <div class="form-group">
              <label for="contraseña">contraseña</label>
              <input type="password" name="password" value="<?= $passc ?>"id="password" class="form-control" placeholder="password" required="">
            </div>
            <div class="form-group">
              <label for="nombre(s)">nombre(s)</label>
              <input type="text" name="nombre" id="nombre" value="<?= $nombrec ?>" class="form-control" placeholder="nombre" required="">
            </div>
            <div class="form-group">
              <label for="apellido paterno">apellido paterno</label>
              <input type="text" name="paterno" id="paterno" value="<?= $paternoc ?>" class="form-control" placeholder="apellido paterno" required="">
            </div>
            <div class="form-group">
              <label for="apellido materno">apellido materno</label>
              <input type="text" name="materno" id="materno" value="<?= $maternoc ?>" class="form-control" placeholder="apellido materno" required="">
            </div>
            <div class="form-group">
              <label for="telefono">telefono</label>
              <input type="number" name="telefono" id="telefono" value="<?= $telefonoc ?>" class="form-control" placeholder="telefono" required="">
            </div>
            <div class="form-group">
              <label for="correo ">correo electronico</label>
              <input type="email" name="correo" id="correo" value="<?= $emailc ?>" class="form-control" required="">
            </div>


            <!--<div class="form-group">
              <label for="domicilio"></label>
              <input type="text" id="direccion" size="60" value="" placeholder="domicilio" required="" />
            </div>  -->
            <!--<div class="form-group">
              <label for="coordenadas"></label>
              <input type="text" name="coordenadas" id="coordenadas" size="30" value="" class="form-control" placeholder="coordenadas" required=""/>
            </div>
            <span id="geocoding"></span> -->

            <input type="submit" value="guardar" class="btn btn-primary" >

          </form>

  </body>
</html>
