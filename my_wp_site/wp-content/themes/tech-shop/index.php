<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body class="">
<div> 
<section id="sidebar">

    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
    
    <?php dynamic_sidebar('sidebar'); ?><br>
    
        <?php else : ?>
    
        <div class="meta-default">

            <?php /* optional */ 
			the_widget( 'WP_Widget_Categories', '', '' ); ?>
                <?php /* minimal */ 
				get_search_form(); ?>

					<nav class="sidebar-login">
                        <ul><?php wp_loginout(); ?></ul>
					</nav>
        </div>

    <?php endif;  ?>

</section>
</div>
<ul id="sidebar">
<?php if ( ! dynamic_sidebar() ) : ?>
	<li>{static sidebar item 1}</li>
	<li>{static sidebar item 2}</li>
<?php endif; ?>
</ul>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        ?> 
	
		<?php the_title( '<h3>', '</h3>' ); ?>

        <?php
	
	} // end while
} // end if
?>


    <?php wp_footer();?>
</body>
</html>