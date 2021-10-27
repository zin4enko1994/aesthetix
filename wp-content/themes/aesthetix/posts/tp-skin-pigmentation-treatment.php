<?php
/*
Template Name: Template Skin pigmentation treatment
Template Post Type: post
*/
?>
<?php get_header(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-post' );  ?>
<section class="block-wrapper">
    <?php
        $block_item = get_field('list_block');
        if( isset($block_item) && !empty($block_item) ){
            foreach($block_item as $key => $value){
            ?>
            <div class="item" style="background-image: url(<?php echo $value['images'] ?>" alt="Heading background">
                <div class="text">
                    <h2><?php echo $value['title'] ?></h2>
                    <?php echo $value['description'] ?>
                </div>
            </div>
            <?php
            }
        }
    ?>
</section>
<section class="pricing">
    <div class="pricing-wrapper">
        <h2>Pricing</h2>
        <ul>
            <li>
                <div>Procedure</div>
                <div>Price</div>
            </li>
            <?php
                $block_item = get_field('pricing_block');
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
<?php get_template_part( 'template-part/map' );  ?>
<?php get_footer(); ?>
