<?php
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_industry_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_industry_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Industry', 'taxonomy general name', 'understrap' ),
        'singular_name'     => _x( 'Industry', 'taxonomy singular name', 'understrap' ),
        'search_items'      => __( 'Search Industries', 'understrap' ),
        'all_items'         => __( 'All Industries', 'understrap' ),
        'parent_item'       => __( 'Parent Industry', 'understrap' ),
        'parent_item_colon' => __( 'Parent Industry:', 'understrap' ),
        'edit_item'         => __( 'Edit Industry', 'understrap' ),
        'update_item'       => __( 'Update Industry Term', 'understrap' ),
        'add_new_item'      => __( 'Add New Industry Term', 'understrap' ),
        'new_item_name'     => __( 'New Industry Name', 'understrap' ),
        'menu_name'         => __( 'Industry', 'understrap' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'industry' ),
    );

    register_taxonomy( 'industry', array( 'projects' ), $args );
}