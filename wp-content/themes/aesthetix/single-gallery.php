
<?php get_header(); ?>
<section class="main"
         style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/img/background/testimonials-main.png"
         alt="Pricing background">
    <div class="container">
        <h1 class="title"><?php the_title(); ?></h1>
    </div>
</section>
<section class="gallery-slider">
    <div class="wrapper">
	    <?php
            $item = get_field('slider');
            if( isset($item) && !empty($item) ){
	    ?>
            <div class="prev"></div>
            <div class="slider slider-for">
            <?php
            $price = get_field('slider');
            if( isset($price) && !empty($price) ){
                foreach($price as $key => $value){
                    ?>
                    <div class="item" style="background-image: url('<?php echo $value['image'] ?>')">
                    </div>
                    <?php
                }
            }
            ?>
        </div>
            <div class="next"></div>
            <div class="slider slider-nav">
            	<a href="/video-gallery/" class="video-link item"></a><?php
                foreach($item as $key => $value){
                    ?>
                    <div class="item" style="background-image: url('<?php echo $value['image'] ?>')">
                    </div>
                    <?php
                }
            }
            else {
            	?>
	            <p>No Items Found</p><?php
            }
            ?>

        </div>
        <a href="/video-gallery/" class="video-link item mobile"></a>
    </div>
</section>
<?php get_footer(); ?>
