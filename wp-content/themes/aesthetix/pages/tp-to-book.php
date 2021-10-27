<?php
/*
Template Name: Template Book an Appointment
Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template-part/form-page' );  ?>
<section class="hours">
    <h2>OPENING HOURS</h2>
    <div class="hours-list">
        <ul>
        <?php
			$hours = get_field('opening_hours');
			if( isset($hours) && !empty($hours) ){
				foreach($hours as $key => $value){
				?>
					<li>
						<div class="day"><?php echo $value['day'] ?></div>
						<div class="hour"><?php echo $value['hours'] ?></div>
					</li>
			<?php
					}
				}
		?>
        </ul>
    </div>
</section>
<section class="maps-list">
    <div class="item">
        <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/maps/1.png" alt="Item list"></div>
        <a href="https://www.antwerphousedentistry.co.uk">FIND US IN CAMBRIDGE</a>
    </div>
    <div class="item">
        <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/maps-item.png" alt="Item list"></div>
        <a href="https://www.trumpingtonstreetdentistry.co.uk">FIND US IN CAMBRIDGE</a>
    </div>
    <div class="item">
        <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/maps/2.png" alt="Item list"></div>
        <a href="https://www.newmarketroaddentistry.co.uk">FIND US IN CAMBRIDGE</a>
    </div>
    <div class="item">
        <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/maps/3.png" alt="Item list"></div>
        <a href="#">FIND US IN CAMBRIDGE</a>
    </div>
    <div class="item">
        <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/maps/4.png" alt="Item list"></div>
        <a href="#">FIND US IN CAMBRIDGE</a>
    </div>
    <div class="item">
        <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/images/maps/5.png" alt="Item list"></div>
        <a href="https://www.clockhousedentistry.co.uk">FIND US IN CAMBRIDGE</a>
    </div>
</section>
<?php get_footer(); ?>
