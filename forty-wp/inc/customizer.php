<?php
	
	/* Customizer Register */
	function forty_customizer_register( $wp_customize ) {

		//	=============================
	    //	= Theme Options Panel		= 
	    //	=============================
	    $wp_customize->add_panel( 'theme_settings', array(
		  'title' => __( 'Theme Options', 'forty' ),
		  'description' => '', // Include html tags such as <p>
		  'priority' => 10, // Mixed with top-level-section hierarchy. 
		) );




		/*-----------------------------*/
	    /* Header Options */
	    /*-----------------------------*/
	    $wp_customize->add_section( 'forty_header_options', array(
	    	'title'			=> __( 'Header Options', 'forty' ),
	    	'description'	=> __( '<i>Custom <b>Title</b> and <b>Description</b> text is show only on home page, Do not show on other pages and you can use html tag for your required.</i>', 'forty' ),
	    	'priority'		=> 10,
	    	'panel'			=> 'theme_settings'
	    ) );

	    /* Custom title */
	    $wp_customize->add_setting( 'header_custom_title', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'header_custom_title', array(
	    	'label'			=> __( 'Custom Title', 'forty' ),
	    	// 'description'	=> __( 'Custom title text show only on home page, no other page. You can use html tag for your required  ', 'forty' ),
	    	'section'		=> 'forty_header_options',
	    	'type'			=> 'text'
	    ) );


	    /* Custom title */
	    $wp_customize->add_setting( 'header_custom_description', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'header_custom_description', array(
	    	'label'		=> __( 'Custom Description', 'forty' ),
	    	'section'	=> 'forty_header_options',
	    	'type'		=> 'textarea'
	    ) );


		/*-----------------------------*/
	    /* Social Options */
	    /*-----------------------------*/
	    $wp_customize->add_section( 'forty_social_network', array(
	    	'title'			=> __( 'Social Network', 'forty' ),
	    	'description'	=> __( '<i>You can add your social network link without http://</i>', 'forty' ),
	    	'priority'		=> 20,
	    	'panel'			=> 'theme_settings'
	    ) );


	    /* Facebook link option */
	    $wp_customize->add_setting( 'forty_fb_text', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'forty_fb_text', array(
	    	'label'		=> __( 'Facebook Link', 'forty' ),
	    	'section'	=> 'forty_social_network',
	    	'type'		=> 'url'
	    ) );


	    /* Twitter link Option */
	    $wp_customize->add_setting( 'forty_twitter_text', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'forty_twitter_text', array(
	    	'label'		=> __( 'Twitter Link', 'forty' ),
	    	'section'	=> 'forty_social_network',
	    	'type'		=> 'url'
	    ) );


	    /* Instagram link Options */
	    $wp_customize->add_setting( 'forty_ins_text', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'forty_ins_text', array(
	    	'label'		=> __( 'Instagram Link', 'forty' ),
	    	'section'	=> 'forty_social_network',
	    	'type'		=> 'url'
	    ) );


	    /* GitHub link Options */
	    $wp_customize->add_setting( 'forty_git_text', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'forty_git_text', array(
	    	'label'		=> __( 'GitHub Link', 'forty' ),
	    	'section'	=> 'forty_social_network',
	    	'type'		=> 'url'
	    ) );


	    /*-----------------------------*/
	    /* Footer Options */
	    /*-----------------------------*/
	    $wp_customize->add_section( 'footer_settings', array(
	    	'title'		=> __( 'Footer Options', 'forty' ),
	    	'description'	=> __( '<i>You can use the list tag for divide the content.</i>', 'forty' ),
	    	'priority'	=> 30,
	    	'panel'		=> 'theme_settings'
	    ) );

	    /* Footer Text Option */
	    $wp_customize->add_setting( 'footer_text_option', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'footer_text_option', array(
	    	'label'		=> __( 'Footer Copyright Text', 'forty' ),
	    	'section'	=> 'footer_settings',
	    	'type'		=> 'textarea'
	    ) );

	}
	add_action( 'customize_register', 'forty_customizer_register' );