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
        'label' => __(' Your Shop Support time','resto'),
        'description'=> __('set your shop support time')
      ));
      $wp_customizer->add_setting('slider_image_1',array(
        'transport' => 'refresh', 
      ));
      $wp_customizer->add_setting('slider_image_2',array(
        'transport' => 'refresh', 
      ));
      $wp_customizer->add_setting('slider_image_3',array(
        'transport' => 'refresh', 
      ));
      $wp_customizer->add_control( new WP_Customize_Media_Control( $wp_customizer, 'slider_control_1', array(
        'label' => __( 'slider image one', 'resto' ),
        'section' => 'resto_cus_home_sec',
        'settings'=>'slider_image_1',
        'mime_type' => 'image',
       
      ) ) );
      $wp_customizer->add_control( new WP_Customize_Media_Control( $wp_customizer, 'slider_control_2', array(
        'label' => __( 'slider image two', 'resto' ),
        'section' => 'resto_cus_home_sec',
        'settings'=>'slider_image_2',
        'mime_type' => 'image',
       
      ) ) );
      $wp_customizer->add_control( new WP_Customize_Media_Control( $wp_customizer, 'slider_control_3', array(
        'label' => __( 'slider image three', 'resto' ),
        'section' => 'resto_cus_home_sec',
        'settings'=>'slider_image_3',
        'mime_type' => 'image',
       
      ) ) );
}
add_action('customize_register', 'resto_customize_register');