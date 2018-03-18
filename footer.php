<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


<div class="footer">

    <div class="about-us">

        <h4>درباره ما :</h4>
        <p> مجموعه ّFrancais Fastoche با هدف آموزش زبان فرانسه و ترجمه تخصصی متون علمی و دانشگاهی و فراهم آوردن محیطی مناسب گفتگو و یادگیری زبان فرانسه برای دوستداران زبان فعالیت می کند</p>

    </div>

    <div class="social-networks">

        <div class="telegram-icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/telegram.png" alt=""></div>
        <div class="instagram-icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.png" alt=""></div>
        <div class="facebook-icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.png" alt=""></div>
        <div class="linkedin-icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin.png" alt=""></div>
        <div class="twitter"><img src="<?php bloginfo('template_url'); ?>/assets/images/twitter.png" alt=""></div>

    </div>

    <div class="footer-logo">

        <p>مجموعه ّFrancais Fastoche با هدف آموزش زبان فرانسه و ترجمه تخصصی متون علمی و دانشگاهی و فراهم آوردن محیطی مناسب گفتگو و یادگیری زبان فرانسه برای دوستداران زبان فعالیت می کند</p>


    </div>



<!--    <div id="footer-sections">-->
<!---->
<!--        <div class="footer-section text-align-center">-->
<!--            <h3>اطلاعات تماس</h3>-->
<!--            <span><span class="glyphicon glyphicon-envelope"></span> E-mail : saeed.jalinoosi@gmail.com</span>-->
<!--            <span><span class="glyphicon glyphicon-phone"></span> Phone :+98935-8511914</span>-->
<!--            <span><span class="glyphicon glyphicon-apple"></span> Telegram : @FRANCAISFASTOCHE</span>-->
<!--        </div>-->
<!---->
<!--        <div class="footer-section">-->
<!--            <h3>درباره ما</h3>-->
<!--            <p class="text-align-center"> مجموعه ّFrancais Fastoche با هدف آموزش زبان فرانسه و ترجمه تخصصی متون علمی و دانشگاهی و فراهم آوردن محیطی مناسب گفتگو و یادگیری زبان فرانسه برای دوستداران زبان فعالیت می کند</p>-->
<!--        </div>-->
<!---->
<!--        <div class="footer-section">-->
<!--            <h3>چرا Francais Fastoche؟</h3>-->
<!--            <p class="text-align-center">میتوانید در کانال تلگرام، گروه گفتگو به زبان فرانسه و صفحه ی اینستاگرام ما عضو شده و از مطالب آموزشی استفاده کنید. </p>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="footer-copyright">-->
<!--        <div class="col-lg-12"  id="copyright">-->
<!--            <p>حق  کپی رایت --><?php //echo date('Y'); ?><!-- &copy; برای توسعه دهنده محفوظ است. </p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->



</div>

<div class="footer-copyright">
    <div class="col-lg-12"  id="copyright">
        <p>حق  کپی رایت <?php echo date('Y'); ?> &copy; برای توسعه دهنده محفوظ است. </p>
    </div>
</div>



<!-- javascript -->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/slider.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#header-slider").cycle({
            fx : 'fade',
            next : '#top-arrow',
            prev : '#down-arrow'
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>


<!--		</div><!-- #content -->
<!---->
<!--		<footer id="colophon" class="site-footer" role="contentinfo">-->
<!--			<div class="wrap">-->
<!--				--><?php
//				get_template_part( 'template-parts/footer/footer', 'widgets' );
//
//				if ( has_nav_menu( 'social' ) ) : ?>
<!--					<nav class="social-navigation" role="navigation" aria-label="--><?php //esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?><!--">-->
<!--						--><?php
//							wp_nav_menu( array(
//								'theme_location' => 'social',
//								'menu_class'     => 'social-links-menu',
//								'depth'          => 1,
//								'link_before'    => '<span class="screen-reader-text">',
//								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
//							) );
//						?>
<!--					</nav><!-- .social-navigation -->
<!--				--><?php //endif;
//
//				get_template_part( 'template-parts/footer/site', 'info' );
//				?>
<!--			</div><!-- .wrap -->
<!--		</footer><!-- #colophon -->
<!--	</div><!-- .site-content-contain -->
<!--</div><!-- #page -->
<?php //wp_footer(); ?>
<!---->
<!--</body>-->
<!--</html>-->
