
			<!-- footer -->
			<div class="border-orange"></div>
			<footer class="footer pb-5" role="contentinfo">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<a href="<?php echo home_url(); ?>">
							<img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/policlinicabayeux-bw" alt="Logo policlínica Bayeux">
						</a>
					</div>
				</div>
				<iframe id="Gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.022343451823!2d-34.92016814907944!3d-7.1234077718136914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace89b568817d9%3A0x1799c2be672e669f!2sAv.%20Liberdade%2C%202737%20-%20Sesi%2C%20Bayeux%20-%20PB%2C%2058306-000!5e0!3m2!1sen!2sbr!4v1570022652420!5m2!1sen!2sbr"frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<!-- wrapper -->
				<div class="container-fluid">
					<div class="row text-center">
						<div class="col-12">
						<!-- <hr> -->
							<h2>Policlínica Bayeux</h2>
							<p>Av. Liberdade, 2737 - Sesi Bayeux - PB 58306-000</p>
							<p>Telefone: <a href="tel:+558332320636">(83) 3232-0636</a></p>
							<svg id='footer-arrow' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0px" y="0px" viewBox="0 0 451.847 451.846" style="enable-background:new 0 0 451.847 451.846;" xml:space="preserve"><g>
									<path id='arrow' d="M248.292,106.406l194.281,194.29c12.365,12.359,12.365,32.391,0,44.744c-12.354,12.354-32.391,12.354-44.744,0
									L225.923,173.529L54.018,345.44c-12.36,12.354-32.395,12.354-44.748,0c-12.359-12.354-12.359-32.391,0-44.75L203.554,106.4
									c6.18-6.174,14.271-9.259,22.369-9.259C234.018,97.141,242.115,100.232,248.292,106.406z"/>
								</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
							</svg>
						</div>
					</div>
				</div>
				<div id="footer-footer">
					<p class="text-xl-center text-left copyright">
						&copy; <?php echo date('Y'); ?>,
						todos os direitos reservados - desenvolvido por 
						<a href="https://www.mirandacomunicacao.com.br/">Miranda Comunicação</a>
					</p>
				</div>
			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<!-- <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div> -->
	</body>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
