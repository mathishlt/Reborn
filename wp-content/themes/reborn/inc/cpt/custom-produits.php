<?php
/*
* On utilise une fonction pour créer notre custom post type 'Produits'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Produits', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Produit', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Produits'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Touts les produits'),
		'view_item'           => __( 'Voir les produits'),
		'add_new_item'        => __( 'Ajouter un nouveau produit'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le produit'),
		'update_item'         => __( 'Modifier le produit'),
		'search_items'        => __( 'Rechercher un produit'),
		'not_found'           => __( 'Non trouvé'),
		'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Produits'),
		'description'         => __( 'Tous sur produits'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' 		  => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'nos-produits'),
		'menu_position'       => 4, // position dans le menu admin

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'produits', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );