<?php

//First Necessary Bootstraping!

function Ap_general_settings(){
    load_theme_textdomain("Ap");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

}
add_action("after_setup_theme", "Ap_general_settings");


//Necessary Stylesheet

function Ap_be_stylish(){
    wp_enqueue_style("Ap_style", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "Ap_be_stylish");
