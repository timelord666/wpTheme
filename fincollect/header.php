<?php
/**
 * The header for our theme
 *

 *
 * @package fincollect
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <?php wp_head(); ?>
	

    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="apple-touch-favicon.png"/>
    -->


	
</head>
<body>
    <div class="main-wrapper">
        <div class="header-wrapper">
            <div class="container">
                <div class="header relative">
                    <div class="logo">
                    <?php the_custom_logo(); ?>
                    </div>
                    <a href="#callback" class="button invert min callback-btn fancyboxModal hidden-xs hidden-sm">Обратный звонок</a>
                    <div class="header-tel hidden-xs hidden-sm">
                        <div>8 (800) 700-77-46</div>
                        <small>Звонок по РФ бесплатный </small>
                    </div>
                    <div class="mob-menu-btn visible-xs visible-sm">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="dropdown text-center">
                        <div class="dropdown-head">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dropdown-tel">
                                        <div>8 (800) 700-77-46</div>
                                        <small>Звонок по РФ бесплатный </small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dropdown-callback">
                                        <a href="#callback" class="button invert min callback-btn fancyboxModal">Обратный звонок</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-lk">
                            <a href=" <?php home_url('/login'); ?> " class="lk-btn"><span></span> Личный кабинет</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu-wrapper hidden-xs hidden-sm">
            <div class="container">
                <div class="relative">
                    <div class="top-menu">
                        <?php wp_nav_menu( array(
    'menu'            => 'topMenu',
    'container'       => '',
    'walker'         => new My_Walker_Nav_Menu()     

) ); ?>
                        <div class="cleaner"></div>
                    </div>
                    <a href="<?php echo home_url('/login'); ?>" class="lk-btn">Личный кабинет</a>
                </div>
            </div>
        </div>
        

