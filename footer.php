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

        <div class="telegram-icon"><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/telegram.png" alt=""></a></div>
        <div class="instagram-icon"><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.png" alt=""></a></div>
        <div class="facebook-icon"><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.png" alt=""></a></div>
        <div class="linkedin-icon"><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin.png" alt=""></a></div>
        <div class="twitter"><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/twitter.png" alt=""></a></div>

    </div>

    <div class="footer-logo">
        <p>مجموعه ّFrancais Fastoche با هدف آموزش زبان فرانسه و ترجمه تخصصی متون علمی و دانشگاهی و فراهم آوردن محیطی مناسب گفتگو و یادگیری زبان فرانسه برای دوستداران زبان فعالیت می کند</p>
    </div>

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


