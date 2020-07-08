<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reborn
 */

get_header();
?>


<main id="primary" class="sidebar-main single_produits">

    <!-- <div class="single_flexslider"> -->
    <?php
    if (have_rows('slides')) : ?>
        <div class="flexslider">
            <ul class="slides">
                <?php while (have_rows('slides')) : the_row();
                    $image = get_sub_field('image');
                    $imageur1 = $image['sizes']['slider'];
                ?>
                    <li>
                        <img src="<?php echo $imageur1; ?>" alt="">
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    <?php endif; ?>
    <!-- </div> -->

    <?php
    while (have_posts()) : the_post(); ?>
        <div class="single_produit_titre_prix_boutons">
            <div class="single_bloc_titre_marque">
                <h2 class="single_titre_du_produit"><?= get_the_title(); ?></h2>
                <div class="single_prix">
                    <p><?php the_field('prix_produit') ?>€</p>
                </div>
            </div>
            <div class="single_group_boutons">
                <div class="div_deco_bouton_produits">
                    <button class="bouton_infos_produits bouton_nos_produits"><a class="lien_achat" href="<?= the_field('bouton_redirection'); ?>">
                            ACHETEz-ICI
                    </button></a>
                </div>

                <div class="div_deco_bouton_produits">
                    <button class="bouton_infos_produits bouton_nos_produits "><a class="lien_single_page" href="<?php echo esc_url(home_url($web['pages']['contact']['slug'])); ?>">
                            REVENDEUR
                    </button></a>
                </div>
            </div>
            <div class="single_description">
                <p><?php the_field('description_courte_du_produit') ?></p>
            </div>
            <div class="single_accordeon">
                <?php if (have_rows('accordion_repeater')) :


                    // loop through the rows of data for the tab header
                    while (have_rows('accordion_repeater')) : the_row();

                        $header = get_sub_field('accordion_header');
                        $content = get_sub_field('accordion_content');

                ?>

                        <button class="accordion"><?php echo $header; ?></button>
                        <div class="panel">
                            <p><?php echo $content; ?></p>
                        </div>
                <?php
                    endwhile; //End the loop 
                endif; ?>
            </div>
        </div>





    <?php
    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();
