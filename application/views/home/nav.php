<body>
	<script src="http://scmplayer.co/script.js"
	data-config="{'skin':'skins/aquaBlue/skin.css','volume':66,'autoplay':true,'shuffle':true,'repeat':1,'placement':'top','showplaylist':false,'playlist':[{'title':'Shape of you','url':'https://www.youtube.com/watch?v=_dK2tDK9grQ'},{'title':'quit','url':'https://www.youtube.com/watch?v=CKhmCh68Qu0'},{'title':'un momento ','url':'https://www.youtube.com/watch?v=achGpfN81rI'},{'title':'','url':'https://www.youtube.com/watch?v=sPTn0QEhxds'},{'title':'','url':'https://www.youtube.com/watch?v=8j9zMok6two'},{'title':'','url':'https://www.youtube.com/watch?v=lbZ7BG1adGI'}]}" ></script>
	<div class="preloader">
		<img src="<?=base_url()?>/plantilla/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="<?=base_url()?>/plantilla/img/logo.png" data-active-url="<?=base_url()?>/plantilla/img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">


					<li><a ><?php echo $this->session->userdata('tipo'); ?> </a> </li>
					<!--<li><a ><?php //echo $this->session->userdata('id_user'); ?> </a> </li>-->
					<li><a ><?php echo "bienvenido "; echo $this->session->userdata('user'); ?> </a> </li>
					<!--<li><a href="#intro">Home</a></li>-->
					<li><a href="#services">Quienes somos</a></li>
					<li><a href="#team">Productos</a></li>
					<li><a href="#pricing">Pedidos</a></li>

					<?php if ($this->session->userdata('user')){?>
							<li><a href="<?= site_url('Login/logout')?>"  class="btn btn-blue">salir</a></li>

						<?php }else
						{ if($this->session->userdata('log')=="true"):?>
								<li><a href="<?= site_url('Login/log')?>"  class="btn btn-blue">Iniciar sesion</a></li>
								<?php $this->session->set_userdata('log','false'); ?>
							<?php else: ?>
								<li><a href="<?= site_url('Login')?>"  class="btn btn-blue">Iniciar sesion</a></li>
								<?php $this->session->set_userdata('log','true'); ?>
							<?php endif; ?>
						<?php } ?>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
