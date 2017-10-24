<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="main" role="main">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'single-portfolio' ); ?>
					<?php get_template_part( 'parts/sections' ); ?>
					
				<?php endwhile;
				endif; ?>



			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>