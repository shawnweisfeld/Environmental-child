<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style('vh-normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style('vh-responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('pushy', get_template_directory_uri() . '/css/nav/pushy.css');
    wp_enqueue_style('component', get_template_directory_uri() . '/css/component.css');

    wp_enqueue_script('jquery.modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array('jquery'), '', FALSE);
    wp_enqueue_script('jquery.pushy', get_template_directory_uri() . '/js/nav/pushy.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.jcarousel', get_template_directory_uri() . '/js/jquery.jcarousel.pack.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.classie', get_template_directory_uri() . '/js/classie.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.kinetic', get_template_directory_uri() . '/js/smoothscroll/jquery.kinetic.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.smoothdivscroll', get_template_directory_uri() . '/js/smoothscroll/jquery.smoothDivScroll-1.3-min.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.snap.svg-min', get_template_directory_uri() . '/js/snap.svg-min.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.svgLoader', get_template_directory_uri() . '/js/svgLoader.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.coinslider', get_template_directory_uri() . '/js/coin-slider.min.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.infobox', get_template_directory_uri() . '/js/infobox.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.dots', get_template_directory_uri() . '/js/dots.js', array('jquery'), '', TRUE);
    wp_enqueue_script('jquery.debouncedresize', get_template_directory_uri() . '/js/jquery.debouncedresize.js', array('jquery'), '', TRUE);

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>

