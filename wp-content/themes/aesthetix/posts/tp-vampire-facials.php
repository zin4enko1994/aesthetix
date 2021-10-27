<?php
/*
Template Name: Template VAMPIRE FACIALS
Template Post Type: post
*/
?>
<?php get_header(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-post' );  ?>
<section class="facelift" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/background/vampire-facials.png" alt="vampire facials background">
    <div class="text-block">
        <h3>THE VAMPIRE FACELIFT</h3>
        <p>Using your own blood to rejuvenate your skin is the latest procedure that we are providing.</p>
        <h3>PRP TREATMENTS FOR FACE</h3>
        <p>During this procedure, we will use your own platelets present in your blood and inject them back into the skin. </p>
        <p>Those promoting PRP say it should:</p>
        <ul>
            <li>Improve the appearance of wrinkles, scars and stretch marks</li>
            <li>Rejuvenate the under-eye area</li>
            <li>Tighten stubborn open pores</li>
            <li>Plump and volumise</li>
        </ul>
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
