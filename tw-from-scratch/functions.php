<?php


/* Je load ici le css de bootrstrap, puis ENSUITE seulement le mien qui overwrite les règles précédentes */

function load_css() 
{

    wp_register_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap_css');

    wp_register_style('custom_css', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('custom_css');


}
add_action('wp_enqueue_scripts', 'load_css');


/* Je load jquery */

function load_jquery()
{

    wp_deregister_script( 'jquery' );    /* si jamais wordpress load une version de jquery, je fais en sorte qu'il ne l'utilise pas */
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');

} 
add_action('wp_enqueue_scripts', 'load_jquery');


/* Je load ici le js */

function load_js()
{

    wp_register_script( 'custom_js', get_template_directory_uri() . '/js/script.js', '', 1, true);
    wp_enqueue_script( 'custom_js');

}
add_action('wp_enqueue_scripts', 'load_js');

/* Je rajoute ici plusieurs fonctionnalités (ajouter des menus, ajouter une image mise en avant...)*/

add_theme_support('menus');

add_theme_support('post-thumbnails');

    register_nav_menus( 
        
        array(

            'top-menu' => __('Top Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme'),

        )

    );

    add_image_size('smallest', 300, 300, true);
    add_image_size('largest', 500, 500, true);

/* Custom Post type pour les recettes */ 

function custom_recettes()
{

    $args = array (

        'labels' => array(

                'name' => 'Recettes',
                'singular_name' => 'Recette',
        ),

        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-food',

    );


    register_post_type( 'recettes', $args );

}

add_action( 'init', 'custom_recettes');


/* Taxonomy pour les champs du CPT */ 


function taxonomy_recettes ()
{

    $args = array(

        'labels' => array(
            'name' => 'Types de plats',
            'singular_name' => 'Type de plat',
    ),

        'public' => true,
        'hierarchical' => true,

    );

    register_taxonomy( 'plats', array('recettes'), $args);

}

add_action('init', 'taxonomy_recettes');

/* Je crée ici une fonction pour pouvoir utiliser l'archive de mon CPT comme page d'accueil, ce qui n'est pas possible nativement */

add_action("pre_get_posts", "custom_front_page");
function custom_front_page($wp_query){
    //Ensure this filter isn't applied to the admin area
    if(is_admin()) {
        return;
    }

    if($wp_query->get('page_id') == get_option('page_on_front')):

        $wp_query->set('post_type', 'recettes');
        $wp_query->set('page_id', ''); //Empty

        //Set properties that describe the page to reflect that
        //we aren't really displaying a static page
        $wp_query->is_page = 0;
        $wp_query->is_singular = 0;
        $wp_query->is_post_type_archive = 1;
        $wp_query->is_archive = 1;

    endif;

}