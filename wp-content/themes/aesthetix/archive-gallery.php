
<?php get_header(); ?>
<section class="main">
    <div class="container">
        <h1 class="title"><span>Gallery</span>Gallery</h1>
    </div>
</section>
<section class="gallery-list">
    <div class="wrapper">
        <?php
        $args = array(
            'post_type'  => 'gallery',
            'orderby'  => 'date',
            'order'    => 'DESC'
        );

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                ?>
                <div class="item">
                    <a href="<?php echo get_permalink($value) ?>" class="block" style="background-image: url(<?php echo get_the_post_thumbnail_url($value) ?>)" alt="<?php echo get_the_title(); ?>">
                        <p><?php echo get_the_title(); ?></p>
                    </a>

                </div>
                <?php
            }
        } else {
            ?>
            <p style="text-align: center; padding: 50px 0;">No posts found</p>
            <?php
        }
        wp_reset_postdata();
        ?>
        <div class="item">

        </div>
    </div>
</section>
<?php get_footer(); ?>
