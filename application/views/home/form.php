<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup">
      <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
      <h3 class="white">Sign Up</h3>

      <form action="" class="popup-form">
        <input type="text" class="form-control form-white" placeholder="nombre de usuario">
        <input type="text" class="form-control form-white" placeholder="correo electronico">
        <div class="dropdown">
          <button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tipo de Usuario
          </button>
          <ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
            <li class="animated lightSpeedIn"><a href="#">Administrador</a></li>
            <li class="animated lightSpeedIn"><a href="#">Cliente</a></li>
            <li class="animated lightSpeedIn"><a href="#">Trabajador</a></li>
            <!--<li class="animated lightSpeedIn"><a href="#">sin cuenta</a></li> -->
          </ul>
        </div>
        <div class="checkbox-holder text-left">
          <div class="checkbox">
            <input type="checkbox" value="None" id="squaredOne" name="check" />
            <label for="squaredOne"><span>Acepto los <strong>Terminos &amp; Condiciones</strong></span></label>
          </div>
        </div>
        <?=  ?>
        <button type="submit" class="btn btn-submit">Enviar</button>
      </form>

    </div>
  </div>
</div>
