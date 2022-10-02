<?php

function resto_customize_register($wp_customizer){
    // Add a theme-home/theme heme information section.
    $wp_customizer->add_section('resto_cus_home_sec', array(
        'title' => __('Home Section', 'resto'),
        'priority' => 30, 
    ));
    $wp_customizer->add_setting( 'resto_cus_home_sett', array(
        'default' => 'We Love Delicious Foods!',
        'transport' => 'refresh', // or postMessage
        
      ) );
    $wp_customizer->add_control( 'resto_home_ctrl', array(
        'type' => 'text',
        'section' => 'resto_cus_home_sec',
        'settings'=>'resto_cus_home_sett',        
        'label' => __( 'Theme title' ),
        'description' => __( 'This is the range control description.' ),
      ) );
}
add_action('customize_register', 'resto_customize_register');