<?php /* Template Name: home */

get_header(); ?>
<div class="bande_decoration">
    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/Bande.svg" alt="bande de couleur sur le fond d'écran">
</div>
<section id="homepage_sloganReborn">
    <div class="texte_homepage_sloganReborn">
        <h2><?php the_field('slogan'); ?></h2>
    </div>


    <div class="img_homepage_sloganReborn">
        <?php $image_slogan = get_field('image_slogan'); // On récupère cette fois l'ID
        if ($image_slogan) {
            echo wp_get_attachment_image($image_slogan, 'full');
        } ?>
    </div>
</section>

<section id="section_home_aventure">

    <div class="div_home_titre_aventure column">
        <div class="high_bar_aventure high_bar"></div>
        <h2 class="home_titre_aventure"><?php the_field('titre_aventure_reborn'); ?></h2>
        <div class="low_bar_aventure low_bar"></div>
    </div>

    <div class="div_home_texte_aventure column">
        <p class="home_texte_aventure"><?php the_field('aventure_reborn'); ?></p>
    </div>

    <div class="home_img_aventure">
        <?php $image_aventure = get_field('image_aventure_reborn');
        if ($image_aventure) {
            echo wp_get_attachment_image($image_aventure, 'full');
        } ?>
    </div>

</section>

<section id="section_home_vedette">
    <div class="div_home_titre_vedette">
        <div class="high_bar_vedette high_bar"></div>
        <h2 class="home_titre_vedette"><?php the_field('titre_les_vedettes'); ?></h2>
        <div class="low_bar_vedette low_bar"></div>
    </div>

    <div class="home_produits_vedette">
        <div class="home_lovidol_vedette">
            <h3 class="titre_lovidol_vedettes">Lovidol</h3>
            <div class="cercle_vert_vedette">
                <img class="img_lovidol_vedette" src="<?php echo get_template_directory_uri(); ?>/asset/img/lovidol.png" alt="image lovidol">
            </div>

            <div class="div_deco_bouton div_deco_bouton_vedette">

            <a href="produits#produit-lovidol"><button onclick="window.location.href='#produits-lovidol'" class="bouton_infos_produits bouton_infos_produits_vedette bouton_infos_produits_vedette_1">En savoir plus
                </button></a>
            </div>
        </div>

        <div class="home_tronconic_vedette">
            <h3 class="titre_tronconic_vedette">Tronconic</h3>
            <div class="cercle_vert_vedette">
                <img class="img_tronconic_vedette" src="<?php echo get_template_directory_uri(); ?>/asset/img/tronconic.png" alt="image tronconic">
            </div>

            <div class="div_deco_bouton div_deco_bouton_vedette margin-bottom_button_vedette_responsive">
            <a href="produits#produit-tronconic"> <button class="bouton_infos_produits bouton_infos_produits_vedette bouton_infos_produits_vedette_1"> En savoir plus
                </button></a> 
            </div>
        </div>

    </div>

</section>

<section id="section_home_tresors">


    <div class="div_home_titre_tresors column">
        <div class="high_bar_tresors high_bar"></div>
        <h2 class="home_titre_tresors"><?php the_field('titre_les_tresors'); ?></h2>
        <div class="low_bar_tresors low_bar"></div>
    </div>
    <div class="div_home_texte_tresors column">
        <p class="home_texte_tresors"><?php the_field('texte_les_tresors'); ?></p>
    </div>

    <div class="home_img_tresors">
        <?php $image_tresors = get_field('image_les_tresors');
        if ($image_tresors) {
            echo wp_get_attachment_image($image_tresors, 'full');
        } ?>
    </div>

</section>

<section id="section_home_histoire">

    <div class="div_home_titre_histoire">
        <div class="high_bar_histoire high_bar"></div>
        <h2 class="home_titre_histoire"><?php the_field('titre_notre_histoire'); ?></h2>
        <div class="low_bar_histoire low_bar"></div>
    </div>
    <div class="div_home_texte_histoire">
        <p class="home_texte_histoire"><?php the_field('texte_notre_histoire'); ?></p>
    </div>

    <div class="home_img_histoire">
        <?php $image_histoire = get_field('image_notre_histoire');
        if ($image_histoire) {
            echo wp_get_attachment_image($image_histoire, 'full');
        } ?>
    </div>

</section>


<?php
get_footer();
