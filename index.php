<?php /* Template Name: Home Page Template */ ?>
<?php include('templates/header.php') ?>
<?php include('templates/hero.php'); ?>
<?php include('templates/sideMenu.php'); ?>

	<a href="https://api.whatsapp.com/send?phone=5583981841415&text=Quero%20agendar%20uma%20consulta!" rel="noopener">
		<aside id="contact">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" xml:space="preserve"><g><path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
		</aside>
	</a>
	<aside id="results">
		<div id="results-header">
			<span>Resultados Online</span>
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 306 306" xml:space="preserve">
				<g><g id="keyboard-arrow-down">
					<polygon points="35.7,58.65 153,175.951 270.3,58.65 306,94.351 153,247.35 0,94.351 		"/>
				</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
			</svg>
		</div>
		<div id="results-body">
			<form id="frmAutenticacao" name="frmAutenticacao" onsubmit="return valida()" action="http://187.33.247.246/arlaudo/default.aspx" method="post">
				<input name="PACIENTE" title="ID do paciente" id="PACIENTE" maxlength="20" class="form" type="text" value="Id do Paciente" onfocus="if (this.value == 'Id do Paciente'){ this.value='';}" onblur="if (this.value == ''){ this.value='Id do Paciente';}">
				<br>
				<input name="SENHA" title="Senha" size="15" id="senha" class="form" type="password" value="*******" maxlength="8" onfocus="if (this.value == '*******'){ this.value='';}" onblur="if (this.value == ''){ this.value='*******';}">
				<br>
				<div class="section-wrapper">
					<input type="submit" value="ACESSAR" class="white-full-button">
				</div>
				<div class="section-wrapper">
					<p>Estas informações estão em sua ficha de atendimento.</p>
				</div>
				<a href="http://187.33.247.246/arweb/login.aspx" target="_blank">
					<button class="white-full-button">Acesso aos médicos</button>
				</a>
			</form>
		</div>
	</aside>
	<main>
		<span id='description-section' ></span>
		<section class="description" data-aos="fade-down">
			<article>
				<?php
					$my_postid = 431;//This is page id or post id
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
				?>
				<h1 class="slogan">
					<?php echo get_the_title($my_postid); ?>
				</h1>
					<?php echo $content; ?>
			</article>
		</section>

		<div class="container-fluid my-3" id="pictures-section">
			<h2 class="slogan">Nossa Estrutura</h2>
			<div class="row">
				<?php
					$my_postid = 466;//This is page id or post id
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
				?>
				<div class="col-lg-6 pl-0">
					<section data-aos="fade-right" >
						<article>
							<div class="section-wrapper">
								<iframe src="https://www.youtube.com/embed/LXb3EKWsInQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<?php echo $content; ?>
							</div>
						</article>
					</section>
				</div>
				<div class="col-lg-6 pr-0">
					<section data-aos="fade-left">
						<article>
						<div class="section-wrapper">
							<iframe src="https://www.youtube.com/embed/LXb3EKWsInQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<?php echo $content; ?>
						</div>
						</article>
					</section>
				</div>
			</div>
		</div>
		<?php include('templates/exams-specialities.php') ?>

		<div class="container-fluid my-3 p-3" id="feed-section" data-aos="fade-right">
		<h2 class="slogan">Eventos e Ações</h2>
			<section>
				<?php
					$my_postid = 656;//This is page id or post id
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					echo $content; ?>
			</section>
		</div>
	</main>
        
<?php include('templates/footer.php') ?>