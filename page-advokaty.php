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
        <div id="home" class="fullscreen-hero bg-parallax" data-jarallax='{"speed": 0.4}' style='background-image: url("<?php echo get_template_directory_uri();?>/images/bg3.jpg");'>
            <div class="hero-content">
                <div class="hero-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center mr-auto ml-auto">
                                <h1 class="text-white hero-header" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto;"><?php the_field('main_header', 'option'); ?></h1>
                                <div class="lead hero-intro hero-intro-long">
                                    <?php the_field('intro', 'option'); ?>
                                    <p>
                                        <?php the_field('intro2', 'option'); ?>
                                    </p>
                                </div>
                                <h2 class="text-white hero-header"><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></h2>
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

        <main class="main-content pb70">
        
        <div class="bg-primary pt40 pb40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class=" mt5  h2  text-white text-center mt10 mb10"><?php the_field('teaser_text', 'option'); ?></h2>
                    </div>
                    <div class="col-lg-4 text-center">
                        <a href="tel:<?php the_field('phone', 'option'); ?>" class="btn btn-lg btn-white btn-rounded mt10 mb10"><?php the_field('teaser_button_text', 'option'); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-faded pt90 pb50">
            <div class="container">
                <div class="section-title title-on-faded mb40">
                    <h3 class="text-center">
                        О нас
                    </h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb40">
                        <div class="practice-card">
                            <div class="content-box">
                                <i class="fa fa-handshake-o fa-2x mt20 mb20"></i>
                                <h5><?php the_field('about_1_header', 'option'); ?></h5>
                                <p>
                                    <?php the_field('about_1_text', 'option'); ?>
                                </p>
                            </div>
                        </div>
                    </div><!--col-->
                    <div class="col-lg-4 mb40">
                        <div class="practice-card">
                            <div class="content-box">
                                <i class="fa fa-phone fa-2x mt20 mb20"></i>
                                <h5><?php the_field('about_2_header', 'option'); ?></h5>
                                <p>
                                    <?php the_field('about_2_text', 'option'); ?>
                                </p>
                            </div>
                        </div>
                    </div><!--col-->
                    <div class="col-lg-4 mb40">
                        <div class="practice-card">
                            <div class="content-box">
                                <i class="fa fa-legal fa-2x mt20 mb20"></i>
                                <h5><?php the_field('about_3_header', 'option'); ?></h5>
                                <p>
                                    <?php the_field('about_3_text', 'option'); ?>
                                </p>
                            </div>
                        </div>
                    </div><!--col-->
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 mb40 mt40 text-center">
                        <?php the_field('text_after_about', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="bg-parallax pt40 pb20" data-jarallax='{"speed": 0.4}' style='background-image: url("<?php echo get_template_directory_uri();?>/images/bg3.jpg")'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 text-center  mb40">
                        <h2 class="text-white h1 counter">2</h2>
                        <h4 class="text-white">адвоката</h6>
                    </div><!--col-->
                </div>
            </div>
        </div><!--facts-->
        

        <div class="container pt90 pb50" id="about">
            <div class="section-title mb40">
                <h3 class="text-center">
                    Памятки
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 mb40 text-center">
                    Мы собрали ряд памяток с информацией о том, какие шаги предпринять, если вы оказались в сложной ситуации
                </div>
            </div>
            <div class="row">
                <?php
                    $page_ID = get_the_ID();
                    $posts = get_posts( array(
                        'numberposts'     => -1, // тоже самое что posts_per_page
                        'orderby'         => 'post_date',
                        'order'           => 'DESC',
                        'post_type'       => 'memo',
                        'post_status'     => 'publish'
                    ) );
                    foreach($posts as $p){
                        global $post;
                        $post = $p;
                        setup_postdata($post);
                        if (get_field("page") !== $page_ID) continue;
                        ?>
                        <div class="col-lg-4 mb40">
                            <div class="practice-card">
                                <div class="content-box">
                                    <h5><?php the_title(); ?></h5>
                                    <p>
                                    <?php the_excerpt(); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-link">Подробнее</a>
                                </div>
                            </div>
                        </div><!--col-->
                        <?php
                    }
                    wp_reset_postdata();
                ?>
                
            </div>
        </div><!--container-->

        <?php /*
        <div class="bg-dark pt90 pb50">
            <div class="container">
                <div class="section-title title-on-dark mb40">
                    <h3 class="text-center">
                        Наши адвокаты
                    </h3>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 mb40 text-center">
                        <?php the_field('advocates_text', 'option'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb40">
                        <div class="col owl-carousel owl-attorney owl-theme">
                        <?php
                        $advocates = get_posts(array(
                            'post_type'			=> 'advocate',		// тип поста
                            'posts_per_page'	=> -1,
                            'meta_key'			=> 'sort',	// 'name' - это название custom-поля
                            'orderby'			=> 'meta_value_num',  // важно: если использовать 'meta_value_num', то сортироваться будет, как число, а не как строка
                            'order'			=> 'DESC'
                        ));
                        if( $advocates ){
                            foreach( $advocates as $post ){
                                setup_postdata( $post );
                                $photo = get_field('photo');
                                ?>
                                    <div class="item">
                                        <div class="attorny-card text-center">
                                            <img src="<?php echo $photo["sizes"]["medium_large"]; ?>" alt="" class="img-fluid">
                                            <div class="content-box">
                                                <h5><?php the_title(); ?></h5>
                                                <span><?php the_field('city'); ?></span>
                                                <?php the_field('phone'); ?><br>
                                                <?php the_field('email'); ?>
                                            </div>
                                            <ul class="attorny-footer list-unstyled mt20">
                                                <li class="clearfix">
                                                    <span>
                                                        <a href="tel:<?php the_field('phone'); ?>" class="social-icon si-dark si-phone si-dark-round">
                                                            <i class="fa fa-phone"></i>
                                                            <i class="fa fa-phone"></i>
                                                        </a>
                                                        <a href="mailto:<?php the_field('email'); ?>" class="social-icon si-dark si-email si-dark-round">
                                                            <i class="fa fa-envelope"></i>
                                                            <i class="fa fa-envelope"></i>
                                                        </a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!--item-->
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                        ?>
                        </div><!--col-->

                    </div><!--col-->
                </div>
            </div>
        </div>
        */ ?>

        <?php
            get_template_part( 'template-parts/footer-buttons' );
        ?>
    </main><!--main content-->
        
<?php
get_footer();