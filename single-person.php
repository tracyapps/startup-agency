<?php get_header(); ?>

	<div id="content">
		<main id="main" class="main-content" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'parts/loop', 'single-person' ); ?>
			<?php endwhile;
			else : ?>
				<?php get_template_part( 'parts/content', 'missing' ); ?>
			<?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #content -->

<?php get_footer(); ?>