<?php
/*
Template Name: Template Team
Template Post Type: page
*/
?>
<?php get_header(); ?>
<section class="main">
    <div class="container">
        <h1 class="title"><span><?php the_title(); ?></span> <?php the_title(); ?></h1>
    </div>
</section>
<section class="team-list">
    <div class="team">
        <?php
            $block_item = get_field('team');
            if( isset($block_item) && !empty($block_item) ){
                foreach($block_item as $key => $value){
                ?>
                    <div class="item">
                        <div class="wrap">
                            <a class="phone" href="tel:<?php echo $value['phone_number'] ?>"></a>
                            <div class="photo" style="background-image: url(<?php echo $value['photo'] ?>);">
<!--                                <img src="--><?php //echo $value['photo'] ?><!--" alt="--><?php //echo $value['name'] ?><!--">-->
                            </div>
                            <div class="info">
                            <div class="name"><?php echo $value['name'] ?></div>
                                <div class="position"><?php echo $value['position'] ?></div>
                                <div class="description"><?php echo $value['description'] ?></div>
	                            <a href="#" data-popup="popup-<?php echo $key ?>" class="more">Read more</a>
	                            <div class="full-description" id="popup-<?php echo $key ?>">
		                            <div class="text">
			                            <div class="close">
			                            </div>
			                            <div>
				                            <h3><?php echo $value['name'] ?></h3>
				                            <?php echo $value['description'] ?>
			                            </div>
		                            </div>
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
<?php get_template_part( 'template-part/form-page' );  ?>
<section class="contact">
        <p class="find">FIND US <span>FIND US</span> </p>
        <div class="wrapper">
            <div class="item">
                <div class="block">
                    <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/antwerp-house.png" alt="Antwerp House">

                    </div>
                    <p>Antwerp House</p>
                </div>
                <div class="map-item">
                    <p class="city">Antwerp House</p>
                    <p>Cambridge | 01223 247690</p>
                    <a href="https://www.antwerphousedentistry.co.uk/" class="map-img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/antwerp-map.png" alt="Antwerp House"></a>
                </div>
            </div>
            <div class="item">
                <div class="block">
                    <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/trumpington-street.png" alt="Trumpington Street">

                    </div>
                    <p>Trumpington Street</p>
                </div>
                <div class="map-item">
                    <p class="city">Trumpington Street</p>
                    <p>Cambridge | 01223 367870</p>
                    <a href="https://www.trumpingtonstreetdentistry.co.uk/" class="map-img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/trumpington-map.png" alt="Antwerp House"></a>
                </div>
            </div>
            <div class="item">
                <div class="block">
                    <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/falkner-house.png" alt="Falkner House">

                    </div>
                    <p>Falkner House</p>
                </div>
                <div class="map-item">
                    <p class="city">Falkner House</p>
                    <p>Sawston | 01223 839520</p>
                    <a href="https://www.falknerhousedentistry.co.uk/" class="map-img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/falkner-map.png" alt="Antwerp House"></a>
                </div>
            </div>
            <div class="item">
                <div class="block">
                    <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/newmarket-road-dentistry.png" alt="Newmarket Road Dentistry">

                    </div>
                    <p>Newmarket Road Dentistry</p>
                </div>
                <div class="map-item">
                    <p class="city">Newmarket Road Dentistry</p>
                    <p>Cambridge | 01223 321855</p>
                    <a href="https://www.newmarketroaddentistry.co.uk/" class="map-img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/clock-house-linton-map.png" alt="Antwerp House"></a>
                </div>
            </div>
            <div class="item">
                <div class="block">
                    <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/clock-house-linton.png" alt="Clock House Linton">

                    </div>
                    <p>Clock House Linton</p>
                </div>
                <div class="map-item">
                    <p class="city">Clock House Linton</p>
                    <p>Linton | 01223 892899</p>
                    <a href="https://www.clockhousedentistry.co.uk/" class="map-img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/newmarket-road-dentistry-map.png" alt="Antwerp House"></a>
                </div>
            </div>
        </div>

    </section>
<?php get_footer(); ?>


