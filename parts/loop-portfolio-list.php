<?php
/**
 *  Displays archive entries with featured image, tag/category (etc) and short excerpt
 */

$page_background = get_field( 'page_background' );
$frame_option = esc_html( get_field( 'featured_image_frame' ) );
?>



<article id="post-<?php the_ID(); ?>" <?php post_class( $page_background ); ?> role="article">
	<div class="container centered">
		<section class="featured-image" itemprop="articleBody">
			<div class="project-image <?php echo $frame_option; ?>" data-type="image">

				<?php

				if( 'browser-frame' == $frame_option || 'browser-frame-no-url' == $frame_option ) :
					?>
					<svg class="browser-container <?php echo $frame_option; ?>">
						<use xlink:href="#browser-top" />
						<div class="browser-text">
							<div class="title-text">
								<?php the_title(); ?>
							</div>
							<div class="url-text">
								<a href="<?php the_field( 'portfolio_site_url' ); ?>"><?php the_field( 'portfolio_site_url' ); ?></a>
							</div>
						</div>
					</svg>
				<?php endif; ?>
				<div class="bg-image" aria-hidden="true"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'full' ); ?></a></div>

				<?php

				if( 'video-frame' == $frame_option ) :
					?>
					<svg class="video-container">
						<use xlink:href="#video-bottom" />
					</svg>
				<?php endif; ?>
			</div>
		</section> <!-- end article section -->
		<header class="article-header">
			<h3 class="title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> <span class="portfolio-subtitle"><?php the_field( 'portfolio_subtitle' ); ?></span></a>
			</h3>
		</header> <!-- end article header -->
	</div>

</article> <!-- end article -->

	