<?php
/*
Template Name: Template Kleresca acne treatment
Template Post Type: post
*/
?>
<?php $post_field = get_fields(); ?>
<?php get_header(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-post' );  ?>
<section class="block-wrapper">
    <div class="first" style="background-image: url(<?php echo get_field('first_background') ['url'] ?>);">
		<div class="text">
			<?php echo $post_field['first_text'] ?>
		</div>
	</div>
	<div class="second">
		<div class="text">
			<?php echo $post_field['second_text'] ?>
		</div>
		<div class="image" style="background-image: url(<?php echo get_field('second_image') ['url'] ?>);"></div>
	</div>
	<div class="third">
		<div class="item">
			<div class="text"><?php echo $post_field['third_text_one'] ?></div>
			<div class="image" style="background-image: url(<?php echo get_field('third_image_one') ['url'] ?>);"></div>
		</div>
		<div class="item">
			<div class="image" style="background-image: url(<?php echo get_field('third_image_two') ['url'] ?>);"></div>
			<div class="text"><?php echo $post_field['third_text_two'] ?></div>
		</div>
	</div>
</section>
<section class="related-services">
	<h2 class="block-title">Related services : <span>services</span> </h2>
	<div class="wrapper">
		<?php
		$currentID = get_the_ID();
		$args = array(
			'post_type'  => 'post',
			'category_name' => 'facial-complexion-skin-enhancement',
			'orderby'  => 'date',
			'order'    => 'DESC',
			'post__not_in' => array(
				$currentID)

		);
		$query = new WP_Query( $args );
		?>
		<?php
		if (isset($query->posts) && !empty($query->posts) ) {
			foreach($query->posts as $key => $value) {
				$acf_fields = get_fields($value ->ID);

				?>
				<div class="item">
					<div class="img" style="background-image: url(<?php echo get_the_post_thumbnail_url($value) ?>)" alt="Slider image"></div>
					<div class="wrap">
						<h5><?php echo $value->post_title ?></h5>
						<div class="line"></div>
						<p><?php echo $acf_fields['preview'] ?></p>
						<div class="button">
							<div class="info">
								<span><?php echo $acf_fields['price'] ?></span>
								<span><?php echo $acf_fields['time'] ?></span>
							</div>
							<div class="link">
								<a href="<?php echo get_permalink($value) ?>">read more</a>
							</div>
						</div>
					</div>
				</div>
				<?php


			}
		}
		?>
	</div>
</section>
<?php get_template_part( 'template-part/find-us' );  ?>
<?php get_footer(); ?>
