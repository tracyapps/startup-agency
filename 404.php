<?php get_header(); ?>

	<div id="content">
		<main id="main" class="main-content" role="main">
			<article id="content-not-found">

				<header class="article-header">
					<h1><?php _e( 'Epic 404 - Article Not Found', 'start' ); ?></h1>
				</header> <!-- end article header -->

				<section class="entry-content">
					<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!',
							'start' ); ?></p>
				</section> <!-- end article section -->

				<section class="search">
					<p><?php get_search_form(); ?></p>
				</section> <!-- end search section -->

			</article> <!-- end article -->
		</main> <!-- end #main -->
	</div> <!-- end #content -->

<?php get_footer(); ?>