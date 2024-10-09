<?php
add_theme_support('post-thumbnails');
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Load Stylesheet
function add_my_styles()
{
    wp_enqueue_style('style2', get_template_directory_uri() . "/css/style.css", array('bootstrap'));
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap'));
    wp_enqueue_style('favicon', get_template_directory_uri() . "/img/favicon.ico");
    wp_enqueue_style('gapi', "https://fonts.googleapis.com");
    wp_enqueue_style('gstatic', "https://fonts.gstatic.com");
    wp_enqueue_style('gapi2', "https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap");
    wp_enqueue_style('cloudflare', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css");
    wp_enqueue_style('jsdelivr', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css");
    wp_enqueue_style('carousel1', get_template_directory_uri() . "/lib/owlcarousel/assets/owl.carousel.min.css");
    wp_enqueue_style('animate', get_template_directory_uri() . "/lib/animate/animate.min.css");
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style('carousel', get_template_directory_uri() . "/lib/owlcarousel/assets/owl.carousel.min.css");
}
add_action('wp_enqueue_scripts', 'add_my_styles');

//Load Javascript
function add_my_scripts()
{
    wp_enqueue_script('jsdeliver1', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js", array(), null, true);
    wp_enqueue_script('jq1', "https://code.jquery.com/jquery-3.4.1.min.js", array(), null, true);
    wp_enqueue_script('js1', get_template_directory_uri() . "/lib/wow/wow.min.js", array(), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . "/lib/easing/easing.min.js", array(), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . "/lib/waypoints/waypoints.min.js", array(), null, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . "/lib/counterup/counterup.min.js", array(), null, true);
    wp_enqueue_script('jscarousel', get_template_directory_uri() . "/lib/owlcarousel/owl.carousel.min.js", array(), null, true);
    wp_enqueue_script('js2', get_template_directory_uri() . "/js/main.js", array(), null, true);
    wp_enqueue_script('frscript', get_template_directory_uri() . "/frscript.js", array('jq1'), null, true);
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

// Theme options
add_theme_support('menus');
add_theme_support('widgets');


//Menus
// register_nav_menus(
//     array(
//         'top-menu' => 'Top Menu Location'
//     )
// );

//nav bar 1.1 / menu top start

// functions.php

if (!function_exists('mytheme_register_nav_menu')) {
    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'footer_menu'  => __('Footer Menu', 'text_domain'),
        ));
    }
    add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}

//navbar ends here

//Sliders
// Register Custom Post Type
function custom_post_type_sliders()
{

    $labels = array(
        'name'                  => _x('Sliders', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Slider', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Sliders', 'text_domain'),
        'name_admin_bar'        => __('Slider', 'text_domain'),
        'archives'              => __('Item Archives', 'text_domain'),
        'attributes'            => __('Item Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Item:', 'text_domain'),
        'all_items'             => __('All Items', 'text_domain'),
        'add_new_item'          => __('Add New Slider', 'text_domain'),
        'add_new'               => __('Add New Slider', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'view_items'            => __('View Items', 'text_domain'),
        'search_items'          => __('Search Item', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list'            => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Slider', 'text_domain'),
        'description'           => __('Top slider', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'excerpt', 'thumbnail'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-slides',
    );
    register_post_type('sliders', $args);
}
add_action('init', 'custom_post_type_sliders', 0);
// Slider Ends Here

// customize theme

function my_customizer($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options',
        array(
            'title'            => __('Theme Options', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );

    $wp_customize->add_section(
        'about_us',
        array(
            'title'         => __('About Us', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options'
        )
    );
    $wp_customize->add_section(
        'why_choose_us',
        array(
            'title'         => __('Feature', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options'
        )
    );

    $wp_customize->add_section(
        'request_quote',
        array(
            'title'         => __('Request Quote', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options'
        )
    );

    // $wp_customize->add_section(
    //     'zahid',
    //     array(
    //         'title'         => __('Zahid', 'my_theme'),
    //         'priority'      => 1,
    //         'panel'         => 'my_theme_options'
    //     )
    // );

    //Setting for Copyright text.
    $wp_customize->add_setting(
        'title',
        array(
            'default'           => __('The Best IT Solution With 10 Years of Experience Rakib', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_setting(
        'about_us_details',
        array(
            'default'           => __('Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet minhaz', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'about_contact',
        array(
            'default'           => __('+012 345 6789', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'wcu_title',
        array(
            'default'           => __('We Are Here to Grow Your Business Exponentially', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'wcu_title_sub_1_left',
        array(
            'default'           => __('Best In Industry', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'wcu_title_sub_1_left_details',
        array(
            'default'           => __('Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'wcu_title_sub_2_left',
        array(
            'default'           => __('Award Winning', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'wcu_title_sub_2_left_details',
        array(
            'default'           => __('Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'wcu_title_sub_1_right',
        array(
            'default'           => __('Professional Staff', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'wcu_title_sub_1_right_details',
        array(
            'default'           => __('Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'wcu_title_sub_2_right',
        array(
            'default'           => __('24/7 Support', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_setting(
        'wcu_title_sub_2_right_details',
        array(
            'default'           => __('Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    // $wp_customize->add_setting(
    //     'title2',
    //     array(
    //         'default'           => __('The Best IT Solution With 10 Years of Experience Rakib', 'my_theme'),
    //         'sanitize_callback' => 'sanitize_text_field',
    //         'transport'         => 'refresh',
    //     )
    // );
    // Control for Copyright text
    $wp_customize->add_control(
        'title',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'about_us',
            'label'       => 'Title',
            'description' => 'Text put here will be outputted in the title',
        )
    );
    $wp_customize->add_control(
        'about_contact',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'about_us',
            'label'       => 'Contact',
            'description' => 'Text put here will be outputted in the title',
        )
    );
    $wp_customize->add_control(
        'about_us_details',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'about_us',
            'label'       => 'Details',
            'description' => 'Text put here will be outputted in the title',
        )
    );
    $wp_customize->add_control(
        'wcu_title',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'why_choose_us',
            'label'       => 'Main Title',
            'description' => 'Text put here will be outputted in the title',
        )
    );
    $wp_customize->add_control(
        'wcu_title_sub_1_left',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'why_choose_us',
            'label'       => 'Sub Title Left 1',
            'description' => 'Text put here will be outputted in the sub left title 1',
        )
    );
    $wp_customize->add_control(
        'wcu_title_sub_1_left_details',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'why_choose_us',
            'label'       => 'Sub Title Left 1 Details',
            'description' => 'Text put here will be outputted in the sub left title details 1',
        )
    );
    $wp_customize->add_control(
        'wcu_title_sub_2_left',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'why_choose_us',
            'label'       => 'Sub Title Left 2',
            'description' => 'Text put here will be outputted in the sub left title 2',
        )
    );
    $wp_customize->add_control(
        'wcu_title_sub_2_left_details',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'why_choose_us',
            'label'       => 'Sub Title Left 2 Details',
            'description' => 'Text put here will be outputted in the sub left title 2 details',
        )
    );
    $wp_customize->add_control(
        'wcu_title_sub_1_right',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'why_choose_us',
            'label'       => 'Sub Title Right 1',
            'description' => 'Text put here will be outputted in the sub right title 1',
        )
    );
    $wp_customize->add_control(
        'wcu_title_sub_1_right_details',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'why_choose_us',
            'label'       => 'Sub Title Right 1 Details',
            'description' => 'Text put here will be outputted in the sub right title 1 Details',
        )
    );
    $wp_customize->add_control(
        'wcu_title_sub_2_right',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'why_choose_us',
            'label'       => 'Sub Title Right 2',
            'description' => 'Text put here will be outputted in the sub right title 2',
        )
    );
    $wp_customize->add_control(
        'wcu_title_sub_2_right_details',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'why_choose_us',
            'label'       => 'Sub Title Right 2 Details',
            'description' => 'Text put here will be outputted in the sub right title 2 details',
        )
    );
    // $wp_customize->add_control(
    //     'title2',
    //     array(
    //         'type'        => 'text',
    //         'priority'    => 10,
    //         'section'     => 'zahid',
    //         'label'       => 'Title',
    //         'description' => 'Text put here will be outputted in the title',
    //     )
    // );
    $wp_customize->add_setting('about_us_image', array(
        'capability'        => 'edit_theme_options',
        'default'           => get_template_directory_uri() . "/img/about.jpg",
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'about_us_image',
        array(
            'label'    => __('Add Image', 'text-domain'),
            'section'  => 'about_us',
            'settings' => 'about_us_image',
        )
    ));
    $wp_customize->add_setting('wcu_image', array(
        'capability'        => 'edit_theme_options',
        'default'           => get_template_directory_uri() . "/img/feature.jpg",
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'wcu_image',
        array(
            'label'    => __('Add Image', 'text-domain'),
            'section'  => 'why_choose_us',
            'settings' => 'wcu_image',
        )
    ));

    //team section

    $wp_customize->add_section(
        'team_members',
        array(
            'title'         => __('Team Members', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options'
        )
    );
    //title
    $wp_customize->add_setting(
        'team_title',
        array(
            'default'           => __('Professional Stuffs Ready to Help Your Business', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'team_title',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'team_members',
            'label'       => 'Title',
            'description' => 'Text put here will be outputted in the title',
        )
    );
    //name 1
    $wp_customize->add_setting(
        'team_name_1',
        array(
            'default'           => __('Fazle Rabby', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'team_name_1',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'team_members',
            'label'       => 'Name 1',
            'description' => 'Text put here will be outputted in the Name 1',
        )
    );
    $wp_customize->add_setting(
        'team_designation_1',
        array(
            'default'           => __('Sinior Programmer', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'team_designation_1',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'team_members',
            'label'       => 'Designation 1',
            'description' => 'Text put here will be outputted in the Designation 1',
        )
    );
    $wp_customize->add_setting('team_image_1', array(
        'capability'        => 'edit_theme_options',
        'default'           => get_template_directory_uri() . "/img/team-1.jpg",
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'team_image_1',
        array(
            'label'    => __('Add Image', 'text-domain'),
            'section'  => 'team_members',
            'settings' => 'team_image_1',
        )
    ));

    //name 2

    $wp_customize->add_setting(
        'team_name_2',
        array(
            'default'           => __('Rupa', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'team_name_2',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'team_members',
            'label'       => 'Name 2',
            'description' => 'Text put here will be outputted in the Name 2',
        )
    );
    $wp_customize->add_setting(
        'team_designation_2',
        array(
            'default'           => __('Junior Programmer', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'team_designation_2',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'team_members',
            'label'       => 'Designation 2',
            'description' => 'Text put here will be outputted in the Designation 2',
        )
    );
    $wp_customize->add_setting('team_image_2', array(
        'capability'        => 'edit_theme_options',
        'default'           => get_template_directory_uri() . "/img/team-2.jpg",
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'team_image_2',
        array(
            'label'    => __('Add Image 3', 'text-domain'),
            'section'  => 'team_members',
            'settings' => 'team_image_2',
        )
    ));

    //name 3 last

    $wp_customize->add_setting(
        'team_name_3',
        array(
            'default'           => __('Helal', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'team_name_3',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'team_members',
            'label'       => 'Name 3',
            'description' => 'Text put here will be outputted in the Name 3',
        )
    );
    $wp_customize->add_setting(
        'team_designation_3',
        array(
            'default'           => __('Software Engineer', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'team_designation_3',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'team_members',
            'label'       => 'Designation 3',
            'description' => 'Text put here will be outputted in the Designation 3',
        )
    );
    $wp_customize->add_setting('team_image_3', array(
        'capability'        => 'edit_theme_options',
        'default'           => get_template_directory_uri() . "/img/team-3.jpg",
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'team_image_3',
        array(
            'label'    => __('Add Image 3', 'text-domain'),
            'section'  => 'team_members',
            'settings' => 'team_image_3',
        )
    ));

    // Request a Quote
    $wp_customize->add_setting(
        'raq_title',
        array(
            'default'           => __('Need A Free Quote? Please Feel Free to Contact Us', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'raq_title',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'request_quote',
            'label'       => 'Title',
            'description' => 'Text put here will be outputted in the Title',
        )
    );

    $wp_customize->add_setting(
        'raq_details',
        array(
            'default'           => __('Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'raq_details',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'request_quote',
            'label'       => 'Details',
            'description' => 'Text put here will be outputted in the Details',
        )
    );

    $wp_customize->add_setting(
        'raq_phone',
        array(
            'default'           => __('+02 9554523', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'raq_phone',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'request_quote',
            'label'       => 'Phone',
            'description' => 'Text put here will be outputted in the Phone',
        )
    );

    // Services

    $wp_customize->add_section(
        'our_services',
        array(
            'title'         => __('Team Members', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options'
        )
    );

    $wp_customize->add_setting(
        'our_services_title1',
        array(
            'default'           => __('Our Services', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_title1',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Mini Title',
            'description' => 'Text put here will be outputted in the Mini Ttile',
        )
    );

    $wp_customize->add_setting(
        'our_services_title2',
        array(
            'default'           => __('Custom IT Solutions for Your Successful Business', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_title2',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Big Title',
            'description' => 'Text put here will be outputted in the Big Title',
        )
    );


    $wp_customize->add_setting(
        'our_services_sub_title1',
        array(
            'default'           => __('Cyber Security', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_title1',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Title 1',
            'description' => 'Text put here will be outputted in the Sub Title 1',
        )
    );

    $wp_customize->add_setting(
        'our_services_sub_details_1',
        array(
            'default'           => __('Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_details_1',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Details 1',
            'description' => 'Text put here will be outputted in the Sub Details 1',
        )
    );

    $wp_customize->add_setting(
        'our_services_sub_title2',
        array(
            'default'           => __('Data Analytics', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_title2',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Title 2',
            'description' => 'Text put here will be outputted in the Sub Title 2',
        )
    );

    $wp_customize->add_setting(
        'our_services_sub_details_2',
        array(
            'default'           => __('Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_details_2',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Details 2',
            'description' => 'Text put here will be outputted in the Sub Details 2',
        )
    );

    $wp_customize->add_setting(
        'our_services_sub_title3',
        array(
            'default'           => __('Web Development', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_title3',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Title 3',
            'description' => 'Text put here will be outputted in the Sub Title 3',
        )
    );

    $wp_customize->add_setting(
        'our_services_sub_details_3',
        array(
            'default'           => __('Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_details_3',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Details 3',
            'description' => 'Text put here will be outputted in the Sub Details 3',
        )
    );

    $wp_customize->add_setting(
        'our_services_sub_title4',
        array(
            'default'           => __('Apps Development', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_title4',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Title 4',
            'description' => 'Text put here will be outputted in the Sub Title 4',
        )
    );

    $wp_customize->add_setting(
        'our_services_sub_details_4',
        array(
            'default'           => __('Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_details_4',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Details 4',
            'description' => 'Text put here will be outputted in the Sub Details 4',
        )
    );

    $wp_customize->add_setting(
        'our_services_sub_title5',
        array(
            'default'           => __('SEO Optimization', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_title5',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Title 5',
            'description' => 'Text put here will be outputted in the Sub Title 5',
        )
    );

    $wp_customize->add_setting(
        'our_services_sub_details_5',
        array(
            'default'           => __('Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_sub_details_5',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Sub Details 5',
            'description' => 'Text put here will be outputted in the Sub Details 5',
        )
    );

    $wp_customize->add_setting(
        'our_services_quote_title',
        array(
            'default'           => __('Call Us For Quote', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_quote_title',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Quote Title',
            'description' => 'Text put here will be outputted in the Quote Title',
        )
    );

    $wp_customize->add_setting(
        'our_services_quote_details',
        array(
            'default'           => __('Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_quote_details',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Quote Details',
            'description' => 'Text put here will be outputted in the Quote Details',
        )
    );

    $wp_customize->add_setting(
        'our_services_quote_phone',
        array(
            'default'           => __('+880 1521330864', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        'our_services_quote_phone',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'our_services',
            'label'       => 'Quote Phone',
            'description' => 'Text put here will be outputted in the Quote Phone',
        )
    );

    //Home Options

    $wp_customize->add_section(
        'theme_options1',
        array(
            'title'         => __('Theme Options', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options'
        )
    );

    $wp_customize->add_setting(
        'tsu_title',
        array(
            'default'           => __('Startup', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'tsu_title',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'theme_options1',
            'label'       => 'Theme Title Name',
            'description' => 'Text put here will be outputted in the Theme Main Title',
        )
    );

    $wp_customize->add_setting(
        'tsu_icon',
        array(
            'default'           => __('fa fa-user-tie me-2', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'tsu_icon',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'theme_options1',
            'label'       => 'Font Code (Font Awesome)',
            'description' => 'Text put here will be outputted in the Theme Main Title',
        )
    );







}
function ic_sanitize_image($file, $setting)
{

    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

    //check file type from file name
    $file_ext = wp_check_filetype($file, $mimes);

    //if file has a valid mime type return it, otherwise return default
    return ($file_ext['ext'] ? $file : $setting->default);
}
add_action('customize_register', 'my_customizer');

//excerpt lenth function

function custom_excerpt_length()
{
    return 20; // Adjust the number to your desired excerpt length
}
add_filter('excerpt_length', 'custom_excerpt_length');

// Add custom author name field to the post editor
function add_author_name_field()
{
    add_meta_box(
        'author_name_field',
        'Author Name',
        'render_author_name_field',
        'post',
        'normal',
        'default'
    );
}

function render_author_name_field($post)
{
    // Retrieve the current author name value
    $author_name = get_post_meta($post->ID, '_author_name', true);

    // Output the HTML for the author name field
?>
    <label for="author_name">Author Name:</label>
    <input type="text" id="author_name" name="author_name" value="<?php echo esc_attr($author_name); ?>" style="width: 100%;">
    <?php
}

function save_author_name_field($post_id)
{
    // Save the author name value when the post is saved or updated
    if (isset($_POST['author_name'])) {
        update_post_meta($post_id, '_author_name', sanitize_text_field($_POST['author_name']));
    }
}

// Hook into WordPress to add the custom author name field
add_action('add_meta_boxes', 'add_author_name_field');
add_action('save_post', 'save_author_name_field');

//Register sidebars
function fazle_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}

add_action('widgets_init', 'fazle_sidebars');

// widget my first custom widget

class Weather_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'weather_widget',
            'Weather Widget',
            array('description' => 'Display current weather information.')
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        // Display weather here
        $city = isset($instance['city']) ? sanitize_text_field($instance['city']) : 'Dhaka'; // Default city is Dhaka
        $api_key = 'd6f8902a004a1a68335074a8c2ae48ed'; // Replace with your OpenWeatherMap API key

        $weather_data = $this->get_weather_data($city, $api_key);

        if ($weather_data && isset($weather_data['main'])) {
            $temperature = round($weather_data['main']['temp'] - 273.15, 0); // Convert Kelvin to Celsius
            $wcondition = $weather_data['weather'][0]['main'];
            $name = $weather_data['name'];
            $windspeed = $weather_data['wind']['speed'];
            $humidity = $weather_data['main']['humidity'];
            $sunrise_timestamp = $weather_data['sys']['sunrise'];;

            // Convert to desired format
            $sunrise_time = date("h:i A", $sunrise_timestamp);


            // echo '<p>Temperature: ' . esc_html($temperature) . '°C</p>';
            // echo '<p>Condition: ' . esc_html($description) . '</p>';
            echo "<section class='' style='background-color: gray;'>
            <div class='container py-5 h-100'>
          
              <div class='row d-flex justify-content-center align-items-center h-100'>
                <div class='col-md-12'>
          
                  <div class='card' style='color: #4B515D; border-radius: 35px;'>
                    <div class='card-body p-4'>
          
                      <div class='d-flex'>
                        <h6 class='flex-grow-1'>$name</h6>
                        <h6></h6>
                      </div>
          
                      <div class='d-flex flex-column text-center mt-5 mb-4'>
                        <h6 class='display-4 mb-0 font-weight-bold' style='color: #1C2331;'>" . $temperature . "°C </h6>
                        <span class='small' style='color: #868B94'>$wcondition</span>
                      </div>
          
                      <div class='d-flex align-items-center'>
                        <div class='flex-grow-1' style='font-size: 1rem;'>
                          <div><i class='fas fa-wind fa-fw' style='color: #868B94;'></i> <span class='ms-1'> $windspeed km/h
                            </span></div>
                          <div><i class='fas fa-tint fa-fw' style='color: #868B94;'></i> <span class='ms-1'> $humidity% </span>
                          </div>
                          <div><i class='fas fa-sun fa-fw' style='color: #868B94;'></i> <span class='ms-1'> $sunrise_time </span>
                          </div>
                        </div>
                        <div>
                          <img src='https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/ilu1.webp'
                            width='100px'>
                        </div>
                      </div>
          
                    </div>
                  </div>
          
                </div>
              </div>
          
            </div>
          </section>
          ";
        } else {
            echo '<p>Error fetching weather data</p>';
        }

        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $city = isset($instance['city']) ? esc_attr($instance['city']) : 'Dhaka';
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('city'); ?>">City:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo $city; ?>" />
        </p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['city'] = sanitize_text_field($new_instance['city']);
        return $instance;
    }

    private function get_weather_data($city, $api_key)
    {
        $api_url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
        $response = wp_remote_get($api_url);

        if (is_wp_error($response)) {
            return false;
        }

        $body = wp_remote_retrieve_body($response);
        $weather_data = json_decode($body, true);

        return $weather_data;
    }
}

function register_weather_widget()
{
    register_widget('Weather_Widget');
}

add_action('widgets_init', 'register_weather_widget');

// new custo post for clients starts here

// Register Custom Post Type
function custom_post_type_clients() {

	$labels = array(
		'name'                  => _x( 'Clients', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Client', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Clients', 'text_domain' ),
		'name_admin_bar'        => __( 'Client', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Client', 'text_domain' ),
		'description'           => __( 'Adds Clients Name and Details', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-businesswoman',
	);
	register_post_type( 'clients', $args );

}
add_action( 'init', 'custom_post_type_clients', 0 );

// ends here

//Vendor Custom post type Starts Her

function custom_post_type_vendors() {

	$labels = array(
		'name'                  => _x( 'vendors', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'vendor', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Vendors', 'text_domain' ),
		'name_admin_bar'        => __( 'vendor', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'endor', 'text_domain' ),
		'description'           => __( 'Adds vendors Name and Details', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'thumbnail', 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
	);
	register_post_type( 'custom_vendors', $args );

}
add_action( 'init', 'custom_post_type_vendors', 0 );

//Vendor Ends Here