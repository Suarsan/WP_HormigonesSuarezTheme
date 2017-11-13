
<?php
/*Template Name: Concrete*/
?>
<?php get_header(); ?>

<div id="fondo" class="container-fluid">
	<nav id="fondomenu" class="row">
		<?php wp_nav_menu( array('menu' => 'main', 'container' => 'nav' )); ?>
	</nav>
	<section id="hormigon" class="row">
		<div class="col-xs-12 col-md-8 sinpadding">
			<img src="http://hormigonessuarez.com/wp-content/uploads/2016/03/hormigonforjado.jpg" class="" height="100%" width="100%">
		</div>
		<div  class="col-xs-12 col-md-4">
			<div class="row">
				<div id="titulohormigon" class="col-xs-12">
					<h2>Hormigón</h2>
				</div>
			</div>
			<div class="row">
				<div id="textohormigon" class="col-xs-offset-1 col-xs-10">
					<p class="gris">El hormigón es un material compuesto esencialmente por un aglomerante (cemento), agregados (áridos, grava o gravilla dependiendo del diámetro) y agua. Cuando para el agregado se utiliza solamente arena se denomina mortero, de constitución mas fina y débil. Utilizado desde más de 500 a.C. en la antigua Grecia constituye el material más importante en la arquitectura reciente por su precio, dinamismo, resistencia y versatilidad.</p>
					<p> </p>
					<p class="gris">Disponemos de todo un abanico de formulaciones para la realización de hormigones y morteros. Nos ajustamos a tus necesidades.  </p>	
				</div>
			</div>
		</div>
	</section>
	<section id="fibra" class="row">
		<div class="col-xs-12 col-md-push-8 col-md-4 sinpadding">
			<img src="http://hormigonessuarez.com/wp-content/uploads/2016/03/hormigonfibra.jpg" class="" height=100% width=100%>
		</div>
		<div class="col-xs-12 col-md-pull-4 col-md-8">
			<div class="row">
				<div id="textofibra" class="col-xs-offset-1 col-xs-10">
					<p class="gris">Olvídate del metal, prueba nuestra fibra estructurante. Al combinar alto desempeño, durabilidad y facilidad de uso, las fibras ofrecen una alternativa rápida y rentable a las soluciones tradicionales de refuerzo del hormigón. Aumenta la resistencia a la tracción, reduce la cantidad de hormigón necesaria y aligera las piezas.</p>	
				</div>
			</div>
		</div>
	</section>
	<section id="probeta" class="row">
		<div class="col-xs-12 col-md-8 sinpadding">
			<img src="http://hormigonessuarez.com/wp-content/uploads/2016/03/hormigoninterior.jpg" class="" height="100%" width="100%">
		</div>
		<div id="textoprobeta" class="col-xs-12 col-md-4">
			<div class="row">
				<div class="col-xs-offset-1 col-xs-10">
					<p class="gris">Disponemos de aditivos retardantes y con propiedades hidrófugas (repele el agua) especiales para zonas con climatologías adversas.</p>
					<p> </p>
					<p class="gris">Utiliza nuestros pigmentos colorantes y dale un toque diferente al hormigón. Descubre todas las posibilidades en cuanto a colores y texturas.</p>
					<div class="centrardiv">
						<button id="botonimpreso" class="btn btn-default btn-lg" onclick="window.location.href='http://hormigonessuarez.com/servicios/hormigonimpreso/#hormigonimpreso'">Hormigón impreso</button>
					</div>
				</div>
			</div>
			</div>
	</section>
</div>

<?php get_footer(); ?>
<script type="text/javascript">
	$(document).ready(function(){
		var alto = $(window).height();
		var altoMenu = $("#fondomenu").height();
		var altoRestante = alto - altoMenu;
		var altoDocumento = $(document).height();
		$("#imagenhormigon").height(altoRestante);
	});
</script>