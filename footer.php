<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fmovie
 */
?>
</div><!-- #body -->
<footer id="colophon" class="site-footer">
	<div class="top">
		<div class="container">
            <?php get_template_part( 'template-parts/footer/footer-about' ); ?>
            <?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
			<div class="clearfix"></div>
		</div>
	</div>
</footer><!-- #footer -->
<?php wp_footer(); ?>
</body>
</html>