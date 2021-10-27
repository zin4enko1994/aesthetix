<?php
/*
Template Name: Template Fat freezing/melting
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
	<div class="first">
		<div class="text">
			<h2><?php echo $post_field['first_title'] ?></h2>
			<?php echo $post_field['first_text'] ?>

		</div>
		<div class="image" style="background-image: url(<?php echo get_field('first_image') ['url'] ?>);"></div>
	</div>
	<div class="second">
		<div class="image" style="background-image: url(<?php echo get_field('second_image') ['url'] ?>);"></div>
		<div class="text">
			<h2><?php echo $post_field['second_title'] ?></h2>
			<?php echo $post_field['second_text'] ?>
		</div>

	</div>
	<div class="third" style="background-image: url(<?php echo get_field('third_background') ['url'] ?>);">

		<div class="text">
			<h2><?php echo $post_field['third_title'] ?></h2>
			<?php echo $post_field['third_text'] ?>
		</div>
	</div>
	<div class="fourth" style="background-image: url(<?php echo get_field('fourth_background') ['url'] ?>);">
		<div class="text"><?php echo $post_field['fourth_text'] ?></div>
	</div>
</section>
<?php get_template_part( 'template-part/find-us' );  ?>
<?php get_footer(); ?>
