<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" a href="<?php echo get_template_directory_uri();?> /css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" a href="<?php echo get_template_directory_uri();?> /css/bootstrap.min.css" type="text/css">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>


<div class="col-md-9">
          <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'navbarSupportedContent') ); ?>
        </div>
