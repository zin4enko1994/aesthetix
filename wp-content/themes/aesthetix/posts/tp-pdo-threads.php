<?php
/*
Template Name: Template PDO threads
Template Post Type: post
*/
?>
<?php get_header(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-post' );  ?>
<section class="threading">
    <div class="threading-wrap">
        <div class="item">
            <h2>THREADING</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/images/threading-img.png" alt="threading image">
        </div>
        <div class="item">
            <p>Using Honey Derma PDO threads is a fast and safe, natural thread lifting treatment</p>
            <p>PDO threads are a ‘non-surgical’ face + neck lift.</p>
            <p>This minimally invasive procedure uses dissolvable PDA(Polydioxanone), a material used in medicine for many years, mainly in surgery.  It is inserted using a needle or cannula.</p>
            <p>PDO assists with stimulating the production of new collagen in the skin, vital for creating youthful looking skin</p>
            <p>Effective in facial lifting + decrease in appearance of wrinkles through self-stimulation of cells</p>
            <p>No interruption in daily life and no side effects or worries about removal as is fully dissolved by the body</p>
        </div>

    </div>
    <div class="threading-list">
        <h3>WHAT CAN BE TREATED?</h3>
        <ul>
            <li>Fine lines + wrinkles</li>
            <li>Lips and around the mouth (marionette lines)</li>
            <li>Sagging chin or cheeks</li>
            <li>Fine lines around eyes</li>
            <li> Nasolabial folds (smile lines)</li>
        </ul>
    </div>
</section>
<?php get_template_part( 'template-part/map' );  ?>
<?php get_footer(); ?>
