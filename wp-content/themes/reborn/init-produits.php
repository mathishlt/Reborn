<?php

// inc/cuztom/init-produits.php

$labelsproduits = array(
    'name' => __('Produits', 'repere'),
    'singular_name' => __('Produits', 'repere'),
    'add_new' => __('Ajouter nouveau', 'repere'),
    'add_new_item' => __('Ajouter nouveau Produit'),
    'edit_item' => __('Editer produit'),
    'new_item' => __('Nouveau produit'),
    'all_items' => __('Tous les produits'),
    'view_item' => __('Voir produits'),
    'search_items' => __('Recherche produits'),
    'not_found' =>  __('Produit non trouvé'),
    'not_found_in_trash' => __('Pas de produit dans la corbeille'),
    'parent_item_colon' => '',
    'menu_name' => __('Nos Produits')
);
$produit = register_cuztom_post_type(
    'produit',
    array(
        'labels' => $labelsproduits,
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_icon' => 'dashicons-tag',
        'has_archive' => true,
        'menu_position' => 4, // position dans le menu admin
        'rewrite' => array('slug' => __('produit')),
        'supports' => array('title', 'thumbnail')
    )
);

$produit->add_meta_box(
    'produit_content',
    'Présentation courte du produit',
    array(
        array(
            'id'    => 'titre_du_produit_cuztom',
            'type'  => 'text',
            'label' => 'Titre du produit',
        ),
        array(
            'id'    => 'courte_description_du_produit_cuztom',
            'type'  => 'textarea',
            'label' => 'Courte description du produit',
        ),
        array(
            'id'    => 'image_détouré_du_produit_cuztom',
            'type'  => 'image',
            'label' => 'Image du produit (détouré)',
        ),
    )
);

$produit->add_meta_box(
    'produit_content2',
    'Description complète du produit',
    array(
        array(
            'id'    => 'histoire_du_produit',
            'type'  => 'textarea',
            'label' => 'Histoire du produit',
        ),
        array(
            'id'    => 'description_du_produit',
            'type'  => 'textarea',
            'label' => 'Description du produit',
        ),
        array(
            'id'    => 'comment_ca_marche',
            'type'  => 'textarea',
            'label' => 'Comment ça marche ?',
        ),
    )
);
