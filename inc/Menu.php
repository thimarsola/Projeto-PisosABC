<?php

//REGISTER MENU
function register_my_menus()
{
    register_nav_menus([
        //Home
        'menu' => __('Menu'),
        'products' => __('Produtos'),
    ]);
}

add_action('init', 'register_my_menus');
