<?php
/*
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hekkens
 * @subpackage Hekkens
 * @since Hekkens 1.0
 */

	get_header();
?>

<!-- About post -->
<section id="work_post">
	<div class="container-fluid">
		<div class="row">

		

			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="featured" >
				<?php the_post_thumbnail( 'full' ); ?>
				<div class="info">
					<p class="title"><?php the_field('featured_text_one'); ?></p>
					<p class="excerpt"><?php the_field('featured_text_two'); ?></p>
				</div>
			</a> 
		
	
		</div>
	</div>
</section>
<!-- /About post -->
<?php
get_footer();
?>