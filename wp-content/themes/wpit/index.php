<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>" />
    <title><?php bloginfo('name') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/home.css" />
    <?php wp_head(); ?>
    <script>
        function changer(id){
            title = document.getElementById(id);
            if( title.innerHTML == "J. G. R. S."){
                title.innerHTML = "José Smutný";
            }
            else {
                title.innerHTML = "J. G. R. S.";
            }
        }
    </script>
</head>
<body>

<?php 

$args = array(
    'theme_location' => 'start'
);

?>

<div id="content">
    <h1 onclick="changer(this.id)" id="title">José Smutný</h1>
    <?php wp_nav_menu($args); ?>
    <div id="background">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/images/home-backgroundM.jpg" alt="photography of snowy forest"
                srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/home-backgroundS.jpg 1450w,
                        <?php echo get_stylesheet_directory_uri(); ?>/images/home-backgroundM.jpg 1940w,
                        <?php echo get_stylesheet_directory_uri(); ?>/images/home-backgroundL.jpg 3200w"	
        />
    </div>	
</div>

<?php
    get_footer();
?>