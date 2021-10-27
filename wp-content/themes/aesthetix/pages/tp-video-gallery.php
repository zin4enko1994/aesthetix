<?php
/*
Template Name: Template Video Gallery
Template Post Type: page
*/
?>
<?php get_header(); ?>
<section class="main">
	<div class="container">
		<h1 class="title"><span><?php the_title(); ?></span> <?php the_title(); ?></h1>
	</div>
</section>
<section class="video-list">
	<div class="wrapper">

		<?php
			$link = get_field('link_to_you');
			if( isset($link) && !empty($link) ){
				foreach($link as $key => $value){
					?>
					<div class="item">
						<iframe width="100%" height="350px" src="<?php echo $value['link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<?php
				}
			}
		?>
	</div>
</section>
<?php get_footer(); ?>
