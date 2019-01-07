<?php
    function register_enqueue_style(){
        $theme_data = wp_get_theme();


        wp_register_style( $handle, $src, $deps, $ver, $media);

        wp_enqueue_style($handle);

        /* Ejemplo de registro
        wp_register_style('bootstrap', get_parent_theme_file_uri('/vendor/css/...), null, '1.0.0', 'screen');
        wp_register_style('googlefonts', ('https://.......), null, '1.0.0', 'screen');
        */

        /* Ejemplo de enqueue
        wp_enqueue_style('bootstrap);
        wp_enqueue_stryle('googlefonts');*/

    }

    //usamos  add_action para invocar nuestra función register_enqueue_style 
    add_action( 'wp_enqueue_scripts', 'wp_enqueue_style');

    function register_enqueue_scripts(){

        $theme_data = wp_get_theme();

        /*deregister scripts, es quitar scripts que vienen por default en wordpress
        wp_deregister_scripts( 'jquery');
        wp_deregister_scripts('jquery-migrate'); */

        /*registrando scripts
        wp_register_script().... igual que los styles*/

        /*enqueue scripts
        wp_enqueue_script('bootsrap'); ..... igual que los styles*/

    
    }

    get_template_directory_uri
?>