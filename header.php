 <!-- Barra navegador header -->
 <!doctype html <?php language_attributes();?>> <!-- actualiza segun idioma de la pagina-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?> <!-- incluye css de plugins, elementos externos-->
    <title>InformaTICs</title>
    <!-- hoja de estilos style.css -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' );?>">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Favicon-->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/icono.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!--fuente de texto Titillium Web-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    
</head>

    <!--Barra administracion, solo visible para los administradores del sitio-->
    <body <?php body_class(); ?>>   <!--Estructura de la barra-->
    <?php wp_body_open(); ?> <!--Activa los elementos de la administracion-->
    <div id="page" class="site">
   

    <!--Barra principal-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
        <img src="<?php bloginfo('template_url'); ?>/assets/logosinfondo.PNG" alt="informatics">
        <div class="barra-principal text-xs-right">

        <?php
        wp_nav_menu( array(
          'theme_location' => 'top',
          'container' => 'nav',
          'container_class' => 'container',
          'menu_class' => 'menu-list list-inline'
        ) );
      ?>
        </div>
    
  </head>
  <body>
    <header>
        <?php echo do_shortcode('[gtranslate]'); ?> <!--Idiomas desde plugin externo, Gtranslate-->
           
        </div>
    </nav>
    </header>

    <div id="main">
      <div class="container">