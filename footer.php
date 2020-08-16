<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package probono
 */

?>


		<footer class="footer">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-4">
                        <?php /*
                        <span>
                            <a href="#" class="social-icon si-dark si-facebook si-dark-round">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-twitter si-dark-round">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-g-plus si-dark-round">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-skype si-dark-round">
                                <i class="fa fa-skype"></i>
                                <i class="fa fa-skype"></i>
                            </a>
                        </span>
                        */ ?>
                        <img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="">
                    </div>
                    <div class="col-lg-8 text-right">
                        <ul class="list-inline">
                            <?php /*
                            <li class="list-inline-item">
                                <a href="#">About us</a>
                            </li>
                             <li class="list-inline-item">
                                <a href="#">News</a>
                            </li>
                             <li class="list-inline-item">
                                 <a href="#">Terms & conditions</a>
                            </li>
                            */ ?>
                            <li class="list-inline-item">
                                <h5>
                                    <p><b>Контакты</b></p> <p><?php the_field('contacts', 'homepage-options'); ?></p>
                                </h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--back to top-->
        <a href="#" class="back-to-top" id="back-to-top"><i class="icon-chevron-up"></i></a>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/plugins/plugins.js"></script> 
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/law-firm.custom.js"></script>
		
		<?php wp_footer(); ?>
		
		<script>
			(function(w,d,u){
				var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
				var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
			})(window,document,'https://help.sysman.su/upload/crm/site_button/loader_1_4hgw0x.js');
		</script>
    </body>
</html>
