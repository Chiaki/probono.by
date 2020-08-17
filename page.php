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
        <div id="home" class="fullscreen-hero bg-parallax" data-jarallax='{"speed": 0.4}' style='background-image: url("<?php echo get_template_directory_uri();?>/images/bg1.jpg");'>
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
            <div class="pt70 pb70">
                <div class="container">
                    <div class="row pt50 pb50">
                        <div class="col-lg-12">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="row pt50 pb50">
                        <div class="col-lg-12">
                            
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
                        </div>
                    </div>
                </div>
			</div>
			
			<?php
				get_template_part( 'template-parts/footer-buttons' );
			?>
        </main><!--main content-->
        
<?php
get_footer();