<?php

function agency_files(){
    /*--adding style files ---*/
wp_enqueue_style('agency-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.4', 'all');
wp_enqueue_style('agency-fontawesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '4.6.3', 'all');
wp_enqueue_style('agency-google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,700', array(), '1.0.0', 'all');
wp_enqueue_style('agency-google-fonts1', '//fonts.googleapis.com/css?family=Kaushan+Script', array(), '1.0.0', 'all');
wp_enqueue_style('agency-google-fonts2', '//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic', array(), '1.0.0', 'all');
wp_enqueue_style('agency-google-fonts3', '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700', array(), '1.0.0', 'all');
wp_enqueue_style('agency-main-stylesheet', get_stylesheet_uri() );
    
    /*--adding jquery files--*/
wp_enqueue_script('jquery');
    
wp_enqueue_script('agency-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '3.3.7', true );
    
wp_enqueue_script('agency-easing', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), '1.3', false );
    
wp_enqueue_script('agency-bootstrapvalidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array(), '1.3.6', true );
    
wp_enqueue_script('agency-contact-me', get_template_directory_uri() . '/js/contact_me.js', array(), '1.0', true );
    
wp_enqueue_script('agency-main', get_template_directory_uri() . '/js/agency.min.js', array(), '1.0', true );

}
add_action('wp_enqueue_scripts', 'agency_files');


function agency_ie_support(){
    ?>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
}
add_action('wp_head', 'agency_ie_support');