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
	<section class="hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php if( get_field('hero_image') ): ?>
		background-image: url(<?php the_field('hero_image'); ?>);
	<?php endif; ?>">
		<div class="hero-content white tc">
			<!-- title -->
			<h1 class="bold mt0 mb2 ttu hero-heading"><?php the_title(); ?></h1>
			<!-- subheading -->
			<?php if( get_field('subhead') ): ?>
				<p class="mb6 mt0 white ttu hero-subhead"><?php the_field('subhead'); ?></p>
			<?php endif; ?>
			<!-- formatted date -->
			<?php if( get_field('date') ): ?>
				<p class="f6 bold ma0 white ttu tracked date"><?php the_field('date'); ?></p>
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
