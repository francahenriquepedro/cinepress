<?php 

/**
 * Adicionand Post Type Movie (file)
 * 
 * DOC: https://developer.wordpress.org/reference/functions/register_post_type/
 */

function register_movie_post_type() {

    $labels = array(
        'name'               => 'Filmes',
        'singular_name'      => 'Filme',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo Filme',
        'edit_item'          => 'Editar Filme',
        'new_item'           => 'Novo Filme',
        'all_items'          => 'Todos os Filmes',
        'view_item'          => 'Visualizar Filme',
        'search_items'       => 'Buscar Filmes',
        'not_found'          => 'Nenhum Filme encontrado',
        'not_found_in_trash' => 'Nenhum Filme encontrado na lixeira',
        'menu_name'          => 'Filmes'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'filmes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
    );

    register_post_type( 'movie', $args );

    register_mobie_taxonomies();
}
    
add_action( 'init', 'register_movie_post_type' );


/**
 * Criando Taxonomias do post type movie
 * 
 * DOC: https://developer.wordpress.org/reference/functions/register_taxonomy/
 *
 * @return void
 */
function register_mobie_taxonomies(){

    $args = array(
        'hierarchical'          => true,
		'label'                 => 'Gênero',
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
        'rewrite'               => array( 'slug' => 'generos' ),
    );

    register_taxonomy( 'genre', 'movie', $args );

    $args = array(
        'label'        => 'Elenco',
        'public'       => true,
        'rewrite'      => array( 'slug' => 'atores' ),
        'hierarchical' => true
    );
    register_taxonomy( 'actor', 'movie', $args );

    $args = array(
        'label'        => 'Diretor',
        'public'       => true,
        'rewrite'      => array( 'slug' => 'diretores' ),
        'hierarchical' => true
    );
    register_taxonomy( 'director', 'movie', $args );

}