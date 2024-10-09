<?php
/*
Plugin Name: Developer Forest
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Checks the health of your WordPress install
Version: 0.1.0
Author: Mohammad Abdullah-Al-Nazad
Author URI: http://health-check-team.example.com
Text Domain: ghgfjgh
Domain Path: /languages
*/

// when activate the Plugin-------------
register_activation_hook(
    __FILE__,
    'create_table'
);

function create_table(){
    global $wpdb;
    $table=$wpdb->prefix.'teachers';
    $query="CREATE TABLE $table(id int AUTO_INCREMENT PRIMARY KEY,name varchar(255),email varchar(50),phone varchar(15),salary decimal(10,2))";
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $query );
    $add="insert into $table(name,email,phone,salary)values('Habib','habib@email.com','017','25000')";
    $wpdb->query($add);
    //require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	//dbDelta( $query );
    //or--below any one use-------
    //$wpdb->query($query);
}



// When Deactivate the plugin-----------------
register_deactivation_hook(
    __FILE__,
    'delete_table'
);
function delete_table(){
    global $wpdb;
    $table=$wpdb->prefix.'teachers';
    $query= "DROP table $table";
    $wpdb->query($query);
}

add_shortcode('test_code', 'testCode');
function testCode($atts, $content = '', $tag){
    include dirname(__FILE__) . '/page.php';
}
function add_my_menu()
{
    add_menu_page(
        'Stock Report',
        'Garments',
        'manage_options',
        'Dashboard',
        function () {
            include dirname(__FILE__) . '/dashboard.php';
        }
    );

    add_submenu_page(
        'Dashboard',
        'Material Stock report',
        'Stock Report',
        'manage_options',
        'Material report',
        function () {
                     include dirname(__FILE__) . '/sub.php';
                 }
    );
    add_submenu_page(
        'Stock Report',
        'Showers',
        'Custom page',
        'manage_options',
        'Show_report',
        function () {
            include dirname(__FILE__) . '/report.php';
        }
    );
}
add_action('admin_menu', 'add_my_menu');

?>


<?php 
?>