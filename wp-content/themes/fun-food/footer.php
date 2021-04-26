<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fun-food
 */

?>
<div id="footer" class="footer-main">
    <div class="footer-news pad-top-100 pad-bottom-70 parallax">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('newsletter'); ?>

                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer-news -->
    <div class="footer-box pad-top-70">
        <div class="container">
            <div class="row">
                <div class="footer-in-main">
                    <div class="footer-logo">
                        <div class="text-center">
                            <img src="<?php echo get_theme_mod('footer_logo'); ?>" alt="" />
                        </div>
                    </div>

                    <?php dynamic_sidebar('footer_widgets'); ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-box-a">
					<ul class="socials-box footer-socials pull-left">
                        <li>
                            <a href="<?php echo get_theme_mod('facebook'); ?>">
                                <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod('twitter'); ?>">
                                <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod('google-plus'); ?>">
                                <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod('pinterest'); ?>">
                                <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod('linkedin'); ?>">
                                <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                            </a>
                        </li>
                    </ul>
					</div>
                   


                    <!-- end col -->
                </div>
                <!-- end footer-in-main -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div id="copyright" class="copyright-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6 class="copy-title"> Copyright &copy; <?php echo date('Y') ?> <?php echo get_bloginfo(); ?> is powered by <a href="https://techeasify.com/"
                                target="_blank"> techeasify</h6></a>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end copyright-main -->
    </div>
    <!-- end footer-box -->
</div>
<!-- end footer-main -->

<a href="#" class="scrollup" style="display: none;">Scroll</a>

<section id="color-panel" class="close-color-panel">
    <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
    <!-- Colors -->
    <div class="segment">
        <h4 class="gray2 normal no-padding">Color Scheme</h4>
        <a title="orange" class="switcher orange-bg"></a>
        <a title="strong-blue" class="switcher strong-blue-bg"></a>
        <a title="moderate-green" class="switcher moderate-green-bg"></a>
        <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
    </div>
</section>

<!-- ALL JS FILES -->
<script src="<?php  echo get_template_directory_uri(); ?>/js/all.js"></script>
<script src="<?php  echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="<?php  echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php  echo get_template_directory_uri(); ?>/js/isotope.min.js"></script>
<script>
$('.nav-item').addClass('active');
</script>
<?php wp_footer(); ?>
</div>
</body>

</html>