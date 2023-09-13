<?php 

// add_action( 'wp_enqueue_scripts', function() {

//     wp_enqueue_style( 'sliderpro', get_template_directory_uri() . '/assets/js/xpro/slider.css');
//     wp_enqueue_style( 'sliderbase', get_template_directory_uri() . '/assets/js/xpro/slider_base.css');
//     wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/assets/js/datepiker/css/datepicker.css');
//     wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
//     wp_enqueue_style( 'progressbar', get_template_directory_uri() . '/assets/css/bootstrap-progressbar.css');
//     wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/js/xpro/slider.css?=8');
//     wp_enqueue_style( 'carousel9', get_template_directory_uri() . '/assets/css/owl.carousel.css');
//     wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
//     wp_enqueue_style( 'style12', get_template_directory_uri() . '/assets/css/style.css?=12');
//     wp_enqueue_style( 'remodal', get_template_directory_uri() . '/assets/css/remodal.css');
//     wp_enqueue_style( 'remodal8', get_template_directory_uri() . '/assets/css/remodal-default-theme.css?=8');

//     wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
//     wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
//     wp_enqueue_style( 'fonticon', get_template_directory_uri() . '/assets/css/food-flaticon.css');
//     wp_enqueue_style( 'flexslidercss', get_template_directory_uri() . '/assets/flexslider/flexslider.css');
//     wp_enqueue_style( 'public', get_template_directory_uri() . '/assets/flexslider/public.css');
//     wp_enqueue_style( 'css1', get_template_directory_uri() . '/assets/css-1.css');
    
   
    
    



// 	wp_deregister_script('jquery-core');
// 	wp_deregister_script('jquery');
	
// 	wp_register_script( 'jquery', '/assets/js/common/jquery-1.9.1.min.js',false, array('jquery-core'), null, true );

	// wp_enqueue_script( 'jquery' );
    // wp_enqueue_script( 'waypount', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js', array('jquery'), 'null', true );
    // // wp_enqueue_script( 'jq', get_template_directory_uri() . '/assets/js/common/jquery-1.9.1.min.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'jqslider', get_template_directory_uri() . '/assets/flexslider/jquery.flexslider-min.js', array('jquery'), 'null', true );
	// wp_enqueue_script( 'common', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'progresssbar', get_template_directory_uri() . '/assets/js/bootstrap-progressbar.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'wow23', get_template_directory_uri() . '/assets/js/main-scripts.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), 'null', true );
   
    // wp_enqueue_script( 'datepicker', get_template_directory_uri() . '/assets/js/datepiker/js/moment.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'datepickerboostrap', get_template_directory_uri() . '/assets/js/datepiker/js/bootstrap-datepicker.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'slider1', get_template_directory_uri() . '/assets/js/xpro/js/slider.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/js/contact.js', array('jquery'), 'null', true );
    
    // wp_enqueue_script( 'contact-mail', get_template_directory_uri() . '/assets/js/contact-mail.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'callme', get_template_directory_uri() . '/assets/callme/js/callme.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'remodal', get_template_directory_uri() . '/assets/js/remodal.min.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true );
    // wp_enqueue_script( 'flexslider3', get_template_directory_uri() . '/assets/flexslider/flexslider.css?=3', array('jquery'), 'null', true );
    // wp_enqueue_script( 'googlemaps', get_template_directory_uri() . 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDSEBsEMoHacKnvsg6A_h85H90JrVle7k4&callback=initMap', array('jquery'), 'null', true );
    
    
// });
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
/* Disable auto-add tags in the post */
remove_filter( 'the_content', 'wpautop' );
/**
 * Disable autotop in content and create the shortcode.
 */
function my_formatter($content) {
    $new_content = '';
    $pattern_full = '{(\[raw\].*?\[/raw\])}is';
    $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
    $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

    foreach ($pieces as $piece) {
            if (preg_match($pattern_contents, $piece, $matches)) {
                    $new_content .= $matches[1];
            } else {
                    $new_content .= wptexturize(wpautop($piece));
            }
    }

    return $new_content;
}

remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

add_filter('the_content', 'my_formatter', 99);


?>