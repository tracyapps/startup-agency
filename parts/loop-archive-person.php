<?php
/**
 *  Archive loop of people / the team
 */
 ?>



<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-item team-member' ); ?> role="article">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<object>
			<section class="featured-image" itemprop="articleBody">
				<?php the_post_thumbnail( 'large' ); ?>
			</section> <!-- /.featured-image -->

			<section class="entry-text">
				<span>
					<h2 class="person-name"><?php the_title(); ?></h2>
					<?php
					if ( get_field( 'person_position' ) ) :
						echo '<h3 class="person-title">' . get_field( 'person_position' ) . '</h3>';
					endif;
					?>
				</span>

			</section> <!-- /.entry-text -->
		</object>
	</a>
</article> <!-- end article -->