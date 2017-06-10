<section>
  <div class="cut cut-top"></div>
  <div class="container">
    <div class="row intro-tables">
      <div class="col-md-4">
        <div class="intro-table intro-table-first">
          <h5 class="white heading">Productos</h5>
          <div class="owl-carousel owl-schedule bottom">
            <div class="item">
              <div class="schedule-row row">
                <div class="col-xs-6">
                  <h5 class="regular white">Garrafon de agua</h5>
                </div>
                <div class="col-xs-6 text-right">
                  <h5 class="white">$15</h5>
                </div>
              </div>
              <div class="schedule-row row">
                <div class="col-xs-6">
                  <h5 class="regular white">Botellas de 1 litro</h5>
                </div>
                <div class="col-xs-6 text-right">
                  <h5 class="white">$6</h5>
                </div>
              </div>
              <div class="schedule-row row">
                <div class="col-xs-6">
                  <h5 class="regular white">Botella de 500ml</h5>
                </div>
                <div class="col-xs-6 text-right">
                  <h5 class="white">$4</h5>
                </div>
              </div>
            </div>
          <!--	<div class="item">
              <div class="schedule-row row">
                <div class="col-xs-6">
                  <h5 class="regular white">Early Exercise</h5>
                </div>
                <div class="col-xs-6 text-right">
                  <h5 class="white">8:30 - 10:00</h5>
                </div>
              </div>
              <div class="schedule-row row">
                <div class="col-xs-6">
                  <h5 class="regular white">Muscle Building</h5>
                </div>
                <div class="col-xs-6 text-right">
                  <h5 class="white">8:30 - 10:00</h5>
                </div>
              </div>
              <div class="schedule-row row">
                <div class="col-xs-6">
                  <h5 class="regular white">Cardio</h5>
                </div>
                <div class="col-xs-6 text-right">
                  <h5 class="white">8:30 - 10:00</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="schedule-row row">
                <div class="col-xs-6">
                  <h5 class="regular white">Early Exercise</h5>
                </div>
                <div class="col-xs-6 text-right">
                  <h5 class="white">8:30 - 10:00</h5>
                </div>
              </div>
              <div class="schedule-row row">
                <div class="col-xs-6">
                  <h5 class="regular white">Muscle Building</h5>
                </div>
                <div class="col-xs-6 text-right">
                  <h5 class="white">8:30 - 10:00</h5>
                </div>
              </div>
              <div class="schedule-row row">
                <div class="col-xs-6">
                  <h5 class="regular white">Cardio</h5>
                </div>
                <div class="col-xs-6 text-right">
                  <h5 class="white">8:30 - 10:00</h5>
                </div>
              </div>
            </div>  -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="intro-table intro-table-hover">


            <?php if ($this->session->userdata('user')){?>
                <div class="bottom">
                <h4 class="white heading small-pt">Modificar datos personales</h4>
                <a href="<?= site_url('Pedido')?>"  class="btn btn-white-fill expand">Realizar Pedido</a>


                <?php  if($this->session->userdata('log2')=="true"):?>
    							     <a href="<?= site_url('Registro/VerCliente')?>"  class="btn btn-white-fill expand">Modificar mis datos</a>
    								   <?php $this->session->set_userdata('log2','false'); ?>
    							<?php else: ?>
      								  <a href="<?= site_url('Registro/VerCliente1')?>"  class="btn btn-white-fill expand">Modificar mis datos</a>
      								  <?php $this->session->set_userdata('log2','true'); ?>
    							<?php endif; ?>




              <?php }else{?>
                <h5 class="white heading hide-hover">Descuentos Especiales para Clientes Frecuentes</h5>
                <div class="bottom">
                <h4 class="white heading small-heading no-margin regular">Producto gratis</h4>
                <h4 class="white heading small-pt">20% De descuento</h4>
                  <a href="<?= site_url('Registro/reg')?>" class="btn btn-white-fill expand">Registrate ahora</a>
              <?php  } ?>




          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="intro-table intro-table-third">
        <h5 class="white heading">Clientes Felices</h5>
        <div class="owl-testimonials bottom">
          <div class="item">
            <h4 class="white heading content">Simplemente lo mejor de lo mejor</h4>
            <h5 class="white heading light author">Juan Perez</h5>
          </div>
          <div class="item">
            <h4 class="white heading content">El sabor del agua es de los mejores</h4>
            <h5 class="white heading light author">Hector Sosa</h5>
          </div>
          <div class="item">
            <h4 class="white heading content">Increible, el agua es deliciosa</h4>
            <h5 class="white heading light author">Christina Garcia</h5>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
