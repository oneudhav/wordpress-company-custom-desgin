<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>Custom Theme</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-icons.css" rel="stylesheet">

        <link href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" rel="stylesheet">

        <link href="<?php echo get_template_directory_uri(); ?>/css/tooplate-waso-strategy.css" rel="stylesheet">
       
       

    </head>
   
     <body id="section_1">

        <header class="site-header">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-5 col-7">
                        <p class="text-white mb-0">
                            <i class="bi-clock site-header-icon me-2"></i>
                            Mon-Fri 10:00-19:00
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-3 col-5">
                        <p class="text-white mb-0">
                            <a href="tel: 240-480-9600" class="text-white">
                                <i class="bi-telephone site-header-icon me-2"></i>
                                240-480-9600
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12 ms-auto">
                        <ul class="social-icon">
                            <li><a href="https://facebook.com/tooplate" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="https://pinterest.com/tooplate" class="social-icon-link bi-pinterest"></a></li>

                            <li><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">

                <a href="#" class="navbar-brand">Custom <span class="text-danger">Theme</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
              
                    <ul class="navbar-nav ms-auto">
                           
                      
                           <div>  <a  <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav-item')) ?> </a></div>
                        
                  
            
                    </ul>
                <div>
                        
            </div>
        </nav>