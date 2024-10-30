<?php

  /*
  Plugin Name: Boost tracker
  Description: Boost is the best way to increase the organic reach of your blog in social media.
  Author: Nooosfeer
  Version: 0.1
  */

  //Code to Add script to ALL pages
  /*function boost_script() {
      wp_enqueue_script(  'boost-tracker', '//noosfeer.com/javascripts/boost.js' );
  }  

  add_action( 'wp_enqueue_scripts', 'boost_script' );*/


  //Code to add script to SELECTED pages
  add_shortcode( 'boost-tracker', 'boost_script' );
  function boost_script( $atts ) {
    $mh_text = '<script  type="text/javascript" src="//noosfeer.com/javascripts/boost.js"></script>';
    return $mh_text;
  }
  
?>