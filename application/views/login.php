<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar al sistema</title>
    <link rel="stylesheet" href="<?= base_url()?>static/dist/css/vendor/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/proy/static/dist/css/flat-ui.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <h2>login</h2>
          <form action="" method="POST">
            <div class="form-group">
              <label for="username"></label>
              <input type="text" name="username" id="username" class="form-control" placeholder="username" required="">
            </div>
            <div class="form-group">
              <label for="password"></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="password" required="">
            </div>
            <div class="form-group">
              <select class="material-control-login" name="tipo" id="tipo">
                  <option value="" disabled="" selected="">Tipo de usuario</option>
                  <option value="administrador">Administrador</option>
                  <option value="cliente">Cliente</option>
                  <option value="trabajador">Trabajador</option>
              </select>
            </div>
            <input type="submit" value="ingresar" class="btn btn-primary">

              <a href="<?= site_url('Registro/reg')?>">no tienes cuenta? click aqui</a>

          </form>
        </div>
      </div>
    </div>

  </body>
</html>
