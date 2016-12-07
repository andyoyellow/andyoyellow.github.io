<?php

function destro_customize_register( $wp_customize ) {

	global $destro_defaults_new;
	
	global $destro_skin_default;
	global $destro_skin_choices;
	global $destro_yes_no_choices;
	global $destro_options_categories;
	global $destro_slider_choices;
	global $destro_layout_choices;


	/* General Panel */
	$wp_customize->add_panel( 'destro_general_options', array(
		'priority'       => 100,
		'capability'     => 'edit_theme_options',
		'title'      => __('General Options', 'destro'),
	) );
	
	$wp_customize->get_section( 'background_image' )->panel = 'destro_general_options';
	$wp_customize->get_section( 'header_image' )->panel = 'destro_general_options';
	$wp_customize->get_section( 'background_image' )->title = 'Site Background Settings';
	$wp_customize->get_section( 'static_front_page' )->panel = 'destro_general_options';
	$wp_customize->get_section( 'title_tagline' )->panel = 'destro_general_options';
	$wp_customize->add_setting(
		'background_color', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color'
    ));
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'background_color', 
		array(
			'label'      => __( 'Background Color', 'destro' ),
			'section'    => 'background_image',
			'priority'   => 9
		) ) 
	);	
	
	/* Skin Section */
	$wp_customize->add_section( 'destro_skin_options', array(
		'panel'	=> 'destro_general_options',
		'priority'       => 200,
		'capability'     => 'edit_theme_options',
		'title'      => __('Select A Skin', 'destro'),
	) );	
	$wp_customize->add_setting(
		'skin_style', array(
        'default'        => $destro_defaults_new['skin_style'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_skin',
    ));
    $wp_customize->add_control( 'skin_style', array(
        'label'   => __('Select a Skin', 'destro'),
        'section' => 'destro_skin_options',
        'type'    => 'select',
		'priority'   => 10,
		'choices' => $destro_skin_choices,
    ));
	/* Single Post page Options */
	$wp_customize->add_section( 'destro_single_options', array(
		'panel'	=> 'destro_general_options',
		'priority'       => 300,
		'capability'     => 'edit_theme_options',
		'title'      => __('Single Post page Options', 'destro'),
	) );
	$wp_customize->add_setting(
		'show_featured_image_single', array(
        'default'        => $destro_defaults_new['show_featured_image_single'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_featured_image_single', array(
        'label'   => __('Show featured image?', 'destro'),
        'section' => 'destro_single_options',
        'type'    => 'select',
		'priority'   => 10,
        'choices' => $destro_yes_no_choices,
    ));	
	$wp_customize->add_setting(
		'show_rat_on_single', array(
        'default'        => $destro_defaults_new['show_rat_on_single'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_rat_on_single', array(
        'label'   => __('Show ratings?', 'destro'),
        'section' => 'destro_single_options',
        'type'    => 'select',
		'priority'   => 20,
        'choices' => $destro_yes_no_choices,
    ));	
	$wp_customize->add_setting(
		'show_pd_on_single', array(
        'default'        => $destro_defaults_new['show_pd_on_single'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_pd_on_single', array(
        'label'   => __('Show posted by and date?', 'destro'),
        'section' => 'destro_single_options',
        'type'    => 'select',
		'priority'   => 30,
        'choices' => $destro_yes_no_choices,
    ));	
	$wp_customize->add_setting(
		'show_cats_on_single', array(
        'default'        => $destro_defaults_new['show_cats_on_single'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_cats_on_single', array(
        'label'   => __('Show categories and tags?', 'destro'),
        'section' => 'destro_single_options',
        'type'    => 'select',
		'priority'   => 40,
        'choices' => $destro_yes_no_choices,
    ));	
	$wp_customize->add_setting(
		'show_author_bio', array(
        'default'        => $destro_defaults_new['show_author_bio'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_author_bio', array(
        'label'   => __('Show author bio?', 'destro'),
        'section' => 'destro_single_options',
        'type'    => 'select',
		'priority'   => 50,
        'choices' => $destro_yes_no_choices,
    ));					
	$wp_customize->add_setting(
		'show_rss_box', array(
        'default'        => $destro_defaults_new['show_rss_box'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_rss_box', array(
        'label'   => __('Show RSS box?', 'destro'),
        'section' => 'destro_single_options',
        'type'    => 'select',
		'priority'   => 60,
        'choices' => $destro_yes_no_choices,
    ));
	$wp_customize->add_setting(
		'show_np_box', array(
        'default'        => $destro_defaults_new['show_np_box'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_np_box', array(
        'label'   => __('Show next/prev nav?', 'destro'),
        'section' => 'destro_single_options',
        'type'    => 'select',
		'priority'   => 60,
        'choices' => $destro_yes_no_choices,
    ));	
	
	
	/* Social Options */
	$wp_customize->add_section( 'destro_social_options', array(
		'panel'	=> 'destro_general_options',
		'priority'       => 400,
		'capability'     => 'edit_theme_options',
		'title'      => __('Social Options', 'destro'),
	) );	
	$wp_customize->add_setting(
		'twitter_id', array(
        'default'        => $destro_defaults_new['twitter_id'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'twitter_id', array(
        'label'   => __( 'Twitter :', 'destro' ),
        'section' => 'destro_social_options',
        'type'    => 'text',
		'priority'   => 10,
    ));	
	$wp_customize->add_setting(
		'redit_id', array(
        'default'        => $destro_defaults_new['redit_id'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'redit_id', array(
        'label'   => __( 'Redditt :', 'destro' ),
        'section' => 'destro_social_options',
        'type'    => 'text',
		'priority'   => 20,
    ));		
	$wp_customize->add_setting(
		'delicious_id', array(
        'default'        => $destro_defaults_new['delicious_id'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'delicious_id', array(
        'label'   => __( 'Delicious :', 'destro' ),
        'section' => 'destro_social_options',
        'type'    => 'text',
		'priority'   => 30,
    ));		
	$wp_customize->add_setting(
		'technorati_id', array(
        'default'        => $destro_defaults_new['technorati_id'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'technorati_id', array(
        'label'   => __( 'Technorati :', 'destro' ),
        'section' => 'destro_social_options',
        'type'    => 'text',
		'priority'   => 40,
    ));	
	$wp_customize->add_setting(
		'facebook_id', array(
        'default'        => $destro_defaults_new['facebook_id'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'facebook_id', array(
        'label'   => __( 'Facebook :', 'destro' ),
        'section' => 'destro_social_options',
        'type'    => 'text',
		'priority'   => 50,
    ));	
	$wp_customize->add_setting(
		'stumble_id', array(
        'default'        => $destro_defaults_new['stumble_id'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'stumble_id', array(
        'label'   => __( 'Stumble :', 'destro' ),
        'section' => 'destro_social_options',
        'type'    => 'text',
		'priority'   => 60,
    ));	
	$wp_customize->add_setting(
		'youtube_id', array(
        'default'        => $destro_defaults_new['youtube_id'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'youtube_id', array(
        'label'   => __( 'YouTube :', 'destro' ),
        'section' => 'destro_social_options',
        'type'    => 'text',
		'priority'   => 70,
    ));
	$wp_customize->add_setting(
		'flickr_id', array(
        'default'        => $destro_defaults_new['flickr_id'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'flickr_id', array(
        'label'   => __( 'Flickr :', 'destro' ),
        'section' => 'destro_social_options',
        'type'    => 'text',
		'priority'   => 80,
    ));	
	$wp_customize->add_setting(
		'linkedin_id', array(
        'default'        => $destro_defaults_new['linkedin_id'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'linkedin_id', array(
        'label'   => __( 'LinkedIn :', 'destro' ),
        'section' => 'destro_social_options',
        'type'    => 'text',
		'priority'   => 90,
    ));	
	

	/* Slider Options */
	$wp_customize->add_section( 'destro_slider_options', array(
		'priority'       => 400,
		'capability'     => 'edit_theme_options',
		'title'      => __('Slider Options', 'destro'),
	) );
	$wp_customize->add_setting(
		'magpro_slidercat', array(
        'default'        => $destro_defaults_new['magpro_slidercat'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_cat',
    ));
    $wp_customize->add_control( 'magpro_slidercat', array(
        'label'   => __('Select a category', 'destro'),
		'description'   => __('Posts from this category will show up in slider.', 'destro'),
        'section' => 'destro_slider_options',
        'type'    => 'select',
		'priority'   => 10,
        'choices' => $destro_options_categories,
    ));	

	$wp_customize->add_setting(
		'show_magpro_slider_home', array(
        'default'        => $destro_defaults_new['show_magpro_slider_home'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_magpro_slider_home', array(
        'label'   => __('Show slider on homepage?', 'destro'),
        'section' => 'destro_slider_options',
        'type'    => 'select',
		'priority'   => 20,
        'choices' => $destro_yes_no_choices,
    ));	
	$wp_customize->add_setting(
		'show_magpro_slider_single', array(
        'default'        => $destro_defaults_new['show_magpro_slider_single'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_magpro_slider_single', array(
        'label'   => __('Show slider on single post page?', 'destro'),
        'section' => 'destro_slider_options',
        'type'    => 'select',
		'priority'   => 30,
        'choices' => $destro_yes_no_choices,
    ));		
	$wp_customize->add_setting(
		'show_magpro_slider_page', array(
        'default'        => $destro_defaults_new['show_magpro_slider_page'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_magpro_slider_page', array(
        'label'   => __('Show slider on pages?', 'destro'),
        'section' => 'destro_slider_options',
        'type'    => 'select',
		'priority'   => 40,
        'choices' => $destro_yes_no_choices,
    ));	
	$wp_customize->add_setting(
		'show_magpro_slider_archive', array(
        'default'        => $destro_defaults_new['show_magpro_slider_archive'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_magpro_slider_archive', array(
        'label'   => __('Show slider on category pages?', 'destro'),
        'section' => 'destro_slider_options',
        'type'    => 'select',
		'priority'   => 50,
        'choices' => $destro_yes_no_choices,
    ));	

	$wp_customize->add_setting(
		'magpro_slidernumposts', array(
        'default'        => $destro_defaults_new['magpro_slidernumposts'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'magpro_slidernumposts', array(
        'label'   => __( 'How many slides :', 'destro' ),
        'section' => 'destro_slider_options',
        'type'    => 'text',
		'priority'   => 60,
    ));
	
	$wp_customize->add_setting(
		'magpro_slider', array(
        'default'        => $destro_defaults_new['magpro_slider'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_slider',
    ));
    $wp_customize->add_control( 'magpro_slider', array(
        'label'   => __('Show slider on category pages?', 'destro'),
        'section' => 'destro_slider_options',
        'type'    => 'select',
		'priority'   => 70,
        'choices' => $destro_slider_choices,
    ));	
	
	/* Layout Settings */
	$wp_customize->add_panel( 'destro_layout_options', array(
		'priority'       => 500,
		'capability'     => 'edit_theme_options',
		'title'      => __('Layout Options', 'destro'),
	) );
	$wp_customize->add_section( 'destro_home_layout', array(
		'panel'		=> 'destro_layout_options',
		'priority'       => 100,
		'capability'     => 'edit_theme_options',
		'title'      => __('Select HomePage Layout', 'destro'),
	) );
	$wp_customize->add_setting(
		'homepage_layout', array(
        'default'        => $destro_defaults_new['homepage_layout'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_layout',
    ));
    $wp_customize->add_control( 'homepage_layout', array(
        'label'   => __('Select a homepage layout :', 'destro'),
        'section' => 'destro_home_layout',
        'type'    => 'select',
		'priority'   => 50,
        'choices' => $destro_layout_choices,
    ));						
	
	
	$wp_customize->add_section( 'destro_mag_layout', array(
		'panel'		=> 'destro_layout_options',
		'priority'       => 120,
		'capability'     => 'edit_theme_options',
		'title'      => __('Mag Settings', 'destro'),
	) );	
	$wp_customize->add_setting(
		'show_ratings_mag', array(
        'default'        => $destro_defaults_new['show_ratings_mag'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_ratings_mag', array(
        'label'   => __('Show ratings?', 'destro'),
        'section' => 'destro_mag_layout',
        'type'    => 'select',
		'priority'   => 10,
        'choices' => $destro_yes_no_choices,
    ));		
	$wp_customize->add_setting(
		'show_postthumbnail_mag', array(
        'default'        => $destro_defaults_new['show_postthumbnail_mag'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_postthumbnail_mag', array(
        'label'   => __('Show Thumbnail?', 'destro'),
        'section' => 'destro_mag_layout',
        'type'    => 'select',
		'priority'   => 20,
        'choices' => $destro_yes_no_choices,
    ));		
		
	$wp_customize->add_section( 'destro_maglite_layout', array(
		'panel'		=> 'destro_layout_options',
		'priority'       => 130,
		'capability'     => 'edit_theme_options',
		'title'      => __('MagLite Settings', 'destro'),
	) );		
	$wp_customize->add_setting(
		'show_ratings_maglite', array(
        'default'        => $destro_defaults_new['show_ratings_maglite'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_ratings_maglite', array(
        'label'   => __('Show ratings?', 'destro'),
        'section' => 'destro_maglite_layout',
        'type'    => 'select',
		'priority'   => 10,
        'choices' => $destro_yes_no_choices,
    ));		
	$wp_customize->add_setting(
		'show_postthumbnail_maglite', array(
        'default'        => $destro_defaults_new['show_postthumbnail_maglite'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_postthumbnail_maglite', array(
        'label'   => __('Show Thumbnail?', 'destro'),
        'section' => 'destro_maglite_layout',
        'type'    => 'select',
		'priority'   => 20,
        'choices' => $destro_yes_no_choices,
    ));	
	
	$wp_customize->add_section( 'destro_standard_layout', array(
		'panel'		=> 'destro_layout_options',
		'priority'       => 130,
		'capability'     => 'edit_theme_options',
		'title'      => __('Standard Settings', 'destro'),
	) );
	$wp_customize->add_setting(
		'show_ratings_standard', array(
        'default'        => $destro_defaults_new['show_ratings_standard'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_ratings_standard', array(
        'label'   => __('Show ratings?', 'destro'),
        'section' => 'destro_standard_layout',
        'type'    => 'select',
		'priority'   => 10,
        'choices' => $destro_yes_no_choices,
    ));		
	$wp_customize->add_setting(
		'show_ctags_standard', array(
        'default'        => $destro_defaults_new['show_ctags_standard'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_ctags_standard', array(
        'label'   => __('Show Categories/Tags?', 'destro'),
        'section' => 'destro_standard_layout',
        'type'    => 'select',
		'priority'   => 20,
        'choices' => $destro_yes_no_choices,
    ));		
	
	$wp_customize->add_section( 'destro_sidebar', array(
		'priority'       => 600,
		'capability'     => 'edit_theme_options',
		'title'      => __('Sidebar Settings', 'destro'),
	) );
	$wp_customize->add_setting(
		'show_sidebar_ads', array(
        'default'        => $destro_defaults_new['show_sidebar_ads'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_sidebar_ads', array(
        'label'   => __('Show 300x250 ads in sidebar?', 'destro'),
        'section' => 'destro_sidebar',
        'type'    => 'select',
		'priority'   => 10,
        'choices' => $destro_yes_no_choices,
    ));	
	$wp_customize->add_setting(
		'show_sidebar_ads_onetwofive', array(
        'default'        => $destro_defaults_new['show_sidebar_ads_onetwofive'],
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'destro_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'show_sidebar_ads_onetwofive', array(
        'label'   => __('Show 125x125 ads in sidebar?', 'destro'),
        'section' => 'destro_sidebar',
        'type'    => 'select',
		'priority'   => 20,
        'choices' => $destro_yes_no_choices,
    ));		
	
				
	
}
add_action( 'customize_register', 'destro_customize_register' );

$destro_layout_choices = array(

	'maglite' => 'Mag Lite',
	'mag' => 'Mag',
	'standard' => 'Standard',

);

$destro_slider_choices = array(

	'cheader' => 'Custom Header',
	'wilto' => 'Wilto Slider',	

);

$destro_defaults = array(

	'skin_style' => 'default',
	'show_featured_image_single' => 'false',
	'show_rat_on_single' => 'true',
	'show_pd_on_single' => 'true',
	'show_cats_on_single' => 'true',
	'show_socialbuts_on_single' => 'true',	
	'show_author_bio' => 'true',
	'show_rss_box' => 'true',
	'show_social_box' => 'true',
	'show_np_box' => 'true',	
	'show_related_box' => 'true',
	'twitter_id' => '',
	'redit_id' => '',
	'delicious_id' => '',
	'technorati_id' => '',
	'facebook_id' => '',
	'stumble_id' => '',
	'youtube_id' => '',
	'flickr_id' => '',	
	'linkedin_id' => '',
	'google_id' => '',
	'magpro_slidercat' => 'default',	
	'show_magpro_slider_home' => 'true',
	'show_magpro_slider_single' => 'false',
	'show_magpro_slider_page' => 'false',	
	'show_magpro_slider_archive' => 'false',
	'magpro_slider_auto' => 'true',				
	'magpro_slidernumposts' => '5',
	'magpro_slider' => 'cheader',	
	'homepage_layout' => 'mag',
	'show_ratings_mag' => 'true',	
	'show_postthumbnail_mag' => 'true',
	'show_ratings_maglite' => 'true',	
	'show_postthumbnail_maglite' => 'true',
	'show_ratings_standard' => 'true',		
	'show_ctags_standard' => 'true',
	'show_sidebar_ads' => 'true',	
	'show_sidebar_ads_onetwofive' => 'true',			

);

$destro_option = get_option( 'optionsframework' );
								
$destro_options = get_option( $destro_option['id'] );

$destro_defaults_new = array_merge($destro_defaults, $destro_options);

$destro_options_categories = array( 'default' => 'Select a category');  
$destro_options_categories_obj = get_categories();
foreach ($destro_options_categories_obj as $category) {
    $destro_options_categories[$category->cat_ID] = $category->cat_name;
}

$destro_skin_choices = array( 
	
	'destro' => 'Destro', 
	'azurite' => 'Azurite', 
	'blaze' => 'Blaze', 
	'mead' => 'Mead', 
	'pink' => 'Pink', 
	'alken' => 'Alken', 
	'oren' => 'Oren', 
	'lity' => 'Lity', 
	'browne' => 'Browne', 
	'silv' => 'Silv', 
	'kawfee' => 'Kawfee', 
	'bred' => 'Bred', 
	'gren' => 'Gren', 
	'rubia' => 'Rubia', 
	'aqua' => 'Aqua', 
	'bgre' => 'Bgre', 
	'blby' => 'Blby', 
	'blbr' => 'Blbr', 
	'brow' => 'Brow', 
	'yrst' => 'Yrst', 
	'grun' => 'Grun', 
	'kafe' => 'Kafe', 
	'slek' => 'Slek', 
	'krem' => 'Krem', 
	'grngy' => 'Grngy',	
	'kopr' => 'Kopr',	
	'marn' => 'Marn',	
	'gree' => 'Gree',	
	'brwgrn' => 'Brwgrn',	
	'pnkr' => 'Pnkr',	
	'bkrd' => 'Bkrd',	
	'default' => 'Default',				

);



$destro_yes_no_choices = array( 'default' => 'Select an Option', 'true' => 'Yes', 'false' => 'No', );

/* Sanitization */
function destro_sanitize_yes_no( $value ) {
	global $destro_yes_no_choices;
    if ( ! array_key_exists( $value, $destro_yes_no_choices ) ){
        $value = 'default';
	}
    return $value;	
}
function destro_sanitize_skin($value){
	global $destro_skin_choices;
    if ( ! array_key_exists( $value, $destro_skin_choices ) ){
        $value = 'default';
	}
    return $value;	
}
function destro_sanitize_cat($value){
	global $destro_options_categories;
    if ( ! array_key_exists( $value, $destro_options_categories ) ){
        $value = 'default';
	}
    return $value;	
}
function destro_sanitize_slider($value){
	global $destro_slider_choices;
    if ( ! array_key_exists( $value, $destro_slider_choices ) ){
        $value = 'default';
	}
    return $value;	
}
function destro_sanitize_layout($value){
	global $destro_layout_choices;
    if ( ! array_key_exists( $value, $destro_layout_choices ) ){
        $value = 'default';
	}
    return $value;	
}