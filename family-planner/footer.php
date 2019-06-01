<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Family_Planner
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
<!-- 		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'family-planner' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'family-planner' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'family-planner' ), 'family-planner', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div> --><!-- .site-info -->
		<?php wp_nav_menu( ['theme_location' => 'footer-menu' , 'container_class' => 'fp_footer_nav'] ); ?>
		<?php wp_nav_menu( ['theme_location' => 'footer-social-menu' , 'container_class' => 'fp_footer_social_nav'] ); ?>
		
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
