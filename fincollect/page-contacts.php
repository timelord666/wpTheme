<?php
/**
 *
	Template Name: Contacts


 * 
 *
 * @package fincollect
 */

get_header();
?>

 <div class="requisites">
            <div class="push50"></div>
                <div class="container">
                    <h1>Контакты</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="element">
                                <p>
                                    <strong>Адрес</strong><br />
                                    <?php the_field('adrs'); ?>
                                </p>
                                <p>
                                    <strong>Телефон </strong><br />
                                    <?php the_field('phone'); ?>
                                </p>
                                <p>
                                    <strong>E-mail </strong><br />
                                    <?php the_field('e-mail'); ?>
                                </p>
                                <p>
                                    <strong>Контакты для СМИ </strong><br />
                                    <?php the_field('smi'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="element">
                                <p>
                                    <strong>Наши реквизиты </strong><br />
                                    <?php the_field('requisites'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="push50"></div>
        </div>
        <div class="map-wrapper">
            <?php echo do_shortcode('[MapOnePoint id="m1" type="hybrid" lon="55.75197479670444" lat="37.617726067459024" zoom="5" h="200" img="http://site.ru/1.png" thover="Text when pointing to a point" tclick="Text when clicking on a poin. Some text"]'); ?>
        </div>
     
        
        <div class="feedback gray-bg" style="border-bottom: none;">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Форма</span> обратной связи</div>
                <p>Все ваши жалобы и предложения Вы можете направить нам, и мы обязательно примем их в работу.</p>
                <div class="push5"></div>
                <form class="rf">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control required" placeholder="ФИО" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control required tel" placeholder="Телефон" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control required" placeholder="E-mail" />
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="form-group">
                                <select class="styler required" data-placeholder="Тема" >
                                    <option value=""></option>
                                    <option value="t1">Техническая поддержка</option>
                                    <option value="t2">Слова благодарности</option>
                                    <option value="t3">Другое</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control required" placeholder="Текст сообщения"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" class="button btn block" value="Отправить" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="push20"></div>
        </div>
        <div class="footer-push"></div>
    </div>



<?php
get_footer();
