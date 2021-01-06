<?php
/**
 *  Displays archive entries with just featured image, title, category/tag, 
 * date posted and then the link
 */
 ?>



<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-item' ); ?> role="article">

	<section class="featured-image" itemprop="articleBody">
		<?php the_post_thumbnail( 'thumbnail' ); ?>
	</section> <!-- end article section -->

	<header class="entry-text">
		<h3 class="title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h3>
		<?php
		if( is_post_type_archive( 'portfolio' ) ) :
		// don't show the 'posted on' byline on portfolio archives, instead show a button
			echo '<a href="' . get_the_permalink() . '" class="button secondary smaller" rel="bookmark">View Project</a>';
		else :
			get_template_part( 'parts/content', 'byline' );
		endif;
		?>
	</header> <!-- end article header -->

</article> <!-- end article -->

	