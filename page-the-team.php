<?php get_header(); ?>

	<div id="content">
		<main id="main" class="main-content" role="main">

			<header>
				<h1 class="page-title">The team</h1>
			</header>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'parts/loop', 'archive-person' ); ?>
			<?php endwhile; endif; ?>


		</main> <!-- end #main -->
	</div> <!-- end #content -->

<?php get_footer(); ?>