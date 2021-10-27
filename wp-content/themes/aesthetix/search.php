<?php get_header(); ?>
<h1><?php echo 'Search results:' . '<span>' . get_search_query() . '</span>'; ?></h1>
<div class="wrapper">
	<?php
	if (have_posts()) :
		while (have_posts()) : the_post();
			?>
			<div class="item" id="posts">
				<div class="block">
					<a href="<?php the_permalink() ?>">
						<h2><?php the_title() ?></h2>
						<?php the_post_thumbnail(); ?>
						<div class="date">Date Added: <?php the_date() ?></div>
					</a>
				</div>
			</div>
		<?php endwhile; ?>
	<?php
	else :
		echo "Sorry, no results were found for your result.";
	endif;
	?>
</div>

<footer class="footer">
	<div class="hours">

		<div class="block">
			<!--            <h4>OPENING HOURS</h4>-->
			<ul>
				<h4>OPENING HOURS</h4>
				<li>Monday: 8:00am – 9:00pm</li>
				<li>Thursday: 8:00am – 5:00pm</li>
				<li>Tuesday: 8:00am – 5:00pm</li>
				<li>Friday: 8:00am – 5:00pm</li>
				<li>Wednesday: 8:00am – 9:00pm</li>
				<li>Saturday: By Appointment</li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/img/images/award.png" alt="">
		</div>
		<nav class="nav">
			<div class="logo">
				<a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/logo.png" alt="">
				</a>
			</div>
			<div class="menu-footer">
				<?php wp_nav_menu($args = array(
					'theme_location'  => 'bottom', // область темы
					'menu'            => '', // какое меню нужно вставить (по порядку: id, ярлык, имя)
					'container'       => 'ul', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
					'container_class' => 'menu-{menu slug}-container', // css-класс блока
					'container_id'    => '', // id блока
					'menu_class'      => 'menu', // css-класс меню
					'menu_id'         => '', // id меню
					'echo'            => true, // вывести или записать в переменную
					'fallback_cb'     => 'wp_page_menu', // какую функцию использовать если меню не существует, укажите false, чтобы не использовать ничего
					'before'          => '', // текст или html-код, который нужно вставить перед каждым <a>
					'after'           => '', // после </a>
					'link_before'     => '', // текст перед анкором ссылки
					'link_after'      => '', // после анкора и перед </a>
					'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>', // HTML-шаблон
					'depth'           => 0 // количество уровней вложенности
				)); ?>
			</div>

		</nav>
	</div>
	<div class="copyring">

		<div class="allright">
			Website last updated: <?php echo date('Y'); ?>
		</div>
		<div class="webdes">
			<a href="https://www.somnowellmarketing.com/">Website designed and built by Somnowell Marketing</a>
		</div>
	</div>
</footer>

</body>
</html>

