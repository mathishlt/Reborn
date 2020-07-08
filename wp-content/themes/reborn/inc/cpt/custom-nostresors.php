<?php
/*
* On utilise une fonction pour créer notre custom post type 'Tresors'
*/

function wpm_custom_post_type2() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Tresors', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Tresor', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Tresors'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Touts les tresors'),
		'view_item'           => __( 'Voir les tresors'),
		'add_new_item'        => __( 'Ajouter un nouveau tresors'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le tresor'),
		'update_item'         => __( 'Modifier le tresor'),
		'search_items'        => __( 'Rechercher un tresor'),
		'not_found'           => __( 'Non trouvé'),
		'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Tresors'),
		'description'         => __( 'Tous sur tresors'),
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
		'rewrite'			  => array( 'slug' => 'nos-tresors'),
		'menu_position' 	  => 4, // position dans le menu admin

	);
	
	// On enregistre notre custom post type qu'on nomme ici "tresors" et ses arguments
	register_post_type( 'tresors', $args );

}

add_action( 'init', 'wpm_custom_post_type2', 0 );