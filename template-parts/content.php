<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- background image -->
	<section class="hero">
		<div class="hero-content">
			<?php if( get_field('hero_image') ): ?>
				<p><?php the_field('hero_image'); ?></p>
			<?php endif; ?>

			<!-- title -->
			<h1><?php the_title(); ?></h1>
			<!-- subheading -->
			<?php if( get_field('subhead') ): ?>
				<p><?php the_field('subhead'); ?></p>
			<?php endif; ?>
			<!-- formatted date -->
			<?php if( get_field('date') ): ?>
				<p><?php the_field('date'); ?></p>
			<?php endif; ?>
		</div>
	</section>
	
	<header class="entry-header">
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // nomadsun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
