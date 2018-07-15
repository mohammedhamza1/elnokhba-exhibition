<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package elnokhba_Theme
 */

 wp_head(); 
?>



<div class="header text-center">
    <h1>هذه الصفحة غير موجودة</h1>
    <h3 style="margin-bottom: 100px; margin-top: 50px;">
    <a href="http://elnokhba.ter.sa">الرجوع الى الصفحة الرئيسية؟</a> 
    </h3>
    
    <img class="img-responsive center-block" src="<?php echo get_template_directory_uri().'/pic/404%20error.png'?>" alt="">
    
</div>


<?php wp_footer();?>