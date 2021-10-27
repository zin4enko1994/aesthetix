<?php
/*
Template Name: Template META therapy
Template Post Type: post
*/
?>
<?php get_header(); ?>
<?php $post_field = get_fields(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-book-post' );  ?>
<section class="therapy">
    <div class="alternative" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/background/therapy-bg1.png" alt="alternative background">
        <div class="info">
            <h3 class="pink">THE FACELIFT ALTERNATIVE</h3>
            <p>Looking for something more than skin care?</p>
            <p> Meta Therapy could be the answer. </p>
            <p>The latest treatment for skin improvement with great results. Non-surgical and painless facelift alternative direct from Holland. </p>
            <h3>WHAT IS META THERAPY? </h3>
            <span>META therapy = Medical Esthetical Tissue Activating therapy </span>
            <p> It is a new method of rejuvenating and firming your skin reducing the appearance of wrinkles. It can be performed on the entire face, neck, acne scarring or any other specific spots you may wish to improve.</p>
        </div>
    </div>
    <div class="dermabrasion" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/background/therapy-bg2.png" alt="dermabrasion background">
        <div class="info">
            <h3 class="pink">100% NATURAL & 100% SAFE</h3>
            <p>As this is not an invasive procedure there is no risk of infection or scarring.</p>
            <p> After treatment, you may show some signs of redness but since Meta Therapy does not break the skin it will reduce in a few hours and you will be able to apply your normal daily routines the next day.</p>
            <h3>COMBINE WITH MICRO DERMABRASION</h3>
            <p>We have found that combining the two treatments works best. Microdermabrasion removes the dead skin before the refreshing of the deeper layers with Meta therapy.</p>
        </div>
            
    </div>
</section>
<section class="watch">
    <div class="block">
        <div class="info">
            <h3><?php echo $post_field['video_title'] ?></h3>
            <p><?php echo $post_field['video_description'] ?></p>
        </div>
        <iframe width="863" height="485" src="<?php echo $post_field['video_link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
<?php get_template_part( 'template-part/map-section' );  ?>
<?php get_footer(); ?>