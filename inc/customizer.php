<?php

function resto_customize_register($wp_customizer){
    // Add a theme-home/theme heme information section.
    $wp_customizer->add_section('resto_cus_home_sec', array(
        'title' => __('Home Section', 'resto'),
        'priority' => 30, 
    ));
    $wp_customizer->add_setting( 'resto_cus_home_sett', array(
        'default' => __('We Love Delicious Foods!','resto'),
        'transport' => 'refresh', // or postMessage
        
      ) );
    $wp_customizer->add_control( 'resto_home_ctrl', array(
        'type' => 'text',
        'section' => 'resto_cus_home_sec',
        'settings'=>'resto_cus_home_sett',        
        'label' => __( 'Theme title' ),
        'description' => __( 'This is the range control description.','resto' ),
      ) );
      $wp_customizer->add_setting( 'resto_support_time_sett', array(
        'default' =>7,
        'transport' => 'refresh', // or postMessage
        
      ) );
      $wp_customizer->add_control('resto_support_time_ctrl',array(
        'type'=>'number',
        'section' =>'resto_cus_home_sec',
        'settings'=>'resto_support_time_sett',
        'label' => __(' Your Shop Support time'),
        'description'=> __('set your shop support time')
      ));
}
add_action('customize_register', 'resto_customize_register');