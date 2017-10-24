<?php
/**
 *  Displays archive entries with featured image, tag/category (etc) and short excerpt
 */

$page_background = get_field( 'page_background' );
?>



<article id="post-<?php the_ID(); ?>" <?php post_class( $page_background ); ?> role="article">
	<div class="container centered">
		<section class="featured-image" itemprop="articleBody">
			<?php the_post_thumbnail( 'full' ); ?>
		</section> <!-- end article section -->
		<header class="article-header">
			<h3 class="title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h3>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		</header> <!-- end article header -->
	</div>

</article> <!-- end article -->

	