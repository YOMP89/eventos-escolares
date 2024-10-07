<?php
// Registrar Custom Post Type para Eventos Escolares
function cpt_eventos_escolares() {
    $labels = array(
        'name'               => _x( 'Eventos Escolares', 'Post Type General Name', 'textdomain' ),
        'singular_name'      => _x( 'Evento Escolar', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'          => __( 'Eventos Escolares', 'textdomain' ),
        'name_admin_bar'     => __( 'Evento Escolar', 'textdomain' ),
        'add_new'            => __( 'Añadir nuevo', 'textdomain' ),
        'add_new_item'       => __( 'Añadir nuevo Evento Escolar', 'textdomain' ),
        'new_item'           => __( 'Nuevo Evento Escolar', 'textdomain' ),
        'edit_item'          => __( 'Editar Evento Escolar', 'textdomain' ),
        'view_item'          => __( 'Ver Evento Escolar', 'textdomain' ),
        'all_items'          => __( 'Todos los Eventos Escolares', 'textdomain' ),
        'search_items'       => __( 'Buscar Eventos Escolares', 'textdomain' ),
        'not_found'          => __( 'No se encontraron eventos', 'textdomain' ),
        'not_found_in_trash' => __( 'No se encontraron eventos en la papelera', 'textdomain' ),
    );

    $args = array(
        'label'              => __( 'Eventos Escolares', 'textdomain' ),
        'description'        => __( 'Publicaciones para registrar y gestionar eventos del colegio.', 'textdomain' ),
        'labels'             => $labels,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'hierarchical'       => false,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 5, // Posición en el menú del administrador
        'menu_icon'          => 'dashicons-calendar-alt', // Ícono para el menú de eventos
        'show_in_admin_bar'  => true,
        'show_in_nav_menus'  => true,
        'can_export'         => true,
        'has_archive'        => true,
        'exclude_from_search'=> false,
        'publicly_queryable' => true,
        'capability_type'    => 'post',
        'rewrite'            => array( 'slug' => 'eventos-escolares' ), // URL personalizada
    );

    register_post_type( 'eventos_escolares', $args );
}
add_action( 'init', 'cpt_eventos_escolares', 0 );
?>

