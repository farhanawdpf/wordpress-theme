<?php
/*
Plugin Name: Startup Form by Fazle ON
Plugin URI: https://www.facebook.com/thefazlerabby
Description: This adds form to website
Version: 0.0.1
Author: Fazle Rabby
Author URI: http://www.facebook.com/thefazlerabby
Text Domain: startup-form-fazlerabby
Domain Path: /sartupfrombyfazle
*/

//Activation

register_activation_hook(
    __FILE__,
    'ActivationFn'
);

function ActivationFn()
{
    global $wpdb;
    $table = $wpdb->prefix . "startup_fazle";
    $query = "CREATE TABLE $table(id int AUTO_INCREMENT PRIMARY KEY,name varchar(50),email varchar(50),service varchar(50),message varchar(255))";
    $wpdb->query($query);
}

//Deactivation

register_deactivation_hook(
    __FILE__,
    'DeactivationFn'
);

function DeactivationFn()
{
    global $wpdb;
    $table = $wpdb->prefix . "startup_fazle";
    $query = "drop table $table";
    $wpdb->query($query);
}

//Custom Menu

function form_menu()
{
    add_menu_page(
        "Startup Form by Fazle",
        "Home Form",
        "manage_options",
        "startup-form",
        function () {
            include dirname(__FILE__) . "/form_page.php";
        },
        "dashicons-media-document"
    );
}

add_action("admin_menu", "form_menu");

//Menu form 1

add_action('admin_post_form_fazle', 'save_form_data');
function save_form_data()
{
    global $wpdb;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    $table = $wpdb->prefix . "startup_fazle";
    $add = "insert into $table(name,email,service,message)values('$name','$email','$service','$message')";
    $wpdb->query($add);
    wp_redirect(admin_url('admin.php?page=startup-form'));
}

add_action('admin_post_nopriv_form_fazle_home', 'save_form_data_home');
function save_form_data_home()
{
    global $wpdb;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    $table = $wpdb->prefix . "startup_fazle";
    $add = "insert into $table(name,email,service,message)values('$name','$email','$service','$message')";
    $wpdb->query($add);
    wp_redirect(home_url());
    exit;
}

add_action('admin_post_update_fazle', 'edit_form_data');
function edit_form_data()
{
    global $wpdb;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    $table = $wpdb->prefix . "startup_fazle";
    $wpdb->update($table, ['name' => $name, 'email' => $email, 'service' => $service, 'message' => $message], ['id' => $id]);
    wp_redirect(admin_url('admin.php?page=startup-form'));
}

add_shortcode('startup_form', 'testCode');
function testCode($atts, $content = '', $tag)
{
    include dirname(__FILE__) . '/home_form.php';
}
