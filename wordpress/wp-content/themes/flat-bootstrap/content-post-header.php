<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template used for displaying single post header meta (posted on, by, etc.)
 *
 * @package flat-bootstrap
 */
?>



<header class="entry-header">
	<div class="entry-meta">
	
		<?php if ( !is_single() AND !is_page() ) : ?>
			<div class="post-list-image" onclick=window.open("<?php the_permalink(); ?>") style="height:422px; width:100%; background-image: url(<?php echo catch_that_image() ?>)">
				<div class="post-list-item"><?php echo '<h2 class="header-image-caption">' . the_title() . '</h2>'; ?>
				</div><!-- .cover-image-overlay or .section-image-overlay -->
			</div><!-- .cover-image or .section-image <--></-->
		<?php endif; ?>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->
