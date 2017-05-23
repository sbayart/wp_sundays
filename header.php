<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sundays</title>
    <?php wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . 'bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-theme', get_stylesheet_directory_uri() . 'bootstrap/dist/css/bootstrap-theme.min.css' );
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . 'font-awesome/css/font-awesome.min.css' );
    ?>

    <!-- <link rel="stylesheet" href="static/external/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="static/external/font-awesome/css/font-awesome.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <p class="navbar-text navbar-right"><a href="#" class="navbar-link"><i class="fa fa-search" aria-hidden="true"></i></a></p>
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#">Catalog</a></li>
                            <li><a href="produit.html">About Us</a></li>
                            <li><a href="panier.html">Stores</a></li>
                            <li><a href="contact.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1>Sundays</h1>
            <h2>We craft ocean friendly apparel</h2>
            <p><a href="#">Browse our products</a></p>
            <p><i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </header>
