<?php
/*
Plugin Name: Round 56 Plugin
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Checks the health of your WordPress install
Version: 0.1.0
Author: The Test Plugin Team
Author URI: http://health-check-team.example.com
Text Domain: ghgfjgh
Domain Path: /languages
*/

register_activation_hook(
    __FILE__,
    'create_table'
);
function create_table()
{
    global $wpdb;
    $table = $wpdb->prefix . "students";
    $query = "CREATE TABLE $table(id int AUTO_INCREMENT PRIMARY KEY,name varchar(255),email varchar(50),phone varchar(15))";
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($query);
    $add = "insert into $table(name,email,phone)values('Habib','habib@email.com','017')";
    $wpdb->query($add);
}

register_deactivation_hook(
    __FILE__,
    'delete_table'
);

function delete_table()
{
    global $wpdb;
    $table = $wpdb->prefix . "students";
    $query = "drop table $table";
    $wpdb->query($query);
}

add_shortcode('test_code', 'testCode');
function testCode($atts, $content = '', $tag)
{
    include dirname(__FILE__) . '/page.php';
}

function add_my_menu()
{
    add_menu_page(
        'student',
        'student Menu',
        'manage_options',
        'student',
        function () {
            include dirname(__FILE__) . '/page.php';
        }
    );
    add_menu_page(
        'Contact',
        'Contact Menu',
        'manage_options',
        'contact',
        function () {
            include dirname(__FILE__) . '/contact.php';
        }
    );


    // add_menu_page(
    //     'My Custom Page',
    //     'My Custom Page',
    //     'manage_options',
    //     'my-top-level-slug'
    // );
    // add_submenu_page(
    //     'my-top-level-slug',
    //     'My Custom Page',
    //     'My Custom Page',
    //     'manage_options',
    //     'my-top-level-slug',
    //     function () {
    //         include dirname(__FILE__) . '/sub.php';
    //     }
    // );
    // add_submenu_page(
    //     'my-top-level-slug',
    //     'My Custom Submenu Page',
    //     'My Custom Submenu Page',
    //     'manage_options',
    //     'my-secondary-slug',
    //     function () {
    //         include dirname(__FILE__) . '/page.php';
    //     }
    // );
}
function contact_fn()
{
    echo  "Welcome";
}
add_action('admin_menu', 'add_my_menu');

add_action('admin_post_save_student', 'post_student');
function post_student()
{
    global $wpdb;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $table = $wpdb->prefix . "students";
    $wpdb->insert($table,['name'=>$name,'email'=>$email,'phone'=>$phone]);
    
    // $add = "insert into $table(name,email,phone)values('$name','$email','$phone')";
    // $wpdb->query($add);
    wp_redirect(admin_url(''));
    exit;
}

add_shortcode('contact_form', 'contactForm');
function contactForm($atts, $content = '', $tag)
{
    include dirname(__FILE__) . '/contact.php';
}

add_action('admin_post_nopriv_save_contact', 'post_contact');
function post_contact()
{
    if(wp_verify_nonce($_POST['test_nonce'],'test_nonce')){
        echo "<pre>";
        print_r($_POST);
    }else{
        echo "ERROR";
    }   
}
/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function wporg_add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'wporg_dashboard_widget',                          // Widget slug.
		esc_html__( 'Example Dashboard Widget', 'wporg' ), // Title.
		'wporg_dashboard_widget_render'                    // Display function.
	); 
}
add_action( 'wp_dashboard_setup', 'wporg_add_dashboard_widgets' );

/**
 * Create the function to output the content of our Dashboard Widget.
 */
function wporg_dashboard_widget_render() {
	// Display whatever you want to show.
	esc_html_e( "Howdy! I'm a great Dashboard Widget.", "wporg" );
}