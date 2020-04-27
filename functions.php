<?php 

include 'app/bootstrap.php';
include 'app/ctp/filmes.php';

/**
 * Adicionando a classe asda em todas as imagens de posts, adicionando um filtro na chanada da função que 
 * seta os atributos da imagem que será exibida quando a função "(get_)the_post_thumbnail"
 * 
 * Artigos para ler:
 * https://www.wpbeginner.com/glossary/hooks/
 * https://developer.wordpress.org/plugins/hooks/
 * 
 * Referência da função em que adicionamos o filtro:
 * https://developer.wordpress.org/reference/hooks/wp_get_attachment_image_attributes/
 *
 * @return void
 */
function custom_cinepress_images_class_atrributes($attr) {

    $attr['class'] .= ' img-fluid';

    return $attr;

}

add_filter('wp_get_attachment_image_attributes','custom_cinepress_images_class_atrributes');


function debug( $var ) {

    if ( WP_DEBUG == false) {
        return false;
    }

    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}