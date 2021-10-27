
<?php get_header();
$where_im = get_query_var('category_name');
?>

<section class="main">
    <div class="container">
        <h1 class="title"><span>Services</span> Services</h1>
    </div>
</section>
<section class="services-list">
    <div class="wrapper">
        <div class="taxonomy">
		<a href="/aesthetix/services">All</a>
            <?php
                $categories = get_categories( array(
                    'taxonomy'     => 'category',
                    'type'         => 'post',
                    'orderby'      => 'name',
                    'order'        => 'ASC'
                ) );
            ?>
            <?php
                if( $categories ){
                    foreach( $categories as $cat ){
                        if ($cat->slug == $where_im){
                            $menu_active_class = 'active';
                        }
                        else{
                            $menu_active_class = '';
                        }
                        // Данные в объекте $cat

                        // $cat->term_id
                        // echo $cat->name
                        // echo $cat->term_id;
                        // echo get_term_link($cat->term_id, 'category');
                        ?>
                            <a href="<?php echo get_term_link($cat->term_id, 'category'); ?>" class="<?php echo $menu_active_class; ?>">
                                <?php echo $cat->name; ?>
                            </a>
                        <?php
                        // $cat->slug (rubrika-1)
                        // $cat->term_group (0)
                        // $cat->term_taxonomy_id (4)
                        // $cat->taxonomy (category)
                        // $cat->description (Текст описания)
                        // $cat->parent (0)
                        // $cat->count (14)
                        // $cat->object_id (2743)
                        // $cat->cat_ID (4)
                        // $cat->category_count (14)
                        // $cat->category_description (Текст описания)
                        // $cat->cat_name (Рубрика 1)
                        // $cat->category_nicename (rubrika-1)
                        // $cat->category_parent (0)

                    }
                }
            ?>
        </div>
        <div class="list">
            <?php
                $categories = get_the_category();
                $category_id = $categories[0]->cat_ID;
                $args = array(
                    'post_type'  => 'post',
                    'cat' => $category_id,
                    'orderby'  => 'date',
                    'order'    => 'DESC'
                );
                $query = new WP_Query( $args );
            ?>

            <?php
                if (isset($query->posts) && !empty($query->posts) ) {
                    foreach($query->posts as $key => $value) {
                            // var_dump( $acf_fields['price']);
                            $acf_fields = get_fields($value ->ID);
                        if ($key == 0) {
                        ?>
                        <div class="item">
                            <div class="block">
                                <div class="img" style="background-image: url(<?php echo get_the_post_thumbnail_url($value) ?>)" alt="Slider image"></div>
                                <div class="text">
                                    <h3><?php echo $value->post_title ?></h3>
                                    <div class="line"></div>
                                    <p><?php echo $acf_fields['preview'] ?></p>
                                    <div class="link">
                                        <a href="<?php echo get_permalink($value) ?>">read more</a>
                                    </div>
                                </div>
                                <div class="foot">
                                    <span><?php echo $acf_fields['price'] ?></span>
                                    <span><?php echo $acf_fields['time'] ?></span>
                                </div>
                            </div>
                        </div>
                         <?php
                            }
                            else {
                                ?>
                                   <div class="item">
                                        <div class="block">
                                            <div class="img" style="background-image: url(<?php echo get_the_post_thumbnail_url($value) ?>)" alt="Slider image"></div>
                                            <div class="text">
                                                <h3><?php echo $value->post_title ?></h3>
                                                <div class="line"></div>
                                                <p><?php echo $acf_fields['preview'] ?></p>
                                                <div class="link">
                                                    <a href="<?php echo get_permalink($value) ?>">read more</a>
                                                </div>
                                            </div>
                                            <div class="foot">
                                                <span><?php echo $acf_fields['price'] ?></span>
                                                <span><?php echo $acf_fields['time'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    }

                    ?>
        </div>
     </div>
</section>
<?php get_footer(); ?>
