<?php
/**
 *
	Template Name: About


 * 
 *
 * @package fincollect
 */

get_header();
?>

<div class="header-slider white about-slide">
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="title">О компании</div>
                        <p>
                            Эффективное и профессиональное взыскание просроченной <br />
                            задолженности за счет индивидуального подхода к каждому Клиенту. <br />
                            <em class="gray">Миссия компании</em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="push40"></div>
            <div class="container">
                <p><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							endwhile; else: ?>
							<p>Sorry, no posts matched your criteria.</p>
							<?php endif; ?>
</p>
                	

                <div class="push15"></div>
                <div class="title-h2"><span class="red">наши</span> достижения</div>
                <div class="push10"></div>
                <div class="icons-list achievements">
                    <div class="element relative">
                        <img src="<?php echo get_template_directory_uri() . '/images/icon1.png' ?>" />
                        <p>Успешная и стабильная работа с портфелем займов до зарплаты МФК Быстроденьги</p>
                    </div>
                    <div class="element relative">
                        <img src="<?php echo get_template_directory_uri() . '/images/icon2.png' ?>" />
                        <p>Эффективное взыскание по портфелю онлайн займов до зарплаты МФО Турбозайм</p>
                    </div>
                    <div class="element relative">
                        <img src="<?php echo get_template_directory_uri() . '/images/icon3.png' ?>" />
                        <p>Финалисты конкурса Хрустальная Гарнитура в номинации «Лучший Collection»</p>
                    </div>
                </div>
            </div>
            <div class="push25"></div>
        </div>
        <div class="worth gray-bg">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2"><span class="red">наши</span> ценности</div>
                <div class="push10"></div>
                <div class="flex row">
                    <div class="col-sm-4">
                        <div class="element">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/images/img1.jpg' ?>" />
                            </div>
                            <div class="element-content">
                                <div class="title weight600 f18">Люди</div>
                                <div class="push5"></div>
                                <div class="text">
                                    Уважение к нашим партнерам, 
                                    их заемщикам и нашим сотрудникам — залог благоприятного и долгосрочного сотрудничества.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="element">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/images/img2.jpg' ?>" />
                            </div>
                            <div class="element-content">
                                <div class="title weight600 f18">Закон</div>
                                <div class="push5"></div>
                                <div class="text">
                                    Соблюдение законодательства — залог стабильной и честной работы на рынке.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="element">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/images/img3.jpg' ?>" />
                            </div>
                            <div class="element-content">
                                <div class="title weight600 f18">Результат</div>
                                <div class="push5"></div>
                                <div class="text">
                                    Гарантия результата — черта настоящего профессионала.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push20"></div>
        </div>
        <div class="docs">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2">Документы</div>
                <div class="push15"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="element relative">
                            <a href="#" class="absolute"></a>
                            <div class="icon">
                                <div><img src="<?php echo get_template_directory_uri() . '/images/pdf.png' ?>" /></div>
                                <small>8 kb</small>
                            </div>
                            <div class="text">
                                <a href="#">
                                    Свидетельство ИНН компании
                                    ООО «Финколлект»
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <a href="#" class="absolute"></a>
                            <div class="icon">
                                <div><img src="<?php echo get_template_directory_uri() . '/images/pdf.png' ?>" /></div>
                                <small>18 kb</small>
                            </div>
                            <div class="text">
                                <a href="#">
                                    Свидетельство ИНН компании
                                    ООО «Финколлект»
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <a href="#" class="absolute"></a>
                            <div class="icon">
                                <div><img src="<?php echo get_template_directory_uri() . '/images/pdf.png' ?>" /></div>
                                <small>128 kb</small>
                            </div>
                            <div class="text">
                                <a href="#">
                                    Свидетельство ИНН компании
                                    ООО «Финколлект»
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push30"></div>
        </div>
        
        <div class="association gray-bg">
            <div class="push45"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Участие</span> в ассоциациях</div>
                <div class="push10"></div>
                <div class="partners-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/images/napka.jpg' ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="element-content">
                                    <div class="push30 hidden-md"></div>
                                    <div class="title f24">Национальная ассоциация профессиональных коллекторских агентств (НАПКА)</div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с 
                                        разветвленной сетью офисов финансовой помощи по всей стране. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/images/partner1.jpg' ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="element-content">
                                    <div class="push30 hidden-md"></div>
                                    <div class="title f24">Быстроденьги</div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с разветвленной сетью 
                                        офисов финансовой помощи по всей стране. Это первая организация в России, предложившая населению 
                                        услугу «займы до зарплаты» — небольшие суммы денег в долг на короткий срок. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/images/partner1.jpg' ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="element-content">
                                    <div class="push30 hidden-md"></div>
                                    <div class="title f24">Быстроденьги</div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с разветвленной сетью 
                                        офисов финансовой помощи по всей стране. Это первая организация в России, предложившая населению 
                                        услугу «займы до зарплаты» — небольшие суммы денег в долг на короткий срок. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="push100"></div>
                <div class="push10"></div>
            </div>
        </div>



<?php
get_footer();


