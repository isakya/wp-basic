<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IZUMI</title>
    <?php wp_head(); ?>
</head>

<?php
    if(is_front_page()):
        $izumi_classes = array('izumi_class', 'my-class');
    else:
        $izumi_classes = array('no-izumi-class');
    endif;
?>

<body <?php body_class($izumi_classes); ?>>
<?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'nav navbar-nav navbar-right',
        'walker' => new Walker_Nav_Primary()
)); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>" alt="">


<?php get_search_form(); ?>