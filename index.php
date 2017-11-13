<?php
/*Template Name: Home*/
?>
<?php get_header(); ?>

<div id="fondo" class="container-fluid">
	<nav id="fondomenu" class="row">
		<?php wp_nav_menu( array('menu' => 'main', 'container' => 'nav' )); ?>
	</nav>
	<section id="cycloneslider" class="row">
		<?php if( function_exists('cyclone_slider') ) cyclone_slider('principal'); ?>
	</section>
	<section id="divcalidadyconfianza" class="row">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-xs-12">
					<div class="centrardiv">
						<h2 id="calidadyconfianza">Calidad y confianza</h2>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<div class="centrardiv">
						<button id="nuestrotrabajo" class="btn btn-default btn-lg" onclick="window.location.href='http://hormigonessuarez.com/empresa/#empresa'">Nuestro trabajo</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="articulos1" class="row">
		<div id="articulo11" class="col-xs-12 col-sm-6 col-md-4" onmouseover="transparenciaarticulo11.className='col-xs-12 articulohover11'" onmouseout="transparenciaarticulo11.className='col-xs-12 height300'">
			<div class="row">
				<div id="transparenciaarticulo11" class="col-xs-12 height300">
					<div class="row">
						<div class="col-xs-12">
							<button onclick="window.location.href='http://hormigonessuarez.com/servicios/materialesdeconstruccion/#prefabricadosdehormigon'" class="btn btn-lg btn-default botonarticulo center-block">Tubos para pozos</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="articulo12" class="col-xs-12 col-sm-6 col-md-4" onmouseover="transparenciaarticulo12.className='col-xs-12 articulohover12'" onmouseout="transparenciaarticulo12.className='col-xs-12 height300'">
			<div class="row">
				<div id="transparenciaarticulo12" class="col-xs-12 height300">
					<div class="row">
						<div class="col-xs-12">
							<button onclick="window.location.href='http://hormigonessuarez.com/servicios/alquilerdemaquinaria/#gruposelectrogenos'" class="btn btn-lg btn-default botonarticulo center-block">Alquiler de herramientas</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="articulo13" class="col-xs-12 col-sm-6 col-md-4" onmouseover="transparenciaarticulo13.className='col-xs-12 articulohover13'" onmouseout="transparenciaarticulo13.className='col-xs-12 height300'">
			<div class="row">
				<div id="transparenciaarticulo13" class="col-xs-12 height300">
					<div class="row">
						<div class="col-xs-12">
							<button onclick="window.location.href='http://hormigonessuarez.com/servicios/hormigonimpreso/#hormigonimpreso1'" class="btn btn-lg btn-default botonarticulo center-block">Hormigón Impreso</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="articulo14" class="col-xs-12 col-sm-6 col-md-4" onmouseover="transparenciaarticulo14.className='col-xs-12 articulohover14'" onmouseout="transparenciaarticulo14.className='col-xs-12 height300'">
			<div class="row">
				<div id="transparenciaarticulo14" class="col-xs-12 height300">
					<div class="row">
						<div class="col-xs-12">
							<button onclick="window.location.href='http://hormigonessuarez.com/servicios/materialesdeconstruccion/#material11'" class="btn btn-lg btn-default botonarticulo center-block">Tierra vegetal</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="articulo15" class="col-xs-12 col-sm-6 col-md-4" onmouseover="transparenciaarticulo15.className='col-xs-12 articulohover15'" onmouseout="transparenciaarticulo15.className='col-xs-12 height300'">
			<div class="row">
				<div id="transparenciaarticulo15" class="col-xs-12 height300">
					<div class="row">
						<div class="col-xs-12">
							<button onclick="window.location.href='http://hormigonessuarez.com/servicios/materialesdeconstruccion/#aridos'" class="btn btn-lg btn-default botonarticulo center-block">Venta de áridos</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="articulo16" class="col-xs-12 col-sm-6 col-md-4" onmouseover="transparenciaarticulo16.className='col-xs-12 articulohover16'" onmouseout="transparenciaarticulo16.className='col-xs-12 height300'">
			<div class="row">
				<div id="transparenciaarticulo16" class="col-xs-12 height300">
					<div class="row">
						<div class="col-xs-12">
							<button onclick="window.location.href='http://hormigonessuarez.com/servicios/alquilerdemaquinaria'" class="btn btn-lg btn-default botonarticulo center-block">Grúa elevadora</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="divcontactoemail" class="row">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-xs-12">
					<div class="centrardiv">
						<h2 id="contactoemail">A su disposición</h2>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-offset-1 col-xs-10">
					<div class="centrardiv">
						<h3 id="contactoemailinfo">Ponemos nuestros 35 años de experiencia a su servicio. No dude en consultarnos. Despejaremos sus dudas sin ningún compromiso.</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="centrardiv">
						<button id="botoncontacto" class="btn btn-default btn-lg" onclick="window.location.href='http://hormigonessuarez.com/contacto/#plantahormigon'">Contacta con nosotros</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="articulos2" class="row">
		<div id="articulo21" class="col-xs-12 col-md-4">
			<div class="row">
				<div id="transparenciaarticulo21" class="col-xs-12 height300">
					<div class="row">
						<div class="col-xs-12">
							<button class="btn btn-lg btn-default botonarticulo disabled center-block">Próximamente</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="articulo22" class="col-xs-12 col-sm-6 col-md-4">
			<div class="row">
				<div id="transparenciaarticulo22" class="col-xs-12 height300">
					<div class="row">
						<div class="col-xs-12">
							<button class="btn btn-lg btn-default botonarticulo disabled center-block">Próximamente</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="articulo23" class="col-xs-12 col-sm-6 col-md-4">
			<div class="row">
				<div id="transparenciaarticulo23" class="col-xs-12 height300">
					<div class="row">
						<div class="col-xs-12">
							<button class="btn btn-lg btn-default botonarticulo disabled center-block">Próximamente</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
