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
<?php get_template_part( 'template-part/form-book-post' );  ?>
<section class="facelift" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/background/vampire-facials.png" alt="vampire facials background">
    <div class="text-block">
        <h3>THE VAMPIRE FACELIFT</h3>
        <p>Using your own blood to rejuvenate your skin is the latest procedure that we are providing.</p>
        <h3>PRP TREATMENTS FOR FACE</h3>
        <p>During this procedure, we will use your own platelets present in your blood and inject them back into the skin. </p>
        <span>Those promoting PRP say it should:</span>
        <ul>
            <li>Improve the appearance of wrinkles, scars and stretch marks</li>
            <li>Rejuvenate the under-eye area</li>
            <li>Tighten stubborn open pores</li>
            <li>Plump and volumise</li>
        </ul>
    </div>
</section>
<?php get_template_part( 'template-part/map-section' );  ?>
<?php get_footer(); ?>