<?php
/*
Template Name: Template Skin peel
Template Post Type: post
*/
?>
<?php get_header(); ?>
<?php $botox_field = get_fields(); ?>
<section class="main">
    <div class="template-title"><span><?php the_title(); ?></span> <?php the_title(); ?></div>
</section>
<?php get_template_part( 'template-part/form-post' );  ?>

<?php get_template_part( 'template-part/find-us' );  ?>
<?php get_footer(); ?>
