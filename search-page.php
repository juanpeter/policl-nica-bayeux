<?php /* Template Name: Search Page Template */ get_header(); ?>
<main>
	<div class="container-fluid">
	<h1><?php the_title(); ?></h1>

		<div class="row align-items-center">

			<div class="col-md-6">
				<div class="search-bar">
					<input type="text" name="search" value="" autocomplete="off"
					id="searchInput" placeholder="Buscar Exame...">
					<span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
						<path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
							s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
							c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
							s-17-7.626-17-17S14.61,6,23.984,6z"/>
						<g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
					</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="exams-box">
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
				</div>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>