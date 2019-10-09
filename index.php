<?php get_header(); ?>

<?php include 'hero.php'; ?>
<?php include 'sideMenu.php'; ?>

	<!-- wrapper -->
		<main role="main">

			<div class="flex-wrapper">
			
				<section id="description">

					<!-- article -->
					<article id="post-<?php the_ID(431); ?>" <?php post_class(); ?>>
						<!-- post title -->
						<h1 id="slogan">
							<?php the_title(); ?>
						</h1>
						<!-- /post title -->

						<p>
							<?php the_post(); the_content(); ?>
						<p>
					</article>
					<!-- /article -->
				</section>

				<section id="pictures">
					<h2>Nossa Estrutura</h2>
				</section>

				<section id="exams-specialities">
					<div class="section-wrapper">
						<h2>Especialidades e Exames</h2>
						<p>Conheça todas as maneiras que podemos cuidar de sua saúde!</p>
					</div>
					<button class="white-section-button">
						<div class="section-button-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/doctor.svg" alt="Especialidades Médicas">
							<span>Especialidades Médicas</span>
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/right-arrow.svg" alt="Acessar">
						</div>
					</button>
					<button class="white-section-button">
						<div class="section-button-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/microscope.svg" alt="Exames laboratoriais">
							<span>Exames Laboratoriais</span>
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/right-arrow.svg" alt="Acessar">
						</div>
					</button>
					<button class="white-section-button">
						<div class="section-button-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/stethoscope.svg" alt="Exames clínicos">
							<span>Exames Clínicos</span>
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/right-arrow.svg" alt="Acessar">
						</div>
					</button>
				</section>
			<!--/Flex wrapper-->
			</div>

			<!-- <div class="bottom-wrapper"> -->
				<div class="container-fluid bottom-wrapper">
					<div class="row">
						<div class="col-md-6">
							<section id="results">
								<div class="section-wrapper">
								<h2>Resultados Online</h2>
									<form name="acessoPacientes" id="acessoPacientes" method="post" action="http://laudo.doremedicina.com.br/arlaudo/default.aspx">
										<input name="PACIENTE" title="ID do paciente" id="PACIENTE" size="15" class="form" type="text" value="Id do Paciente" onfocus="if (this.value == 'Id do Paciente'){ this.value='';}" onblur="if (this.value == ''){ this.value='Id do Paciente';}">
										<br>
										<input name="SENHA" title="Senha" size="15" id="SENHA" class="form" type="password" value="*******" onfocus="if (this.value == '*******'){ this.value='';}" onblur="if (this.value == ''){ this.value='*******';}">
										<br>
										<div class="section-wrapper">
											<input type="submit" value="ACESSAR" class="white-full-button">
										</div>
										<div class="section-wrapper">
											<p>Estas informações estão em sua ficha de atendimento.</p>
										</div>
									</form>
								</div>
							</section>
						</div>
						<div class="col-md-6">
							<section id="contact">
								<h2>Contato</h2>
								<p>Entre em contato e agende sua consulta!</p>
								<button class="white-section-button">
									<div class="section-button-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/img/icons/whatsapp.svg" alt="Whatsapp">
										<span>Whatsapp</span>
										<img src="<?php echo get_template_directory_uri(); ?>/img/icons/right-arrow.svg" alt="Acessar">
									</div>
								</button>
							</section>
						</div>
					</div>
				</div>



			<!--/Bottom wrapper-->
			<!-- </div> -->
		</main>

<?php get_footer(); ?>
