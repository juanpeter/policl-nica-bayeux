<?php get_header(); ?>

<!-- add some margin here -->
	<main role="main">

		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

			<div class="search-bar">
				<input type="text" name="search" value="" autocomplete="off"
				id="searchInput" placeholder="Buscar Exame...">
			</div>

			<?php //get_sidebar(); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php /*edit_post_link();*/ ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
