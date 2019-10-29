<?php include 'header-other.php'; ?>

	<main role="main">
		<!-- section -->
		<section class='text-center d-flex justify-content-center align-items-center'>
			<style>
			section {
				height: 40vh;
			}
			</style>
			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Pagina não encontrada', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Retornar á página principal?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->

	</main>


<?php get_footer(); ?>
