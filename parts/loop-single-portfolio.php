<article id="post-<?php the_ID(); ?>" <?php post_class( 'portfolio-intro' ); ?> >

	<div class="portfolio-overview-text">
		<header class="portfolio-header">
			<h1 class="portfolio-title"><?php the_title(); ?></h1>
			<h3 class="portfolio-subtitle"><?php the_field( 'portfolio_subtitle' ); ?></h3>
		</header> <!-- end article header -->
		<div class="portfolio-summary">
			<?php echo get_the_term_list( $post->ID, 'service', '<ul class="services-list"><li>', '</li><li>', '</li></ul>'); ?>

			<?php if( get_field( 'portfolio_date_completed' ) ): ?>
				<p><strong>Project Completed:</strong> <?php the_field( 'portfolio_date_completed' ); ?></p>
			<?php endif; ?>

			<?php if( get_field( 'portfolio_site_url' ) ):
				$button_text = 'View';
				if( 'browser-frame' == $frame_option || 'browser-frame-no-url' == $frame_option ) {
					$button_text = 'Visit the live site';
				}
				if( 'video-frame' == $frame_option ) {
					$button_text = 'View video';
				}
				?>
				<a href="<?php the_field( 'portfolio_site_url' ); ?>" class="button full"><?php echo $button_text; ?></a>
			<?php endif; ?>
		</div>
	</div>

	<section class="portfolio-featured-image">

		<?php $frame_option = esc_html( get_field( 'featured_image_frame' ) ); ?>

			<div class="project-image <?php echo $frame_option; ?>">

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
				<div class="bg-image" aria-hidden="true"><?php the_post_thumbnail( 'full' ); ?></div>

				<?php

				if( 'video-frame' == $frame_option ) :
					?>
					<svg class="video-container">
						<use xlink:href="#video-bottom" />
					</svg>
				<?php endif; ?>
			</div>

	</section> <!-- /.portfolio-intro -->
</article> <!-- end article .portfolio-intro -->