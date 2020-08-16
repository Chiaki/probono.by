<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package probono
 */

get_header();
?>
        <div id="home" class="fullscreen-hero bg-parallax" data-jarallax='{"speed": 0.4}' style='background-image: url("<?php echo get_template_directory_uri();?>/images/main-homepage.jpg");'>
            <div class="hero-content">
                <div class="hero-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mr-auto ml-auto">
                                <h2 class="text-white display-3 hero-header" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto;"><?php the_field('main_header', 'homepage-options'); ?></h2>
                                <p class="text-white-gray lead hero-intro">
                                    <?php the_field('intro', 'homepage-options'); ?>
                                </p>
                                <a href="tel:<?php the_field('phone', 'homepage-options'); ?>" class="btn btn-yellow btn-rounded mt10 mb10">Позвонить</a>
                                <?php /*
                                <div>
                                    <a href="tel:" class="btn btn-lg btn-white mr-3">Позвонить на горячую линию</a>
                                </div>
                                */ ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--hero-->
        <main class="main-content">
            
        <div class="bg-primary pt20 pb20 teaser-homepage">
            <div class="teaser-homepage-string"><?php the_field('teaser_text', 'homepage-options'); ?></div>
            <div class="teaser-homepage-phone"><?php the_field('phone', 'homepage-options'); ?></div>
        </div>
        <div class="container pt90 pb50" id="about">
            <div class="section-title mb40">
                <h3 class="text-center">
                    Инициативы
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 mb40 text-center">
                    Мы собираем информацию о любых открытых инициативах, группах, центрахпомощи пострадавшим. Наша задача связать пострадавшего с людьми, которые готовы ему помочь. Наши инструменты: этот портал и волонтерский колл-центр.
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb40">
                    <div class="practice-card practice-card-mark">
                        <img src="<?php echo get_template_directory_uri();?>/images/homepage-find.jpg" alt="" class="img-fluid">
                        <div class="content-box">
                            <h5>Поиск людей</h5>
                            <p>
                            Инициативы и инфо ресурсы по поиску людей
                            </p>
                            <a href="/poisk" class="btn btn-link">Найти</a>
                        </div>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 mb40">
                    <div class="practice-card">
                        <img src="<?php echo get_template_directory_uri();?>/images/advocate.jpg" alt="" class="img-fluid">
                        <div class="content-box">
                            <h5>Адвокатская помощь</h5>
                            <p>
                            Инициатива "Адвокаты с народом"
                            </p>
                            <a href="/advokaty" class="btn btn-link">Подробнее</a>
                        </div>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 mb40">
                    <div class="practice-card">
                        <img src="<?php echo get_template_directory_uri();?>/images/jurist.jpg" alt="" class="img-fluid">
                        <div class="content-box">
                            <h5>Юридическая помощь</h5>
                            <p>
                            Образцы и формы документов по разным направлениям
                            </p>
                            <a href="/juristy" class="btn btn-link">Подробнее</a>
                        </div>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 mb40">
                    <div class="practice-card">
                        <img src="<?php echo get_template_directory_uri();?>/images/rights.jpg" alt="" class="img-fluid">
                        <div class="content-box">
                            <h5>Правозащитная помощь</h5>
                            <p>
                            Инициативы по защите прав человека на международном уровне
                            </p>
                            <a href="/pravo" class="btn btn-link">Подробнее</a>
                        </div>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 mb40">
                    <div class="practice-card">
                        <img src="<?php echo get_template_directory_uri();?>/images/medicine.jpg" alt="" class="img-fluid">
                        <div class="content-box">
                            <h5>Медицинская помощь</h5>
                            <p>
                            Инициативы медперсонала и работников фармации
                            </p>
                            <a href="/medicine" class="btn btn-link">Подробнее</a>
                        </div>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 mb40">
                    <div class="practice-card">
                        <img src="<?php echo get_template_directory_uri();?>/images/psycho.jpg" alt="" class="img-fluid">
                        <div class="content-box">
                            <h5>Психологическая помощь</h5>
                            <p>
                            Бесплатная психологическая помощь онлайн
                            </p>
                            <a href="/psychology" class="btn btn-link">Подробнее</a>
                        </div>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 mb40">
                    <div class="practice-card">
                        <img src="<?php echo get_template_directory_uri();?>/images/finance.jpg" alt="" class="img-fluid">
                        <div class="content-box">
                            <h5>Финансовая помощь</h5>
                            <p>
                            Инициативы по сбору денег и рекомендации как их получить
                            </p>
                            <a href="/finance" class="btn btn-link">Подробнее</a>
                        </div>
                    </div>
                </div><!--col-->
                <div class="col-lg-4 mb40">
                    <div class="practice-card">
                        <img src="<?php echo get_template_directory_uri();?>/images/homepage-help.jpg" alt="" class="img-fluid">
                        <div class="content-box">
                            <h5>Другие инициативы</h5>
                            <p>
                            Инициативы по другим направлениям помощи
                            </p>
                            <a href="/drugie" class="btn btn-link">Подробнее</a>
                        </div>
                    </div>
                </div><!--col-->
            </div>
            <?php
                get_template_part( 'template-parts/footer-buttons' );
            ?>
        </div><!--container-->

        <div class="container pt40 pb40">
            <div class="section-title mb40">
                <h3 class="text-center">
                    Уведомление о конфиденциальности
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="homepage-notice">
                        <?php the_field('privacy', 'homepage-options'); ?>
                    </div>
                </div>
            </div>
        </div><!--container-->
        
    </main><!--main content-->
        
<?php
get_footer();