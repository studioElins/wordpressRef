<?php
    /*    HEADER file     */
    #bloginfo( name | description | charset | template_url | stylesheet_url | version | -> и т.д на кодексе ) - выводит стандартную информацию о сайте
    #wp_head() - функция подключения необходимых стилей, и верхней панели управления ( не работает без wp_footer() )
    #body_class() - фукнция передачи стандартных классов ( рекомендуется для избежания конфликтов! )
    #wp_get_document_title() - функция вывода текущего заголовка страници (альтернатива wp_title )
    $my_class = array('first_class', 'second_class'); // передать аргумент со своими классами
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); echo wp_get_document_title(); ?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class( $my_class ); ?>>
    <!-- start header template -->
    <p>header</p>
