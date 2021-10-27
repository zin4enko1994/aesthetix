<?php
/*
Template Name: Template Microdermabrasion
Template Post Type: post
*/
?>
<?php get_header(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-post' );  ?>
<section class="explanation">
    <div class="first-block" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/background/explanation-img.png" alt="explanation background">
        <div class="info">
        Microdermabrasion is a simple and effective form of exfoliation.
            It is considered a mechanical or physical exfoliation using crystals
            to remove the outer layer of dead or damaged skin cells revealing
            a more youthful skin. It is a non-invasive treatment designed to improve the overall texture, tone and clarity of the skin while restoring
            the skin’s elasticity.
        </div>
        <div class="title">TREATMENT EXPLAINED</div>
    </div>
    <div class="second-block" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/background/explanation-img2.png" alt="explanation background">
        <div class="info">
            <p>This type of exfoliation is performed by gently sandblasting the skin with a high pressure flow of ultra fine inert corundum crystal designed to remove the outer most layers of the epidermis followed with a vacuum suction action that removes the crystals. While the crystals are performing the exfoliation, the vacuum suction action taking place is equally important because it is stimulating the lower layers of the skin. Combining skin exfoliation with regenerating</p>
            <p>While the crystals are performing the exfoliation, the vacuum suction action taking place is equally important because it is stimulating the lower layers of the skin. Combining skin exfoliation with regenerating suction, this unique system stimulate subdermal activities that “renew” the anti-aging mechanisms of the skin that slow with age. </p>
        </div>
    </div>
    <div class="third-block" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/background/explanation-img3.png" alt="explanation background">
        <div class="info">
            <p>Microdermabrasion is recommended in a series, the results are cumulative and improve with each treatment.</p>
            <p>Although one microdermabrasion will yield a fresher, smoother looking skin, generally results are realised after the forth, firth or sixth treatment and the average treatment protocol is 4-12 treatment.</p>
            <p>How many treatments might be necessary will depend on the condition of the skin and the needs of the client. Initially, treatments can be performed every 7-10 days or 10-14 days apart. Once the series of treatments is completed it is recommended that monthly maintenance continue in order to maintain the desired result.</p>
        </div>
    </div>
</section>
<section class="pricing">
    <div class="pricing-wrapper">
        <h2>Pricing</h2>
        <ul>
            <li>
                <div class="one">Item</div>
                <div class="two">Face</div>
                <div class="three">Back</div>
            </li>
            <li>
                <div class="one">Price per session</div>
                <div class="two">£45</div>
                <div class="three">£75</div>
            </li>
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
