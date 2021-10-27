<?php
/*
Template Name: Template Laser Hair Removal
Template Post Type: post
*/
?>
<?php $post_field = get_fields(); ?>
<?php get_header(); ?>
<section class="main">
	<div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part('template-part/form-post'); ?>
<section class="block-wrapper">
	<div class="first" style="background-image: url(<?php echo get_field('first_background') ['url'] ?>);">
		<div class="text">
			<?php echo $post_field['first_text'] ?>
		</div>
	</div>
	<div class="second">
		<div class="item">
			<div class="image" style="background-image: url(<?php echo get_field('first_image') ['url'] ?>);"></div>
			<div class="text"><?php echo $post_field['first_text_one'] ?></div>
		</div>
		<div class="item">
			<div class="text"><?php echo $post_field['second_text_two'] ?></div>
			<div class="image" style="background-image: url(<?php echo get_field('second_image') ['url'] ?>);"></div>
		</div>
	</div>
</section>
<?php get_template_part( 'template-part/find-us' );  ?>
<?php get_footer(); ?>
