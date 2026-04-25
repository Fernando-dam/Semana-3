<?php
function mi_tema_setup() {
    register_nav_menus([
        'menu-principal' => 'Menú Principal'
    ]);
}
add_action('after_setup_theme', 'mi_tema_setup');

function mi_tema_estilos() {
    wp_enqueue_style('mi-tema-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_estilos');