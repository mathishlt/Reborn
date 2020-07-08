<?php
/* Template Name: blog */
get_header(); ?>

<section class="blog half-block">
    <?php
    $args = array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' =>  5,
        'order'          => 'DESC',
        'orderby'        => 'date'
    );
    $the_query = new WP_Query($args);
    ?>


    <?php
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post(); ?>
            <div class="wrap3">
                <div class="extrait_article">
                    <img class="blog_img_article" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="">
                    <div class="blog_bloc_textes">
                        <h2 class="blog_titre_article"><?= get_the_title(); ?></h2>
                        <p class="blog_texte_article"><?= get_the_excerpt(); ?><a href="<?= get_the_permalink(); ?>" title="">Suite</a></p>
                    </div>
                </div>
            </div>
    <?php }
    }
    wp_reset_postdata();
    ?>


</section>


<?php
get_footer();
