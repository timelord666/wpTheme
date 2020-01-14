<?php
/**
 * The template for displaying 404 pages (not found)
 *

 *
 * @package fincollect
 */

get_header();
?>

        <div class="block404 text-center-xs text-left-sm">
            <div class="push100"></div>
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="<?php echo get_template_directory_uri() . '/images/img404.png '?>" alt="not found" />
                    <div class="push20"></div>
                </div>
                <div class="col-sm-6">
                    <div class="push5"></div>
                    <div class="title-h3">Такой страницы не найдено</div>
                    <p>
                        Страница, которую вы искали по какой-то причине
                        больше не находится по запрашиваему адресу.
                    </p>
                    <p>
                        <a href="<?php echo home_url(); ?>" class="decoration">Перейти на главную</a>
                    </p>
                </div>
            </div>
            <div class="push100"></div>
        </div>
         <div class="footer-push"></div>

     </div>

<?php


get_footer();
?>