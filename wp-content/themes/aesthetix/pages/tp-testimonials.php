<?php
/*
Template Name: Template Testimonials
Template Post Type: page
*/
?>
<?php get_header(); ?>
    <section class="main">
        <div class="container">
            <h1 class="title"><span><?php the_title(); ?></span> <?php the_title(); ?></h1>
        </div>
    </section>
    <section class="testimonials-slider">
        <div class="prev"></div>
        <div class="slider-center">
            <?php
            $item = get_field('slider_list');
            if( isset($item) && !empty($item) ){
                foreach($item as $key => $value){
                    ?>
                    <div class="item">
                        <div class="block">
                            <div class="rating">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="text"><?php echo $value['review_text'] ?>
                            </div>
                            <div class="name"><?php echo $value['review_name'] ?></div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="next"></div>
    </section>
<?php get_footer(); ?>
