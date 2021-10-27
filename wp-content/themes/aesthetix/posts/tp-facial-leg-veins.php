<?php
/*
Template Name: Template FACIAL/LEG VEINS & ROSACEA
Template Post Type: post
*/
?>
<?php $acf_fields = get_fields(); ?>
<?php get_header(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-post' );  ?>
<section class="block-info" style="background-image: url(<?php echo get_field('background_block') ['url'] ?>">
    <div class="text">
        <div class="item">
            <p>Spider veins (telangiectasia) are small (1mm diameter), superficial purple or red broken dilated capillaries often irregular in shape; similar to a spider’s web.</p>
            <p>Telangiectasia may appear anywhere on the body, but are more commonly found on the face and legs. Reticular veins are the deeper, thicker (2-3mm diameter) darker veins found on face, thighs and lower legs. Reticular (feeder) veins are larger than spider veins and by eliminating reticular veins will in turn help to reduce spider veins.</p>
            <p>Varicose veins are lumpy, swollen veins that protrude above the skin’s surface. Generally found on the legs, varicose veins are the result of faulty vein valves or weak vein walls.</p>
        </div>
        <div class="item">
            <p>The veins in the legs have the toughest job of carrying blood back to the heart. They endure the most pressure; pressure that can overcome the strength of these one-way valves. The force of gravity, and the task of carrying the blood from the bottom of the body up to the heart make the legs the primary location for varicose and spider veins.</p>
            <p>Rosacea is a condition involving the face that results in a ‘blush’ or redness and progresses from intermittent to consistent. It is associated with prominent blood vessels, open pores and skin eruption similar to acne. Symptoms usually commence between the ages of 30 to 50.</p>
        </div>
    </div>
</section>
<section class="explained">
    <div class="wrapper">
        <div class="text">
            <h3><?php echo $acf_fields['title'] ?></h3>
            <div class="description"><?php echo $acf_fields['description'] ?></div>
        </div>
        <div class="img" style="background-image: url(<?php echo get_field('explained_block') ['url'] ?>"></div>
    </div>
</section>
<section class="pricing">
    <div class="pricing-wrapper">
        <h2>Pricing</h2>
        <ul>
            <li>
                <div>Facial veins/rosacea</div>
                <div>Per Session</div>
            </li>
            <?php
                $block_item = get_field('pricing_list_first');
                if( isset($block_item) && !empty($block_item) ){
                    foreach($block_item as $key => $value){
                    ?>
                    <li>
                        <div> <?php echo $value['procedure'] ?></div>
                        <div> £<?php echo $value['price'] ?></div>
                    </li>
                    <?php
                    }
                }
            ?>



        </ul>
    </div>
    <div class="pricing-wrapper">
        <ul>
            <li>
                <div>Leg Veins</div>
                <div>Price</div>
            </li>
            <?php
                $block_item = get_field('pricing_list_second');
                if( isset($block_item) && !empty($block_item) ){
                    foreach($block_item as $key => $value){
                    ?>
                    <li>
                        <div> <?php echo $value['procedure'] ?></div>
                        <div> £<?php echo $value['price'] ?></div>
                    </li>
                    <?php
                    }
                }
            ?>
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
			'category_name' => 'vein-artery-removal',
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
