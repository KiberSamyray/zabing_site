<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <title>ЗабИнгредиент | Всё для хлебобулочного и кондитерского производства в Чите и Забайкальском крае</title>
      <meta name="description" content="ЗабИнгредиент - хлебопекарное и кондитерское производство в Чите, пищевые смеси, концентраты, необходимые для производства кондитерских и хлебобулочных изделий и полуфабрикатов, различные начинки – от конфитюра до мёда, производственный инвентарь">
      <meta name="geo.placename" content="город Чита, Россия">
      <meta name="geo.region" content="RU-Чита">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="images/fav_touch_icons/favicon.ico">
      <link rel="apple-touch-icon" href="/wp-content/themes/zab-ingridients/assets/images/fav_touch_icons/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/zab-ingridients/assets/images/fav_touch_icons/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/zab-ingridients/assets/images/fav_touch_icons/apple-touch-icon-114x114.png">
      <link href="/wp-content/themes/zab-ingridients/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="/wp-content/themes/zab-ingridients/assets/css/food-flaticon.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/js/datepiker/css/datepicker.css">
      <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/wp-content/themes/zab-ingridients/assets/css/bootstrap-progressbar.css">
      <link type="text/css" rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/js/xpro/slider.css?=8">
      <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/css/owl.carousel.css">
      <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/css/animate.css">
      <link href="/wp-content/themes/zab-ingridients/assets/css/style.css?=12" rel="stylesheet">
      <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/css/remodal.css">
      <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/css/remodal-default-theme.css?=8">
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/common/jquery-1.9.1.min.js"></script>
      <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/css-1.css" type="text/css">
      <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/js/xpro/slider_base.css" type="text/css">
      <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/js/xpro/slider.css" type="text/css">
      <?php wp_deregister_script('jquery'); ?>
      <?php wp_head(); ?>
      <meta name="yandex-verification" content="bf69f85f861eaca3">
   </head>
   <body class="home-page onepage" id="page-top">
      <div id="wrapper">
         <div class="overlay" data-image-src="<?php bloginfo('template_url'); ?>/assets/images/content/mob-menu-background.jpg"></div>
         <header id="header">
            <div id="top-bar">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <ul id="top-info">
                           <li><?php the_field('company_name'); ?></li>
                        </ul>
                        <ul class="socials-box pull-right">
                           <a href="#contact">
                              <li><i class="fa fa-map-marker"></i> <?php the_field('street_gps'); ?></li>
                           </a>
                           <li><i class="fa fa-phone"></i><?php the_field('phone_header'); ?></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sticky-wrapper" style>
            <div id="nav-section">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                       
                        <button class="nav-mobile-btn is-closed animated fadeInLeft" data-toggle="offcanvas">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                        </button>
                        <nav id="nav-mobile" class="navbar">
                           <ul class="nav navbar-nav">
                              <li><a href="#page-top">Главная</a></li>
                              <li><a href="#about">О компании</a></li>
                              <li><a href="#special-menu">Ингредиенты</a></li>
                              <li class="border-none"><?php the_custom_logo(); ?></li>
                              <li><a href="#hleb">Учебный центр</a></li>
                              <li><a href="#thef-team">Оборудование</a></li>
                              <li><a href="#contact">Контакты</a></li>
							  

                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
</div>
         </header>