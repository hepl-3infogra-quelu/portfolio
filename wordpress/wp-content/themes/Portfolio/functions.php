<?php

add_action( 'init', 'create_post_type' );
add_action( 'init', 'create_creation_tax' );

function create_post_type() {
  register_post_type( 'creation',
    array(
      'labels' => array(
        'name' => __( 'Créations' ),
        'singular_name' => __( 'Creation' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

function create_creation_tax() {
    $type_labels = array(
        'name'                       => _x( 'Types de travail', 'taxonomy general name' ),
        'singular_name'              => _x( 'Type', 'taxonomy singular name' ),
        'search_items'               => __( 'Rechercher un type' ),
        'popular_items'              => __( 'Types fréquents' ),
        'all_items'                  => __( 'Tous les types' ),
        'edit_item'                  => __( 'Editer un type' ),
        'update_item'                => __( 'Mettre à jour le type' ),
        'add_new_item'               => __( 'Ajouter un type' ),
        'new_item_name'              => __( 'Nouveau nom du type' ),
        'separate_items_with_commas' => __( 'Séparer les types par une virgule' ),
        'add_or_remove_items'        => __( 'Ajouter ou supprimer des types' ),
        'choose_from_most_used'      => __( 'Choisir parmis les types les plus fréquents' ),
        'not_found'                  => __( 'Pas de type trouvé.' ),
        'menu_name'                  => __( 'Types de travail' )
    );
    $type_args = array(
        'hierarchical'          => false,
        'labels'                => $type_labels,
        'show_ui'               => true,
        'rewrite'               => array( 'slug' => 'type' )
    );

    $tech_labels = array(
        'name'                       => _x( 'Technologies', 'taxonomy general name' ),
        'singular_name'              => _x( 'Technologie', 'taxonomy singular name' ),
        'search_items'               => __( 'Rechercher une technologie' ),
        'popular_items'              => __( 'Technologies fréquentes' ),
        'all_items'                  => __( 'Toutes les technologies' ),
        'edit_item'                  => __( 'Editer une technologie' ),
        'update_item'                => __( 'Mettre à jour la technologie' ),
        'add_new_item'               => __( 'Ajouter une technologie' ),
        'new_item_name'              => __( 'Nouveau nom de la technologie' ),
        'separate_items_with_commas' => __( 'Séparer les noms de technologie par une virgule' ),
        'add_or_remove_items'        => __( 'Ajouter ou supprimer des technologies' ),
        'choose_from_most_used'      => __( 'Choisir parmis les technologies les plus fréquentes' ),
        'not_found'                  => __( 'Pas de technologie trouvée.' ),
        'menu_name'                  => __( 'Technologies' )
    );
    $tech_args = array(
        'hierarchical'          => false,
        'labels'                => $tech_labels,
        'show_ui'               => true,
        'rewrite'               => array( 'slug' => 'tech' )
    );

    register_taxonomy( 'type', 'creation', $type_args );
    register_taxonomy( 'tech', 'creation', $tech_args );
}