<section id="services" class="section section-padded">
  <div class="container">
    <div class="row text-center title">
      <h2>Quienes Somos?</h2>
      <h4 class="light muted">Empresa que se dedica a la purificación de agua.</h4>
    </div>
    <div class="row services">
      <div class="col-md-4">
        <div class="service">
          <div class="icon-holder">
            <img src="<?=base_url()?>/plantilla/img/icons/heart-blue.png" alt="" class="icon">
          </div>
          <h4 class="heading">Entregas a Domicilio</h4>
          <p class="description">Entregas a domicilio a partir de 5 garrafones de agua</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service">
          <div class="icon-holder">
            <img src="<?=base_url()?>/plantilla/img/icons/guru-blue.png" alt="" class="icon">
          </div>
          <h4 class="heading">Entregas programadas</h4>
          <p class="description">Usted podra realizar pedidos para una fecha especifica</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service">
          <div class="icon-holder">
            <img src="<?=base_url()?>/plantilla/img/icons/weight-blue.png" alt="" class="icon">
          </div>
          <h4 class="heading">Agua en diferentes presentaciones</h4>
          <p class="description">Tenemos presentaciones que se adapten a sus necesidades</p>
        </div>
      </div>
  <div class="cut cut-bottom"></div>
</section>
<section id="team" class="section gray-bg">
  <div class="container">
    <div class="row title text-center">
      <h2 class="margin-top">Productos</h2>
      <h4 class="light muted">Nuestros productos al alcance de su mano.</h4>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="team text-center">
          <div class="cover" style="background:url('<?=base_url()?>/plantilla/img/team/team.jpg'); background-size:cover;">
            <div class="overlay text-center">
              <h3 class="white">$15.00</h3>
              <!--<h5 class="light light-white">1 - 5 sessions / month</h5>  -->
            </div>
          </div>
          <img src="<?=base_url()?>/plantilla/img/team/garrafon.jpg" alt="Team Image" class="avatar">
          <div class="title">
            <h4>Garrafon de agua</h4>
            <h5 class="muted regular">Presentacion de 20L</h5>
          </div>
          <!--<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button> -->
        </div>
      </div>
      <div class="col-md-4">
        <div class="team text-center">
          <div class="cover" style="background:url('<?=base_url()?>/plantilla/img/team/team.jpg'); background-size:cover;">
            <div class="overlay text-center">
              <h3 class="white">$8</h3>
              <!--<h5 class="light light-white">Presentacion de 1 Lt</h5>  -->
            </div>
          </div>
          <img src="<?=base_url()?>/plantilla/img/team/galon.jpg" alt="Team Image" class="avatar">
          <div class="title">
            <h4>Galon de agua</h4>
            <h5 class="muted regular">Presentacion de 5L</h5>
          </div>
          <!--<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a> -->
        </div>
      </div>
      <div class="col-md-4">
        <div class="team text-center">
          <div class="cover" style="background:url('<?=base_url()?>/plantilla/img/team/team.jpg'); background-size:cover;">
            <div class="overlay text-center">
              <h3 class="white">$4</h3>
              <!--<h5 class="light light-white">1 - 5 sessions / month</h5> -->
            </div>
          </div>
          <img src="<?=base_url()?>/plantilla/img/team/botella.jpg" alt="Team Image" class="avatar">
          <div class="title">
            <h4>Botella de Agua</h4>
            <h5 class="muted regular">Presentacion  de 500ml</h5>
          </div>
          <!--<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section id="pricing" class="section">
  <div class="container">
    <div class="row title text-center">
      <h2 class="margin-top white">Pedidos</h2>
      <h4 class="light white">Haz tu pedido hoy mismo!</h4>
      <h4 class="light white">Los pedidos aplican para 5 productos o mas!</h4>
    </div>
    <div class="row no-margin">
      <div class="col-md-7  col-md-offset-5 pricings text-center">
        <div class="pricing">
          <div class="box-main active" data-img="<?=base_url()?>/plantilla/img/pricing1.jpg"><!--  <h4 class="white">Es necesario iniciar sesion<span class="small-font"></span></h4> -->
            <!--<h4 class="white regular light">$15 <span class="small-font"></span></h4> -->
            <?php if ($this->session->userdata('user')){?>
              <?php if($this->session->userdata('tipo')=="cliente") {?>
                   <li><a href="<?= site_url('Pedido')?>"  class="btn btn-white-fill">Realizar pedido</a></li>
                   <li><a href="<?= site_url('Pedido/vistaPedidos')?>"  class="btn btn-white-fill">Ver mis pedidos</a></li>
              <?php }else{ ?>
                     <li><a href="<?= site_url('Login/logout')?>"  class="btn btn-white-fill">Ver pedidos</a></li>
              <?php } ?>
  					<?php }else{ ?>
              <h4 class="white regular light">Para realizar pedidos debes iniciar sesion <span class="small-font"></span></h4>
  							<li><a href="<?= site_url('Login/log')?>"  class="btn btn-white-fill">Iniciar sesion</a></li>
  					<?php } ?>

          <!--  <a href=" //site_url('Login')?>"  class="btn btn-white-fill">Iniciar sesion</a>-->
            <i class="info-icon icon_question"></i>
          </div>
          <div class="box-second active">
            <ul class="white-list text-left">
              <li>Porque apoyamos tu economía</li>
              <li>Pedidos a domicilio a partir de 5 piezas</li>
              <li>La mejor agua que podrás probar</li>
            </ul>
          </div>
        </div>
      <!--	<div class="pricing">
          <div class="box-main" data-img="img/pricing2.jpg">
            <h4 class="white">Cardio Training</h4>
            <h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
            <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
            <i class="info-icon icon_question"></i>
          </div>
          <div class="box-second">
            <ul class="white-list text-left">
              <li>One Personal Trainer</li>
              <li>Big gym space for training</li>
              <li>Free tools &amp; props</li>
              <li>Free locker</li>
              <li>Free before / after shower</li>
            </ul>
          </div>
        </div>  -->
      </div>
    </div>
  </div>
