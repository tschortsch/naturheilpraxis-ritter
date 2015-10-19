<?php
function nhpr_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'content_blocks', array(
        'title' => __( 'Content-Blocks' ),
        'description' => __( 'Define content of content blocks.' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_setting( 'address', array() );

    $wp_customize->add_control( 'address', array(
        'type' => 'textarea',
        'priority' => 10, // Within the section.
        'section' => 'content_blocks', // Required, core or custom.
        'label' => __( 'Adress' ),
        'settings' => 'address',
    ) );

    $wp_customize->add_setting( 'phone', array() );

    $wp_customize->add_control( 'phone', array(
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'content_blocks', // Required, core or custom.
        'label' => __( 'Phone' ),
        'settings' => 'phone',
    ) );
}
add_action( 'customize_register', 'nhpr_customize_register' );
