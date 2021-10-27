<?php
// Add Body Class
add_filter( 'body_class','my_class_names' );
function my_class_names( $classes ) {
	// добавим класс 'class-name' в массив классов $classes
	if( is_page() )
		$classes[] = '';
	return $classes;
}
//Add thumbnails
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}
// Add Menus
register_nav_menus(array(
	'top'    => 'Header menu',
	'bottom' => 'Footer menu'
));
// Add gallery post
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('gallery', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Gallery', // основное название для типа записи
			'singular_name'      => 'Post name', // название для одной записи этого типа
			'add_new'            => 'Add  new post', // для добавления новой записи
			'add_new_item'       => 'Adding post', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Editing post', // для редактирования типа записи
			'new_item'           => 'New post', // текст новой записи
			'view_item'          => 'View post', // для просмотра записи этого типа.
			'search_items'       => 'Search post', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Gallery', // название меню
		),
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'capability_type'   => 'post',
		// 'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title','thumbnail', 'page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}
?>
