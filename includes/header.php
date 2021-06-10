<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="theme-color" content="#282828"/>
		<?php if (!empty($titre)){echo '<title>'.$titre.' - Roots</title>';}else{echo '<title> Roots</title>';	}?><?php if (empty($description)){$description = 'Roots descriptions';}?>
		<meta name="author" content="Roots">
		<meta name="description" content="Roots: <?php echo $description;?>" />
		<meta name="keywords" content="Roots, realestate, flat, apartment, benefits, facility, consultation, home, house, studio, pool, animation, transportation">

		<!-- SOCIAL MEDIA META -->
		<meta property="og:description" content="<?php echo $description;?>">
		<meta property="og:image" content="<?php echo ROOTPATH;?>assets/img/og.png">
		<meta property="og:site_name" content="homepark">
		<meta property="og:title" content="homepark">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo LIEN_DE_LA_PAGE;?>">

		<!-- TWITTER META -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@roots">
		<meta name="twitter:creator" content="@roots">
		<meta name="twitter:title" content="roots">
		<meta name="twitter:description" content="<?php echo $description;?>">
		<meta name="twitter:image" content="<?php echo ROOTPATH;?>assets/img/og.png">

		<!-- FAVICON FILES -->
		<link href="<?php echo ROOTPATH;?>assets/img/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
		<link href="<?php echo ROOTPATH;?>iassets/imgco/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
		<link href="<?php echo ROOTPATH;?>assets/img/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
		<link href="<?php echo ROOTPATH;?>assets/img/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
		<link href="<?php echo ROOTPATH;?>assets/img/favicon.png" rel="shortcut icon">

		<!-- CSS FILES -->
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/plugins/fontawesome.min.css">
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/plugins/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/plugins/line-awesome.min.css">
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/plugins/icofont.min.css">
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/plugins/simple-line-icons.css">

		<!-- Plugins CSS -->
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/plugins/animate.css">
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/plugins/swiper-bundle.min.css">
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/plugins/odometer.min.css">

		<!-- Main Style CSS -->
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo ROOTPATH;?>assets/css/styles2.css">
	</head>
	<body>
	<div class="main-wrapper">
		<div class="header fixed-top">
            <div class="container custom-container">
                <div class="header-wrapper">

                    <!-- header Logo Start -->
                    <div class="logo-box">
                        <div class="logo"><a href="<?php echo ROOTPATH;?>"><img src="<?php echo ROOTPATH;?>images/logo-light.png" alt="" title=""></a></div>
                    </div>
                    <!-- header Logo end -->

                    <!-- header Menu Toggler Start -->
                    <div class="header-menu-toggler">
                        <a href="javascript:;" class="menu-toggler"><i class="las la-bars"></i></a>
                    </div>
                    <!-- header Menu Toggler end -->

                </div>
            </div>
        </div>
        
        <div class="offcanvas-menu">
            <div class="offcanvas-wrapper">
                <div class="close-btn">
                    <a href="javascript:;" class="menu-close"><i class="ion-ios-close-outline"></i></a>
                </div>
                <div class="logo">
                    <a href="<?php echo ROOTPATH;?>"><img src="assets/images/logo-2.png" alt="Logo"></a>
                </div>
                <div class="primary-menu">
                    <ul id="menu_items" class="menu_items">
                        <li><a href="<?php echo ROOTPATH;?>">Accueil</a></li>
                        <li>
                            <a href="<?php echo ROOTPATH;?>#services">Services</a>
                        </li>
                        <li><a href="<?php echo ROOTPATH;?>#hobbies">Hobbies</a></li>
                        <li>
                            <a href="<?php echo ROOTPATH;?>#profiles">Profiles</a>
                        </li>
						<li><a href="<?php echo ROOTPATH;?>#reference">Références</a></li>
                        <li><a href="<?php echo ROOTPATH;?>#contact"">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
             

