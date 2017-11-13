
<?php
/*Template Name: Scale*/
?>
<?php get_header(); ?>
<div id="fondo" class="container-fluid">
	<nav id="fondomenu" class="row">
		<?php wp_nav_menu( array('menu' => 'main', 'container' => 'nav' )); ?>
	</nav>
	
	<section id="bascula" class="row">
		<div id="textobascula" class="col-xs-12 col-md-push-5 col-md-7">
			<div class="row">
				<div id="titulobascula" class="col-xs-12">
					<h2>Báscula para pesaje de camiones</h2>
				</div>
			</div>
			<div class="row">
				<div id="parrafobascula" class="col-xs-offset-1 col-xs-10">
					<p class="gris">¿Pesando a ojo en pleno siglo XXI? Pesa tu camión en nuestra báscula y evita disgustos.</p>
					<p class="gris">Lleves la carga que lleves, mereces saber cuánto llevas.</p>
					<p> </p>
					<p> </p>
					<p class="gris">Sube tu camión y recoge el ticket. Así de sencillo.</p>	
				</div>
			</div>
		</div>
		<div id="imagenbascula" class="col-xs-12 col-md-pull-7 col-md-5">
		</div>
	</section>
</div>
<?php get_footer(); ?>