
<?php
/*Template Name: ConcreteImpression*/
?>
<?php get_header(); ?>
<div id="fondo" class="container-fluid">
	<nav id="fondomenu" class="row">
		<?php wp_nav_menu( array('menu' => 'main', 'container' => 'nav' )); ?>
	</nav>
	
	<section id="hormigonimpreso" class="row">
		<div class="col-xs-12">
			<div class="row">
				<div id="hormigonimpreso1"class="col-xs-12 col-md-6 sinpadding">
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="row">
						<div id="textoimpreso1" class="col-xs-offset-1 col-xs-10">
							<p class="gris">Utilizamos moldes especiales, presión y pigmentos colorantes para imitar un gran repertorio de materiales. Fácil de mantener y de limpiar.</p>
							<p> </p>
							<p class="gris">Constituye una manera rápida, efectiva, resistente y barata de emular materiales como la madera.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="hormigonimpreso2" class="col-xs-12 col-md-6 col-md-push-6 sinpadding">
				</div>
				<div class="col-xs-12 col-md-6 col-md-pull-6">
					<div class="row">
						<div id="textoimpreso2" class="col-xs-offset-1 col-xs-10">
							<p class="gris">Rodea tu piscina de “madera”, empiedra tu camino, tu terraza, tu pared...</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>