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

get_header(); ?>

    <div id="home" class="fullscreen-hero bg-parallax" data-jarallax='{"speed": 0.4}' style='background-image: url("<?php echo get_template_directory_uri();?>/images/legal.jpg");'>
        <div class="hero-content">
            <div class="hero-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mr-auto ml-auto">
                            <h1 class="text-white hero-header" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto;"><?php the_title(); ?></h1>
                            <div class="lead hero-intro">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--hero-->

    <main class="main-content">
        <div class="pt70 pb70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="/advokaty">&lt; Назад на страницу "Адвокаты с народом"</a>
                    </div>
                </div>
                <div class="row pt50 pb50">
                    <div class="col-lg-12">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="/advokaty">&lt; Назад на страницу "Адвокаты с народом"</a>
                    </div>
                </div>
            </div>
        </div>
    </main><!--main content-->
        
<?php get_footer();