</section>
<section class="section section-padded blue-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="owl-twitter owl-carousel">
          <div class="item text-center">
            <i class="icon fa fa-facebook"></i>
            <h4 class="white light">Agua Purificada de calidad</h4>
            <h4 class="light-white light">#agua #purificada #zafiro</h4>
          </div>
      <!--		<div class="item text-center">
            <i class="icon fa fa-twitter"></i>
            <h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
            <h4 class="light-white light">#health #training #exercise</h4>
          </div>
          <div class="item text-center">
            <i class="icon fa fa-twitter"></i>
            <h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
            <h4 class="light-white light">#health #training #exercise</h4>
          </div>  -->
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup">
      <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
      <h3 class="white">Sign Up</h3>
      <form action="" class="popup-form">
        <input type="text" class="form-control form-white" placeholder="Full Name">
        <input type="text" class="form-control form-white" placeholder="Email Address">
        <div class="dropdown">
          <button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pricing Plan
          </button>
          <ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
            <li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
            <li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
            <li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
            <li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
          </ul>
        </div>
        <div class="checkbox-holder text-left">
          <div class="checkbox">
            <input type="checkbox" value="None" id="squaredOne" name="check" />
            <label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
          </div>
        </div>
        <button type="submit" class="btn btn-submit">Submit</button>
      </form>
    </div>
  </div>
</div>
