<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package saudi_woman
 */
?>

    <?php get_header(); ?>
    <?php if(get_field('display')=='show'){  ?>

    <div id="first_carousal" class="wow bounceInUp">
        <div class="owl-carousel owl-theme">

            <?php
            $args = array(
               'post_type' => 'our_slider',
               'orderby'    => 'post_id',
               'order'      => 'ASC'
            );
            $query = new WP_Query($args);
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                    $slide = get_field('image');
                     ?>
                <div class="item">
                    <img src="<?php echo $slide['url']; ?>" class="img-fluid">
                </div>

                <?php }}
            
                    /* Restore original Post Data */
                    wp_reset_postdata();
            ?>
        </div>
    </div>
    <?php } ?>
    <div id="sec_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <?php
            $args = array(
               'post_type' => 'video',
               'orderby'    => 'post_id',
               'order'      => 'ASC'
            );
            $query = new WP_Query($args);
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                    ?>

                        <?php the_field('video'); ?>

                        <?php    } }
            
                    /* Restore original Post Data */
                    wp_reset_postdata();
            ?>

                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="countdown">
                        <h3>الحدث سيبدأ في :</h3>

                        <?php
                                $args = array(
                                   'post_type' => 'counter',
                                   'orderby'    => 'post_id',
                                   'order'      => 'ASC'
                                );
                                $query = new WP_Query($args);
                                if($query->have_posts()){
                                    while($query->have_posts()){
                                        $query->the_post();
                                        ?>

                            <?php the_field('counter'); ?>

                            <?php    } }
            
                    /* Restore original Post Data */
                    wp_reset_postdata();
            ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="parteners" class="wow bounceInUp">
        <div class="container">
            <h1>الرعاة</h1>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#"><img src="pic/sponsers/1.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="pic/sponsers/2.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="pic/sponsers/3.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="pic/sponsers/4.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="pic/sponsers/5.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="pic/sponsers/6.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="pic/sponsers/7.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="pic/sponsers/8.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="pic/sponsers/9.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="pic/sponsers/10.png" class="img-responsive hvr-pulse-grow"></a>
                </div>
            </div>
        </div>
    </div>

    <div id="why">
        <div class="container">
            <div class="row">
                <h3>ما الذي يدعوك للمشاركه؟</h3>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="why_content">
                        <p>
                            <i class="fa fa-caret-left" aria-hidden="true"></i> التعريف بمنتجاتك وخدماتك الجديدة
                        </p>
                        <p>
                            <i class="fa fa-caret-left" aria-hidden="true"></i> تقديم عروض وأسعار تنافسية
                        </p>
                        <p>
                            <i class="fa fa-caret-left" aria-hidden="true"></i> تعزيز وجودك بتكرار وتنوع أشكال ظهورك
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="why_content">
                        <p>
                            <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                        </p>
                        <p>
                            <i class="fa fa-caret-left" aria-hidden="true"></i> نافذة جديدة لزيادة حجم مبيعاتك
                        </p>
                        <p>
                            <i class="fa fa-caret-left" aria-hidden="true"></i> توطيد علاقتك بعملائك، وكسب عملاء جدد
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="why_content">
                        <p class="text_square">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأالتطبيق.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="target">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#hall1" aria-controls="hall1" role="tab" data-toggle="tab">قاعة 1</a></li>
                <li role="presentation"><a href="#hall2" aria-controls="hall2" role="tab" data-toggle="tab">قاعة 2 </a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="hall1">
                    <div id="time_line">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">
                            </div>
                            <div class="col-sm-2 xs-hidden">
                                <div class="line center">
                                    <div class="circle"></div>
                                    <div class="line_inner"></div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-xs-12 item">
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-5 col-xs-12 item">
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                            </div>
                            <div class="col-sm-2 xs-hidden ">
                                <div class="line center">
                                    <div class="circle"></div>
                                    <div class="line_inner"></div>
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-xs-12 hidden-xs">

                            </div>
                        </div>
                    </div>
                </div>


                <div role="tabpanel" class="tab-pane" id="hall2">
                    <div id="time_line">
                        <div class="row left_text">
                            <div class="col-sm-5 col-xs-12">
                            </div>
                            <div class="col-sm-2 xs-hidden">
                                <div class="line center">
                                    <div class="circle"></div>
                                    <div class="line_inner"></div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-xs-12 item">
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                            </div>
                        </div>


                        <div class="row right_text">
                            <div class="col-sm-5 col-xs-12 item">
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                            </div>
                            <div class="col-sm-2 xs-hidden ">
                                <div class="line center">
                                    <div class="circle"></div>
                                    <div class="line_inner"></div>
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-xs-12 hidden-xs">

                            </div>
                        </div>

                        <div class="row left_text">
                            <div class="col-sm-5 col-xs-12">
                            </div>
                            <div class="col-sm-2 xs-hidden">
                                <div class="line center">
                                    <div class="line_inner"></div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-xs-12 item">
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                            </div>
                        </div>

                        <div class="row right_text">
                            <div class="col-sm-5 col-xs-12 item">
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                                <p>
                                    <i class="fa fa-caret-left " aria-hidden="true"></i> التواصل مع عملائك المستهدفين بشكل مباشر
                                </p>
                            </div>
                            <div class="col-sm-2 xs-hidden ">
                                <div class="line center">
                                    <div class="circle"></div>
                                    <div class="line_inner"></div>
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-xs-12 hidden-xs">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sponsers_carousal">
        <div class="container">
            <h2>
                بفضل دعم هذه الشركات لرعاية المعرض
                <br> ترغب في أن تصبح راعي؟
                <a href="#">احجز مساحه</a>
            </h2>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/1.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/2.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/3.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/4.png"></a>
                </div>
                <div class="item">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/5.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/6.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/7.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/8.png"></a>
                </div>
                <div class="item">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/9.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/10.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/1.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/2.png"></a>
                </div>
                <div class="item">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/3.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/4.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/5.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/6.png"></a>
                </div>
                <div class="item">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/3.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/4.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/5.png"></a>
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/sponsers/6.png"></a>
                </div>
            </div>
        </div>
    </div>

    <div id="statics">
        <div class="container">
            <img class="img-responsive" src="pic/statics.png">
        </div>
    </div>

    <div id="sponser_program">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="img_out">
                        <img src="pic/spon1.jpg">
                    </div>
                    <p>الراعي الفضي</p>
                    <div class="price">
                        <span>300 ر.س</span>
                    </div>
                </div>
                <div class="item">
                    <div class="img_out">
                        <img src="pic/spon1.jpg">
                    </div>
                    <p>الراعي الفضي</p>
                    <div class="price">
                        <span>300 ر.س</span>
                    </div>
                </div>
                <div class="item">
                    <div class="img_out">
                        <img src="pic/spon1.jpg">
                    </div>
                    <p>الراعي الفضي</p>
                    <div class="price">
                        <span>300 ر.س</span>
                    </div>
                </div>
                <div class="item">
                    <div class="img_out">
                        <img src="pic/spon1.jpg">
                    </div>
                    <p>الراعي الفضي</p>
                    <div class="price">
                        <span>300 ر.س</span>
                    </div>
                </div>
                <div class="item">
                    <div class="img_out">
                        <img src="pic/spon1.jpg">
                    </div>
                    <p>الراعي الفضي</p>
                    <div class="price">
                        <span>300 ر.س</span>
                    </div>
                </div>
                <div class="item">
                    <div class="img_out">
                        <img src="pic/spon1.jpg">
                    </div>
                    <p>الراعي الفضي</p>
                    <div class="price">
                        <span>300 ر.س</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="media">
        <div class="container">
            <h3>يغطي المعرض اعلامياً عدة جهات منها</h3>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/1.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/2.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/3.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/4.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/5.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/6.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsivev hvr-pulse-grow" src="pic/media/7.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/8.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/1.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/2.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/3.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/4.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/5.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/6.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/7.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/8.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/1.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/2.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/3.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/4.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/5.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/6.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/7.png"></a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="#"><img class="img-responsive hvr-pulse-grow" src="pic/media/8.png"></a>
                </div>
            </div>
        </div>
    </div>


    <!-- start board section -->
    <section class="board-section">
        <form action="" method="get" id="board-form">
            <div class="xs-y-scroll">
                <div class="board-content">
                    <div class="groub1">
                        <div class="form-ele">
                            <label class="d" for="d13">D 13</label>
                            <input id="d13" type="checkbox" name="board-place" value="d13">
                        </div>
                        <div class="form-ele">
                            <label class="d" for="d12">D 12</label>
                            <input id="d12" type="checkbox" name="board-place" value="d12">
                        </div>
                        <div class="form-ele">
                            <label class="c" for="c6">C 6</label>
                            <input id="c6" type="checkbox" name="board-place" value="c6">
                        </div>
                        <div class="form-ele">
                            <label class="b" for="b5">B 5</label>
                            <input id="b5" type="checkbox" name="board-place" value="b5">
                        </div>
                    </div>
                    <div class="groub2">
                        <div class="form-ele">
                            <label class="b" for="b4">B 4</label>
                            <input id="b4" type="checkbox" name="board-place" value="b4">
                        </div>
                        <div class="form-ele">
                            <label class="c" for="c9">C 9</label>
                            <input id="c9" type="checkbox" name="board-place" value="c9">
                        </div>
                        <div class="form-ele">
                            <label class="d" for="d11">D 11</label>
                            <input id="d11" type="checkbox" name="board-place" value="d11">
                        </div>
                        <div class="form-ele">
                            <label class="d" for="d10">D 10</label>
                            <input id="d10" type="checkbox" name="board-place" value="d10">
                        </div>
                    </div>
                    <div class="groub3">
                        <div class="form-ele">
                            <label class="e" for="e14">E 14</label>
                            <input id="e14" type="checkbox" name="board-place" value="e14">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e15">E 15</label>
                            <input id="e15" type="checkbox" name="board-place" value="e15">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e16">E 16</label>
                            <input id="e16" type="checkbox" name="board-place" value="e16">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e17">E 17</label>
                            <input id="e17" type="checkbox" name="board-place" value="e17">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e18">E 18</label>
                            <input id="e18" type="checkbox" name="board-place" value="e18">
                        </div>
                    </div>
                    <div class="groub4">
                        <div class="form-ele">
                            <label class="f" for="f59">F 59</label>
                            <input id="f59" type="checkbox" name="board-place" value="f59">
                        </div>
                        <div class="form-ele">
                            <label class="c" for="c7">C 7</label>
                            <input id="c7" type="checkbox" name="board-place" value="c7">
                        </div>
                        <div class="form-ele">
                            <label class="b" for="b2">B 2</label>
                            <input id="b2" type="checkbox" name="board-place" value="b2">
                        </div>
                        <div class="form-ele e58">
                            <label class="e" for="e58">E 58</label>
                            <input id="e58" type="checkbox" name="board-place" value="e58">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e57">E 57</label>
                            <input id="e57" type="checkbox" name="board-place" value="e57">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e56">E 56</label>
                            <input id="e56" type="checkbox" name="board-place" value="e56">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e55">E 55</label>
                            <input id="e55" type="checkbox" name="board-place" value="e55">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e54">E 54</label>
                            <input id="e54" type="checkbox" name="board-place" value="e54">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e53">E 53</label>
                            <input id="e53" type="checkbox" name="board-place" value="e53">
                        </div>
                        <div class="form-ele f52">
                            <label class="f" for="f52">F 52</label>
                            <input id="f52" type="checkbox" name="board-place" value="f52">
                        </div>
                    </div>
                    <div class="groub5">
                        <div class="form-ele">
                            <label class="a" for="a1">A 1</label>
                            <input id="a1" type="checkbox" name="board-place" value="a1">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e51">E 51</label>
                            <input id="e51" type="checkbox" name="board-place" value="e51">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e50">E 50</label>
                            <input id="e50" type="checkbox" name="board-place" value="e50">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e49">E 49</label>
                            <input id="e49" type="checkbox" name="board-place" value="e49">
                        </div>
                    </div>
                    <div class="groub6">
                        <div class="form-ele">
                            <label class="b" for="b3">B 3</label>
                            <input id="b3" type="checkbox" name="board-place" value="b3">
                        </div>
                        <div class="form-ele">
                            <label class="c" for="c8">C 8</label>
                            <input id="c8" type="checkbox" name="board-place" value="c8">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f40">F 40</label>
                            <input id="f40" type="checkbox" name="board-place" value="f40">
                        </div>
                        <div class="form-ele e41">
                            <label class="e" for="e41">E 41</label>
                            <input id="e41" type="checkbox" name="board-place" value="e41">
                        </div>
                        <div class="form-ele e46">
                            <label class="e" for="e46">E 46</label>
                            <input id="e46" type="checkbox" name="board-place" value="e46">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e45">E 45</label>
                            <input id="e45" type="checkbox" name="board-place" value="e45">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e44">E 44</label>
                            <input id="e44" type="checkbox" name="board-place" value="e44">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e43">E 43</label>
                            <input id="e43" type="checkbox" name="board-place" value="e43">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e42">E 42</label>
                            <input id="e42" type="checkbox" name="board-place" value="e42">
                        </div>
                        <div class="form-ele f48">
                            <label class="f" for="f48">F 48</label>
                            <input id="f48" type="checkbox" name="board-place" value="f48">
                        </div>
                    </div>
                    <div class="groub7">
                        <div class="form-ele">
                            <label class="e" for="e39">E 39</label>
                            <input id="e39" type="checkbox" name="board-place" value="e39">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e38">E 38</label>
                            <input id="e38" type="checkbox" name="board-place" value="e38">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e37">E 37</label>
                            <input id="e37" type="checkbox" name="board-place" value="e37">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e36">E 36</label>
                            <input id="e36" type="checkbox" name="board-place" value="e36">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e35">E 35</label>
                            <input id="e35" type="checkbox" name="board-place" value="e35">
                        </div>
                    </div>
                    <div class="groub8">
                        <div class="form-ele">
                            <label class="f" for="f60">F 60</label>
                            <input id="f60" type="checkbox" name="board-place" value="f60">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f61">F 61</label>
                            <input id="f61" type="checkbox" name="board-place" value="f61">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f62">F 62</label>
                            <input id="f62" type="checkbox" name="board-place" value="f62">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f63">F 63</label>
                            <input id="f63" type="checkbox" name="board-place" value="f63">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f64">F 64</label>
                            <input id="f64" type="checkbox" name="board-place" value="f64">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f65">F 65</label>
                            <input id="f65" type="checkbox" name="board-place" value="f65">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f66">F 66</label>
                            <input id="f66" type="checkbox" name="board-place" value="f66">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f67">F 67</label>
                            <input id="f67" type="checkbox" name="board-place" value="f67">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f68">F 68</label>
                            <input id="f68" type="checkbox" name="board-place" value="f68">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f69">F 69</label>
                            <input id="f69" type="checkbox" name="board-place" value="f69">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f70">F 70</label>
                            <input id="f70" type="checkbox" name="board-place" value="f70">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f71">F 71</label>
                            <input id="f71" type="checkbox" name="board-place" value="f71">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f72">F 72</label>
                            <input id="f72" type="checkbox" name="board-place" value="f72">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f73">F 73</label>
                            <input id="f73" type="checkbox" name="board-place" value="f73">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f74">F 74</label>
                            <input id="f74" type="checkbox" name="board-place" value="f74">
                        </div>
                        <div class="form-ele">
                            <label class="f" for="f75">F 75</label>
                            <input id="f75" type="checkbox" name="board-place" value="f75">
                        </div>
                    </div>
                    <div class="groub9">
                        <div class="block"></div>
                    </div>
                    <div class="groub10">
                        <div class="form-ele">
                            <label class="e" for="e19">E 19</label>
                            <input id="e19" type="checkbox" name="board-place" value="e19">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e20">E 20</label>
                            <input id="e20" type="checkbox" name="board-place" value="e20">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e21">E 21</label>
                            <input id="e21" type="checkbox" name="board-place" value="e21">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e22">E 22</label>
                            <input id="e22" type="checkbox" name="board-place" value="e22">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e23">E 23</label>
                            <input id="e23" type="checkbox" name="board-place" value="e23">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e24">E 24</label>
                            <input id="e24" type="checkbox" name="board-place" value="e24">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e25">E 25</label>
                            <input id="e25" type="checkbox" name="board-place" value="e25">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e26">E 26</label>
                            <input id="e26" type="checkbox" name="board-place" value="e26">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e27">E 27</label>
                            <input id="e27" type="checkbox" name="board-place" value="e27">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e28">E 28</label>
                            <input id="e28" type="checkbox" name="board-place" value="e28">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e29">E 29</label>
                            <input id="e29" type="checkbox" name="board-place" value="e29">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e30">E 30</label>
                            <input id="e30" type="checkbox" name="board-place" value="e30">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e31">E 31</label>
                            <input id="e31" type="checkbox" name="board-place" value="e31">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e32">E 32</label>
                            <input id="e32" type="checkbox" name="board-place" value="e32">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e33">E 33</label>
                            <input id="e33" type="checkbox" name="board-place" value="e33">
                        </div>
                        <div class="form-ele">
                            <label class="e" for="e34">E 34</label>
                            <input id="e34" type="checkbox" name="board-place" value="e34">
                        </div>
                    </div>
                    <div class="groub11">
                        <div class="block"></div>
                    </div>
                    <div id="exit1">
                        <span>&nbsp;</span>EXIT
                    </div>
                    <div id="exit2">
                        <span>&nbsp;</span>EXIT
                    </div>
                    <div class="entrance">
                        <span>&nbsp;</span>Entrance
                    </div>
                </div>
                <div class="board-description">
                    <div class="row">
                        <div class="col-xs-4 right-description">
                            <p><span class="color-span cs1"></span>الراعى الماسى 6 * 4 <span>(20.000)</span></p>
                            <p><span class="color-span cs2"></span>الراعى الذهبى 5 * 3 <span>(15.000)</span></p>
                            <p><span class="color-span cs3"></span>الراعى الفضى 4 * 3 <span>(10.000)</span></p>
                            <p><span class="color-span cs4"></span>الراعى البرونزى 3 * 2 <span>(5000)</span></p>
                            <p><span class="color-span cs5"></span>مشارك 2 * 2 <span>(3000)</span></p>
                            <p><span class="color-span cs6"></span>مشارك 2 * 1 <span>(1500)</span></p>
                        </div>
                        <div class="col-xs-4">
                            Logo
                        </div>
                        <div class="col-xs-4 left-description">
                            <p>معرض لافلورينا للعناية بالجمال <br/> فى صالة المعارض و المؤتمرات <br/> بفندق هوليدي إن الأزهار <br/> تاريخ 27. 28. 29. - 09 - 2017</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button id="board-submit-btn" type="submit" class="btn btn-default hvr-grow">حجز</button>
            </div>
        </form>
    </section>
    <div id="form-popup">
        <div class="form-popup-content">
            <div class="close-btn"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>
            <h2 class="text-center">احجز مساحتك</h2>
            <h4>المساحات المحددة</h4>
            <table class="table table-hover places-table">
                <thead>
                    <tr>
                        <th class='hidden-xs'>نوع المساحة</th>
                        <th>رقم المساحة</th>
                        <th>السعر</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <form id="full-form" action="#" method="get">
                <h4>نموذج التسجيل الالكترونى</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="adminName">اسم المسؤول</label>
                            <input id="adminName" type="text" class="form-control" placeholder="الكتابه باللغة الانجليزية فقط" name="adminName">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="userName">اسم المشترك</label>
                            <input id="userName" type="text" class="form-control" placeholder="الكتابه باللغة الانجليزية فقط" name="userName">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="job">المسمى الوظيفى</label>
                            <input id="job" type="text" class="form-control" placeholder="الكتابه باللغة الانجليزية فقط" name="job">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">البريد الإلكترونى</label>
                            <input id="email" type="text" class="form-control" placeholder="" name="email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="tel">رقم الهاتف</label>
                            <input id="tel" type="tel" class="form-control" placeholder="" name="tel">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">الجوال</label>
                            <input id="phone" type="tel" class="form-control" placeholder="" name="phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="userType">نوع العارض</label>
                            <select id="userType" class="form-control" name="userType">
                              <option value="company">شركة/مؤسسة - بسجل تجارى</option>
                              <option value="individual">فرد</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="equipType">نرغب بحجز مساحة</label>
                            <select id="equipType" class="form-control" name="equipType">
                              <option value="notEquip">مساحة بدون التجهيز</option>
                              <option value="equip">مساحة مع التجهيز</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default hvr-grow">اكمال الحجز</button>
            </form>
        </div>
    </div>
    <!-- end board section -->


    <h3 class="loctaion">موقعنا</h3>

    <?php the_field('location'); ?>





    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <h3>
                                <i class="fa fa-map-marker" aria-hidden="true"></i> موقع الشركة</h3>
                            <ul>
                                <li>المملكة العربية السعودية</li>
                                <li>طريق الملك عبدالله</li>
                                <li>الرياض 1642</li>
                                <li> اوقات العمل من 8 صباحاص حتي 4 مساءً</li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <h3>
                                <i class="fa fa-id-card" aria-hidden="true"></i> معلومات الاتصال</h3>
                            <ul>
                                <li>الرقم الموحد:55555555</li>
                                <li>جوال:557454548</li>
                                <li>بريد: dhjd@gmail</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h3>
                        <i class="fa fa-envelope" aria-hidden="true"></i> اتصل بنا</h3>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName2">الاسم</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="الاسم">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">البريد الالكتروني</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="البريد الالكتروني">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName2">الجوال</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="الجوال">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName2">الموضوع</label>
                            <textarea class="form-control" rows="3" placeholder="الموضوع"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default hvr-grow">ارسل</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="thank">
        <div class="text">
            <p>
                شكراً لكم زيارتكم موقعنا الالكتروني
                <br> لا تتردد في الانضمام معنا
            </p>
            <a href="#" class="btn hvr-grow">احجز مساحتك</a>
        </div>
    </div>

    <?php get_footer(); ?>
