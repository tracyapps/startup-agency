<?php
/**
 *  Displays archive entries with just featured image, title, category/tag, 
 * date posted and then the link
 */
 ?>



<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-item featured-item large' ); ?> role="article">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<object>
			<section class="featured-image" itemprop="articleBody">
				<?php the_post_thumbnail( 'full' ); ?>
			</section> <!-- /.featured-image -->

			<section class="entry-text">
				<span>
					<h2><?php the_title(); ?></h2>
					<h3 class="portfolio-subtitle"><?php the_field( 'portfolio_subtitle' ); ?></h3>
				</span>

			</section> <!-- /.entry-text -->
		</object>
	</a>
</article> <!-- end article -->

	