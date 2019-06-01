<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Family_Planner
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'family_planner' ); ?></button>
			<div class="nav-logo">
				<img src=<?php echo get_stylesheet_directory_uri() . "/img/logo.png"; ?> alt="Family Planner Logo">
			</div>	

			<div class= "nav-tittle">
				<h4>Simplified</h4>
				<h4>Organized</h4>
				<h4>Family Time</h4>
			</div>
			
			
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php wp_nav_menu( ['theme_location' => 'side-nav'] ); ?>
</aside><!-- #secondary -->
