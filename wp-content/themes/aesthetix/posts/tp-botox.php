<?php
/*
Template Name: Template Botox
Template Post Type: post
*/
?>
<?php get_header(); ?>
<?php $botox_field = get_fields(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-post' );  ?>
<section class="article-wrapper">
    <div class="article-block">
        <div class="item">
            <span class="headline-one">FROWN<br> LINES & CROW’S FEET</span>
            <p>
                Muscle relaxing injections work by preventing nerve impulses from reaching the muscle; therefore the muscles “relax”.
            </p>
            <p>
                These injections are the most common facial cosmetic treatment currently used worldwide and can be used to treat and smooth out wrinkles on the forehead (Frown Lines), eye area (Crows Feet), neck lines and even lift the eyebrows.
            </p>
            <p>
                As part of facial rejuvenation procedures, these muscle relaxing injections have now been used for many years by both women and men. Muscle relaxing products are routinely used by celebrities to enhance their looks and preserve appearance, however these products are now available to anyone who wishes to restore or maintain a youthful look. Everyone can now have a slice of Hollywood!
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/images/article-img.png" alt="article-img">
            <span class="headline-two">ARE THERE ANY<br> SIDE EFFECTS?</span>
            <p>The most common minor side effects are tenderness or mild bruising around the injection site. In a very small percentage of cases there may be a complication called ptosis or drooping of the eyelid which may last a few weeks.</p>
        </div>
        <div class="item">
            <span class="headline-two">TREATMENT<br> EXPLAINED</span>
            <p>
                Muscle relaxing products are injected with a very fine needle into the hyperactive muscle. It works on the nerve endings preventing the release of chemical messages or neuron transmitters, causing the muscle to become temporarily paralysed.
            </p>
            <p>
                The effects can usually be seen within 10-14 days. Limiting the muscle activity softens and smoothes out the appearance of deep lines and wrinkles. The injections are almost painless and an anaesthetic cream can be applied to the skin for 20 minutes before injections if preferred.
            </p>
            <p>
                We use several commercially available products based on what is currently in vogue and carries the best evidence for use.
            </p>
            <span class="headline-one">How long will the <br>effects last?</span>
            <p>
                Usually between 4-8 months but this depends on the number of previous treatments, the treatment area and the individual’s response.
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/images/article-img2.png" alt="article-img">
        </div>
    </div>
</section>
<section class="video-block">
    <div class="wrap">
        <div class="title"><?php echo $botox_field['video_title'] ?></div>
        <div class="description"><?php echo $botox_field['video_description'] ?></div>
        <iframe width="100%" height="450" src="https://www.youtube.com/embed/z_rsf6CpCqY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
<!--    <div class="tabl">-->
<!--        <div class="pricing">-->
<!--            <h4>PRICING</h4>-->
<!--            <span>Muscle relaxing injections is priced per third of the face</span>-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <div class="name">Item</div>-->
<!--                    <div class="one">1/3 of face</div>-->
<!--                    <div class="two">2/3 of face</div>-->
<!--                    <div class="three">3/3 of face</div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="name">Price</div>-->
<!--                    <div class="one">--><?php //echo $botox_field['first'] ?><!--</div>-->
<!--                    <div class="two">--><?php //echo $botox_field['second'] ?><!--</div>-->
<!--                    <div class="three">--><?php //echo $botox_field['third'] ?><!--</div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="after">-->
<!--            <h4>What can I do after treatment?</h4>-->
<!--            <p>Do not lie down for at least 6 hours.Do not rub the treated area.Air travel is not advisable for 7 days post treatment.</p>-->
<!--        </div>-->
<!--        <div class="info">-->
<!--            <h4>Any questions?</h4>-->
<!--            <span>-->
<!--                <p>Give us a call on</p>-->
<!--                <p>Cambridge: 01223 <br> 790723</p>-->
<!--                <p>Royston: 01763 580067</p>-->
<!--            </span>-->
<!--        </div>-->
<!--    </div>-->
    <div style="z-index: 2;" class="pricing">
        <div class="pricing-wrapper">
            <h2>Pricing</h2>
            <ul>
                <li>
                    <div>Procedure</div>
                    <div>Price</div>
                </li>
                <?php
                $block_item = get_field('botox_price');
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
    </div>
</section>
<section class="related-services">
    <h2 class="block-title">Related services : <span>services</span> </h2>
    <div class="wrapper">
		<?php
		$currentID = get_the_ID();
		$args = array(
			'post_type'  => 'post',
			'category_name' => 'facial-fine-lines-and-wrinkles-softening',
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
