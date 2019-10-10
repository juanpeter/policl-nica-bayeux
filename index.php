<?php get_header(); ?>

<?php include 'hero.php'; ?>
<?php include 'sideMenu.php'; ?>

	<!-- wrapper -->
		<main data-spy="scroll" data-target="#navbar-header" data-offset="0" role="main">

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
					<div class="section-wrapper">
						<h2>Nossa Estrutura</h2>
						
					</div>
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
					<button class="white-section-button">
						<div class="section-button-wrapper">
						<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0)">
								<path d="M36.1844 4.40552C35.6669 4.40552 35.2469 4.82552 35.2469 5.34301C35.2469 5.86051 35.6669 6.28051 36.1844 6.28051C36.7019 6.28051 37.1219 5.86051 37.1219 5.34301C37.1219 4.82552 36.7021 4.40552 36.1844 4.40552Z" fill="#555555"/>
								<path d="M37.0427 0.749884C31.1633 -1.13543 26.2498 0.974321 23.997 2.27435C21.7445 0.97404 16.8317 -1.1358 10.9509 0.749884C3.16293 3.24804 -0.488343 14.6201 5.75605 23.7959C8.71451 28.1414 9.10958 31.4933 9.52779 35.042C9.83398 37.6397 10.1506 40.3259 11.473 43.4663C12.3623 45.5776 13.6194 47.9927 15.4793 47.9925C15.4961 47.9925 15.5133 47.9923 15.5301 47.9919C17.0257 47.9566 18.231 46.4733 19.4377 43.1822C20.0524 41.5045 20.4463 39.5249 20.8272 37.6106C21.5128 34.1649 22.2218 30.602 24.0037 30.5895C24.0069 30.5895 24.01 30.5895 24.0132 30.5895C25.7756 30.5895 26.483 34.1537 27.1672 37.6004C27.5483 39.5208 27.9424 41.5067 28.557 43.1824C29.7653 46.4785 30.9704 47.9642 32.4646 47.9994C32.4816 47.9998 32.4984 48 32.5153 48C34.3715 48 35.6303 45.5811 36.5209 43.4662C37.7846 40.4652 38.1157 37.7857 38.4358 35.1943C38.8866 31.5459 39.3123 28.0998 42.2448 23.786C48.5623 14.4916 44.7 3.20454 37.0427 0.749884ZM40.694 22.7319C37.5069 27.4203 37.0331 31.2555 36.5748 34.9644C36.2563 37.5423 35.9555 39.9772 34.7927 42.7384C33.4131 46.0139 32.613 46.1249 32.5119 46.1249C32.5107 46.1249 32.5098 46.1249 32.5089 46.1249C32.4728 46.1241 31.6102 46.0635 30.3175 42.5367C29.7531 40.9981 29.3735 39.0852 29.0064 37.2354C28.5943 35.1588 28.205 33.1973 27.5634 31.6662C26.7424 29.7073 25.5492 28.7143 24.0163 28.7143C24.0077 28.7143 23.999 28.7143 23.9905 28.7144C22.4512 28.7252 21.2535 29.7259 20.4308 31.6888C19.7895 33.219 19.4003 35.1745 18.9885 37.2447C18.6214 39.089 18.242 40.9961 17.6775 42.5369C16.3871 46.0561 15.5224 46.1166 15.4862 46.1175C15.4023 46.119 14.5928 46.0421 13.2014 42.7387C11.982 39.8428 11.6945 37.4044 11.3903 34.8226C10.964 31.2058 10.5232 27.466 7.30649 22.7411C1.67728 14.4694 5.07046 4.60563 11.5238 2.53554C17.1357 0.736009 21.7672 3.07366 23.4979 4.16238C23.8029 4.35428 24.191 4.35438 24.496 4.16247C26.2274 3.07404 30.86 0.736571 36.4704 2.53563C43.0515 4.6451 46.2094 14.6178 40.694 22.7319Z" fill="#555555"/>
								<path d="M40.9756 9.70565C40.6711 8.82169 40.2675 8.00831 39.7762 7.28803C39.4843 6.86016 38.9011 6.75 38.4734 7.04185C38.0456 7.3336 37.9355 7.91681 38.2273 8.34459C38.6246 8.92687 38.9528 9.59034 39.2029 10.3163C40.1371 13.028 39.8934 16.1919 38.5341 18.997C38.3082 19.4629 38.503 20.0237 38.9689 20.2495C39.4349 20.4754 39.9956 20.2806 40.2214 19.8147C41.7953 16.5669 42.0702 12.8823 40.9756 9.70565Z" fill="#555555"/>
								<path d="M20.5901 12.8247L16.816 11.5666L15.558 7.79255C15.4304 7.40977 15.0721 7.15149 14.6686 7.15149C14.2651 7.15149 13.9068 7.40968 13.7792 7.79255L12.5211 11.5666L8.74705 12.8247C8.36427 12.9523 8.10598 13.3106 8.10598 13.7141C8.10598 14.1176 8.36417 14.4758 8.74705 14.6035L12.5211 15.8615L13.7792 19.6356C13.9068 20.0184 14.2651 20.2767 14.6686 20.2767C15.0721 20.2767 15.4303 20.0185 15.558 19.6356L16.816 15.8615L20.5901 14.6035C20.9729 14.4759 21.2312 14.1176 21.2312 13.7141C21.2312 13.3106 20.973 12.9524 20.5901 12.8247ZM15.7784 14.2309C15.4984 14.3242 15.2787 14.5439 15.1854 14.8239L14.6686 16.3745L14.1517 14.8239C14.0584 14.5439 13.8388 14.3242 13.5588 14.2309L12.0081 13.7141L13.5588 13.1972C13.8387 13.1039 14.0584 12.8843 14.1517 12.6043L14.6686 11.0536L15.1854 12.6043C15.2787 12.8842 15.4983 13.1039 15.7784 13.1972L17.329 13.7141L15.7784 14.2309Z" fill="#555555"/>
							</g>
						</svg>
							<span>Odontologia</span>
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
