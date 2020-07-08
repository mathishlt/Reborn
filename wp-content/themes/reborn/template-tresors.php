<?php /* Template Name: tresors */
get_header(); ?>

    <section id="nos-tresors">
    <?php
    // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
    $args = array(
        'post_type' => 'tresors',
        'posts_per_page' => 3,
        'order'          => 'ASC',
    );

    // 2. On exécute la WP Query
    $my_query = new WP_Query($args);

    // 3. On lance la boucle !
    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="wrap_produit">
                <div class="produits">
                    <div class="titre_description_produit">
                        <h2 class="titre_du_produit"><?php the_field('titre_du_tresor'); ?></h2>
                        <p class="description_du_produit"><?php the_field('description_courte_du_tresor') ?></p>
                    </div>
                    <div class="image_produit">
                        <div class="cerle_produit">
                            <?php
                            $image_produit = get_field('image_du_tresor');
                            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                            $attr = array(
                                'class' => 'image_du_produit'
                            );
                            if ($image_produit) {
                                echo wp_get_attachment_image($image_produit, $size, false, $attr);
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="group_boutons">
                    <div class="div_deco_bouton_produits">
                        <button class="bouton_infos_produits bouton_nos_produits "><a class="lien_single_page" href="<?= get_the_permalink(); ?>">
                                PLUS D'INFOS
                        </button></a>
                    </div>

                    <div class="div_deco_bouton_produits">
                        <button class="bouton_infos_produits bouton_nos_produits"><a class="lien_achat" href="<?= the_field('bouton_redirection'); ?>">
                                CONTACTEz-NOUS
                        </button></a>
                    </div>
                </div>
            </div>

    <?php
        endwhile;
    endif;

    // 4. On réinitialise à la requête principale (important)
    wp_reset_postdata();
    ?>
    </section>

<?php get_footer();

