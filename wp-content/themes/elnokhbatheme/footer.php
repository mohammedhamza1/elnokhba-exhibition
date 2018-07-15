<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saudi_woman
 */

?>
   <?php  
$facebook = get_field('facebook');
$twitter = get_field('twitter');
$instadram = get_field('insta');
$linkedin = get_field('linkedin');
$pintrest = get_field('pint');
?>
   
    <footer>
        <div class="container wow bounceInUp">
            <ul>
                <li><a href="<?php the_field('linkedein_link') ?>"><img src="<?php echo $linkedin['url']; ?>"></a></li>
                <li><a href="<?php the_field('pinterest_link') ?>"><img src="<?php echo $pintrest['url']; ?>"></a></li>
                <li><a href="<?php the_field('insta_link') ?>"><img src="<?php echo $instadram['url']; ?>"></a></li>
                <li><a href="<?php the_field('twitter_link') ?>"><img src="<?php echo $twitter['url']; ?>"></a></li>
                <li><a href="<?php the_field('face_link') ?>"><img src="<?php echo $facebook['url']; ?>"></a></li>
            </ul>
            <p>
               <?php the_field('copyrights'); ?>
            </p>

        </div>
    </footer>
    <?php wp_footer(); ?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/59e5ec204854b82732ff60ec/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    </body>

    </html>
