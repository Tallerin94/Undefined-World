<?php
    include("cnf/variables.php");
    include("cnf/main_strings.php");
    $region = "eues";
?>
<!DOCTYPE HTML>
<html lang="<?=$lang[$region]["meta_lang"];?>">
    <head>
        <meta charset="utf-8"/>
        <title><?=$lang[$region]["meta_title"];?></title>

        <!-- Favicons -->
        <!--
		<link rel="apple-touch-icon" sizes="57x57" href="<?=$url_cdn;?>img/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?=$url_cdn;?>img/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=$url_cdn;?>img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?=$url_cdn;?>img/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=$url_cdn;?>img/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?=$url_cdn;?>img/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?=$url_cdn;?>img/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?=$url_cdn;?>img/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?=$url_cdn;?>img/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?=$url_cdn;?>img/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?=$url_cdn;?>img/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?=$url_cdn;?>img/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?=$url_cdn;?>img/favicon-16x16.png" sizes="16x16">
		<link rel="shortcut icon" href="<?=$url_cdn;?>img/favicon.ico" type="image/x-icon">
        -->

        <!-- META -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#0B0C3B"/>
        <meta name="description" content="<?=$lang[$region]["meta_description"];?>"/>
        <meta name="keywords" content="<?=$lang[$region]["meta_keywords"];?>"/>
        <meta name="author" content="<?=$lang[$region]["meta_author"];?>"/>
        <meta name="lang" content="<?=$lang[$region]["meta_lang"];?>"/>
        <meta name="DC.Title" content="<?=$lang[$region]["meta_title"];?>"/>
        <!-- DO NOT FORGET YOUR SITEMAP WITH GOOGLE -->

        <!-- ROBOTS -->
        <meta name="robots" content="index, follow"/>
        <meta NAME="googlebot" content="index, follow"/>
        
        <!-- OG -->
        <meta property="og:title" content="<?=$lang[$region]["meta_title"];?>" />
		<meta property="og:description" content="<?=$lang[$region]["meta_description"];?>"/>
		<meta property="og:url" content="<?=$url_main;?>">
		<meta property="og:image" content="<?=$url_cdn;?>img/seo_logo.png"/>
        <meta property="og:site_name" content="<?=$lang[$region]["meta_site_name"];?>"/>

        <!-- Verificate -->
		<!-- DO NOT FORGET YOUR KEY -->
		<meta name="google-site-verification" content=""/>
        
        <!-- JS -->
        <script type="text/javascript" src="<?=$url_cdn;?>js/lib/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?=$url_cdn;?>js/lib/bootstrap-3.3.7.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?=$url_cdn;?>css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?=$url_cdn;?>css/main.css"/>
    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../navbar/">Default</a></li>
                    <li><a href="../navbar-static-top/">Static top</a></li>
                    <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
                </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </body>
</html>