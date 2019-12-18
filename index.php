<?php /* Template Name: Home Page Template */ ?>

<?php include('templates/header.php') ?>
<?php include('templates/hero.php'); ?>
<?php include('templates/sideMenu.php'); ?>

	<a href="https://api.whatsapp.com/send?phone=5583981841415&text=Quero%20agendar%20uma%20consulta!" rel="noopener">
		<aside id="contact">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" xml:space="preserve"><g><path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
		</aside>
	</a>
	<aside id="results-button">
		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve"><g><g id="add"><path d="M357,204H204v153h-51V204H0v-51h153V0h51v153h153V204z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
	</aside>
	<aside class="results-menu">
		<div class="results">
			<div class="container-fluid p-2">
					<div class="row">
						<div class="col-md-10">
							<form id="frmAutenticacao" name="frmAutenticacao" onsubmit="return valida()" action="http://187.33.247.246/arlaudo/default.aspx" method="post">
								<div class="form-row">
									<div class="form-group col-12 m-1">
										<h3 class="mr-2 d-md-inline">Resultados Online</h3>
										<p class="d-inline">Estas informações estão em sua ficha de atendimento.</p>
									</div>
									<div class="form-group col-md-5 m-md-0">
										<input class="form-control" name="PACIENTE" title="ID do paciente" id="PACIENTE" maxlength="20" class="form" type="text" value="Id do Paciente" onfocus="if (this.value == 'Id do Paciente'){ this.value='';}" onblur="if (this.value == ''){ this.value='Id do Paciente';}">
									</div>
									<div class="form-group col-md-5 m-md-0">
										<input class="form-control" name="SENHA" title="Senha" size="15" id="senha" class="form" type="password" value="*******" maxlength="8" onfocus="if (this.value == '*******'){ this.value='';}" onblur="if (this.value == ''){ this.value='*******';}">
									</div>
									<div class="form-group col-md-2 m-md-0">
										<input type="submit" value="Acessar" class="btn btn-success">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-2 d-flex justify-content-center justify-content-md-start">
							<div class="row align-content-end">
								<a href="http://187.33.247.246/arweb/login.aspx" target="_blank">
									<button class="btn btn-lg btn-info">Acesso aos médicos</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>
	<main>
		<span id='description-section' ></span>
		<section class="description mt-5" data-aos="fade-down">
			<article>
				<?php
					$my_postid = 431;//This is page id or post id
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
				?>
				<h2 class="slogan">
					<?php echo get_the_title($my_postid); ?>
				</h2>
					<?php echo $content; ?>
			</article>
		</section>

		<div class="container mt-5" id="pictures-section" data-aos="fade-down">
			<h2 class="slogan">Nossa Estrutura</h2>
			<div class="row">
				<div class="col-lg-6">
					<section data-aos="fade-right">
						<article>
						<?php
							$my_postid = 466;
							$content_post = get_post($my_postid);
							$content = $content_post->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]&gt;', $content);
						?>
							<h2>Unidade Centro</h2>
								<!-- <iframe src="https://www.youtube.com/embed/LXb3EKWsInQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<?php echo $content; ?>
						</article>
					</section>
				</div>
				<!-- TO-DO Quebrado, descomente e ajeite, o post não está puxando -->
				<!-- <div class="col-lg-6">
					<section data-aos="fade-left">
						<article> -->
						<?php
							// $my_postid = 697;
							// $content_post = get_post($my_postid);
							// $content = $content_post->post_content;
							// $content = apply_filters('the_content', $content);
							// $content = str_replace(']]>', ']]&gt;', $content);
						?>
							<!-- <h2>Unidade Sesi</h2> -->
							<!-- <iframe src="https://www.youtube.com/embed/LXb3EKWsInQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<?php //echo $content; ?>
						<!-- </article>
					</section> -->
				</div>
			</div>
		</div>

		<?php include('templates/exams-specialities.php') ?>

		<div id="feed-section" data-aos="fade-right">
			<div class="container mt-5 p-3">
			<h2 class="slogan">Eventos e Ações</h2>
				<section>
					<?php
						$my_postid = 656;
						$content_post = get_post($my_postid);
						$content = $content_post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]&gt;', $content);
						echo $content; ?>
				</section>
			</div>
		</div>
	</main>
<?php include('templates/footer.php') ?>