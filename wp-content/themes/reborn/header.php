<?php global $web; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Reborn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="">

    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170617822-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-170617822-1');
    </script>


</head>

<body <?php body_class(); ?>>




    <header class="page-header">
        <div id="hamburger">
            <div id="hamburger-content">
                <div class="wrap">
                    <nav class="nav">
                        <ul class="navigation">
                            <li class="btn-menu active"><a href="<?php echo esc_url(home_url('/')) ?>" title="">Accueil</a></li>
                            <li class="btn-menu active"><a href="<?php echo esc_url(home_url($web['pages']['produits']['slug'])); ?>" title="">Nos produits</a></li>
                            <li class="btn-menu logo_burger"><a href="<?php echo home_url('/'); ?>"><img class="logo-header" src="<?php echo get_template_directory_uri(); ?>/asset/img/logo.png" alt="Logo Reborn"></a></li>
                            <li class="btn-menu active"><a href="<?php echo esc_url(home_url($web['pages']['tresors']['slug'])); ?>" title="">nos Trésors</a></li>
                            <li class="btn-menu active"><a href="<?php echo esc_url(home_url($web['pages']['blog']['slug'])); ?>" title="">Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <button id="hamburger-button">&#9776</button>
            <div id="element_vide_droite"></div>
            <div id="hamburger-sidebar">
                <div id="hamburger-sidebar-body"></div>
            </div>
            <div id="hamburger-overlay"></div>
        </div>
    </header><!-- /header -->