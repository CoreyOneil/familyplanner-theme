<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Family_Planner
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="entry-title main_title"><?php the_title(); ?></h1>

			<div class="entry-content fp_recipe_pod">
				<?php
					$recipe = pods('fp_recipe', get_the_ID());
					global $post;
					$id=get_the_id();
					$wpdb->ingredients = "{$wpdb->prefix}ingredients";
					$wpdb->cooking = "{$wpdb->prefix}cooking_instructions";
					$ingredients = $wpdb->get_results( $wpdb->prepare("SELECT * FROM {$wpdb->ingredients} WHERE recipeID=%d",$id), $output = ARRAY_A);
					$cooking = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->cooking} WHERE recipeID=%d",$id), $output = ARRAY_A);
				?>
				<div class="recipe_content">
					<dl id="recipe_info"> 
						<dt class="ingredient_name">Ingredients</dt>
						<pre><dd class="ingredient_name"><?php
						foreach($ingredients as $in) {
							echo $in["amount"] . " " . $in["unit"] . "\t\t" . $in["Name"] . " "; ?><br><?php
						} ?></dd></pre>
						<dd><?php the_post_thumbnail(); ?>
						</dd>
						</dl>
						<dt class="cooking_instruction">Cooking Instructions</dt>
						<dd class="cooking_instruction"><?php
						foreach($cooking as $co) {
							echo "*" . $co["time"] . " " . $co["instruction"] . " "; ?><br><?php
						}
						?></dd>
						<dt class="meal_type">Meal Type</dt>
						<dd class="meal_type"><?php echo $recipe->display("fp_meal_type"); error_log(print_r($recipe->field('fp_meal_type'), true)); ?></dd>
					
				
				</div>
			</div>
		<?php
		
			function pod_if_exists($pod, $name) {
				$value = $pod->display($name);
				if($value) {
					return $value;
				} else {
					return "<span class=\"pod-na\">n/a</span>";
				}
			}
		
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
