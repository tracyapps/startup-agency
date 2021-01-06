<?php get_header(); ?>

	<div id="content">
		<main id="main" class="main-content" role="main">

			<header>
				<?php start_the_archive_title( '<h1 class="page-title">', '</h1>', 'smaller'); ?>
				<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
			</header>

			<?php
			$args = array(
				'numberposts'	=> 4,
				'post_type'		=> 'portfolio',
				'meta_query' => array(
					array(
						'key' => 'portfolio_featured',
						'compare' => '==',
						'value' => '1'
					)
				)
			);

			$featured_projects = new WP_Query( $args );

			if( $featured_projects->have_posts() ) :
				echo '<section class="archive-featured">';
				while( $featured_projects->have_posts() ) : $featured_projects->the_post(); ?>

					<?php get_template_part( 'parts/loop', 'archive-featured' ); ?>

				<?php endwhile;
				echo '</section>';
			endif;

			wp_reset_query();

			$args = array(
				'numberposts'	=> 12,
				'post_type'		=> 'portfolio',
				'meta_query' => array(
					array(
						'key' => 'portfolio_featured',
						'compare' => '!=',
						'value' => '1'
					)
				)
			);

			$not_featured_projects = new WP_Query( $args );
			?>

			<?php if ( $not_featured_projects->have_posts() ) :
				echo '<secton class="archive-grid">';
				while ( $not_featured_projects->have_posts() ) : $not_featured_projects->the_post(); ?>

					<?php get_template_part( 'parts/loop', 'archive-grid' ); ?>

				<?php endwhile; ?>

				</secton>

				<?php start_page_navi(); ?>

			<?php else : ?>



			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</main> <!-- end #main -->
	</div> <!-- end #content -->

<?php get_footer(); ?>