<?php
/*
Template Name: Template Fillers
Template Post Type: post
*/
?>
<?php get_header(); ?>
<?php $fillers_field = get_fields(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-book-post' );  ?>
<section class="treatment">
    <h2><?php echo $fillers_field['treatment_title'] ?></h2>
    <div class="treatment-wrapper">
    <?php 
            $block_item = get_field('treatment_item');
            if( isset($block_item) && !empty($block_item) ){
                foreach($block_item as $key => $value){
                ?>
                 <div class="item">
                     <div class="img" style="background-image: url(<?php echo $value['image'] ?>);" alt="treatment image"></div>
                    <p><?php echo $value['description'] ?></p>
                </div>
                <?php
                }
            }
        ?>
       
    </div>
    <div class="dermal">
        <div class="wrapper">
        <h3>DERMAL FILLERS</h3>
        <div class="dermal-block">
            <div class="item">
                Dermal fillers are classed as medical devices, also known as soft tissue fillers. They consist of a gel formulation which can be injected into the skin or just beneath it to restore lost volume and effectively smooth out lines and wrinkles. The product range we use is Restylane®.
            </div>
            <div class="item">
                They are very different to wrinkle relaxing injections. Dermal fillers, such as Restylane® are most frequently used to ‘fill’ facial lines, wrinkles and folds or add volume deep into the skin to enhance features such as the lips. Both dermal fillers and wrinkle smoothing injections can be combined in a single treatment
            </div>
        </div>
        </div>
    </div>
</section>
<section class="video-block">
    <div class="container">
        <div class="video">
            <iframe width="560" height="315" src="<?php echo $fillers_field['video_link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="text">
            <h2><?php echo $fillers_field['video_title'] ?></h2>
            <p><?php echo $fillers_field['video_description'] ?></p>
        </div>
    </div>
</section>
<section class="pricing">
    <div class="pricing-wrapper">
        <h2><?php echo $fillers_field['pricing_title'] ?></h2>
        <ul>
            <?php 
                $price_item = get_field('pricing_list');
                if( isset($price_item) && !empty($price_item) ){
                    foreach($price_item as $key => $value){
                    ?>
                    <li>
                        <div class="name"><?php echo $value['name_service'] ?></div>
                        <div class="price"><?php echo $value['price'] ?></div>
                    </li>
                    <?php
                    }
                }
            ?>
        </ul>
    </div>
</section>
<?php get_template_part( 'template-part/map-section' );  ?>
<?php get_footer(); ?>