<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 25/01/2019
 * Time: 20:21
 */


//Funções para carregar os scripts e folhas de estilos
function load_scripts(){
    wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js',
        array('jquery'), '4.2.1', true);

    wp_enqueue_style( 'bootstrap-css','https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css',
        array(), '4.2.1','all');

    wp_enqueue_style( 'template',get_template_directory_uri().'/css/template.css', array(), '1.0',
        'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

//Função de configuração do tema
function projetoWordpress_config(){
    //Registrar os menus
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'my_main_foote' => 'Footer Menu'
        )
    );

    $args = array(
      'height' => 225,
      'width' => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'projetoWordpress_config', 0);