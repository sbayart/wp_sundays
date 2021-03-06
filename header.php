<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sundays</title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/bootstrap/dist/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/bootstrap/dist/css/bootstrap-theme.min.css';?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/font-awesome/css/font-awesome.min.css'; ?>">

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
                        <?php
                        wp_nav_menu() ?>
                    </div>
                </div>
            </nav>



            <h1>Sundays</h1>
            <h2>We craft ocean friendly apparel</h2>
            <p><a href="#">Browse our products</a></p>
            <p><i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </header>
