<?php get_header(); ?>

	<div id="content">
		<main id="main" class="main-content" role="main">

			<header>
				<h1 class="page-title">The team</h1>
			</header>

			<?php if ( have_posts() ) :
				echo '<secton class="archive-person>';
				while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'archive-person' ); ?>

				<?php endwhile; ?>

				</secton>

				<?php start_page_navi(); ?>

			<?php else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

			<?php endif; ?>
		</main> <!-- end #main -->
	</div> <!-- end #content -->

<?php get_footer(); ?>