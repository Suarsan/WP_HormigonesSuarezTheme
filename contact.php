
<?php
/*Template Name: Contact*/
?>
<?php get_header(); ?>
<div id="fondo" class="container-fluid">
	<nav id="fondomenu" class="row">
		<?php wp_nav_menu( array('menu' => 'main', 'container' => 'nav' )); ?>
	</nav>
	<section id="plantahormigon" class="row">
		<div id="infoplantahormigon" class="col-xs-12 col-md-6">
			<div class="row">
				<div id="tituloplantahormigon" class="col-xs-12 col-md-offset-1 col-md-11">
					<h2>Planta de hormig&oacuten</h2>
				</div>
				<div id="textoplantahormigon" class="col-xs-offset-2 col-xs-10">
					<div class="row">
						<div class="col-xs-1">
							<h4 class="ajustarbottom"><span class="glyphicon glyphicon-phone-alt"></span></h4>
							<h4 class="ajustartop"><span class="glyphicon glyphicon-phone"></span></h4>
							<h4 class=""><span class="glyphicon glyphicon-phone"></span></h4>
						</div>
						<div class="col-xs-2">
							<h4>Fijo:</h4>
							<h4>Móvil:</h4>
							<h4>Móvil:</h4>
						</div>
						<div class="col-xs-6">
							<h4>927566528</h4>
							<h4>685979111</h4>
							<h4>659800870</h4>
						</div>
					</div>
				</div>
				<div id="horarioplantahormigon" class="col-xs-12 col-md-offset-1 col-md-11">
					<div class="row">
						<div class="col-xs-offset-1 col-xs-11">
							<h5>Abierto de Lunes a Viernes: </h5>
						</div>
						<div class="col-xs-offset-2 col-xs-10">
							<h4>Ininterrumpido de 8:00 a 18:00</h4>
						</div>
					</div>
				</div> 
			</div>
		</div>
		<div id="infooficina" class="col-xs-12 col-md-6">
			<div class="row">
				<div id="titulooficina" class="col-xs-12 col-md-offset-1 col-md-11">
					<h2>Oficina</h2>
				</div>
				<div id="textooficina" class="col-xs-offset-2 col-xs-10">
					<div class="row">
						<div class="col-xs-1">
							<h4 class="ajustarbottom"><span class="glyphicon glyphicon-phone-alt"></span></h4>
							<h4 class=""><span class="glyphicon glyphicon-print"></span></h4>
							<h4><span class=""> </span></h4>
						</div>
						<div class="col-xs-2">
							<h4>Fijo:</h4>
							<h4>Fax:</h4>
							<h4> </h4>
						</div>
						<div class="col-xs-6">
							<h4>927566389</h4>
							<h4>927566389</h4>
							<h4> </h4>
						</div>
					</div>
				</div>
				<div  id="horariooficina" class="col-xs-12 col-md-offset-1 col-md-11">
				    <div class="row">
						<div class="col-xs-offset-1 col-xs-11">
							<h5>Abierto de Lunes a Viernes: </h5>
						</div>
						<div class="col-xs-offset-2 col-xs-10">
							<h4>Mañanas de 10:00 a 13:00</h4>
							<h4>Tardes de 17:00 a 19:00</h4>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</section>
	<section id="mapaplantahormigon" class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3050.6103105201637!2d-5.456468684953391!3d40.12868708103175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3fc122de1812ff%3A0x6af3fe86cff91d98!2sHormigones+Su%C3%A1rez+SL!5e0!3m2!1ses!2ses!4v1454589366153" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
	<section id="formulariocontacto" class="row">
		<div class="col-xs-12 col-md-offset-2 col-md-8">
			<form>
				<div class="row">
					<div id="formularioremitente" class="col-xs-12">
						<label>Contacta con nosotros</label>
						<input type="email" class="form-control col-xs-12" placeholder="Introduce email">
					</div>
				</div>
				<div class="row">
					<div id="formulariotexto" class="col-xs-12">
						<textarea type="text" rows="10" class="form-control col-xs-12" placeholder="Introduce tu mensaje"></textarea>
					</div>
				</div>
				<div class="row">
					<div id="formularioboton" class="col-xs-12">
						<button class="btn btn-info col-xs-offset-1 col-xs-10 col-sm-offset-4 col-sm-4 col-md-offset-2 col-md-8 col-lg-offset-8 col-lg-4">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<section id="mapaoficina" class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d762.6298472192609!2d-5.459654911861921!3d40.13071289870614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3fc122e0b32b31%3A0x1b162d6299a49b8a!2sCalle+el+Prado%2C+5%2C+10470+Villanueva+de+la+Vera%2C+C%C3%A1ceres!5e0!3m2!1ses!2ses!4v1455132219419" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
</div>
<?php get_footer(); ?>