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
    <?php if(get_field('slider_display') == 'yes'){ ?>
    <div id="first_carousal" class="wow bounceInDown">
        <div class="owl-carousel owl-theme">
            <?php
            $args = array(
            'post_type'  => 'slider',
            'order'      => 'ASC'
            );
            
            $query = new WP_Query($args);
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                    $slide = get_field('image');
                     ?>
                <div class="item">
                    <img src="<?php echo $slide['url']; ?>" class="img-responsive">
                </div>

                <?php }}
                   wp_reset_postdata();
            ?>
        </div>
    </div>
    <?php } ?>

    
    <div id="who_us" class="wow bounceInRight">
        <div class="container">
           <?php if(get_field('who_us_display') == 'yes'){ ?>
            <div class="row">
                <div class="col-sm-8 col-xs-12 block_out  hvr-bob">
                    <div class="block block1">
                        <p class="title">
                            <?php the_field('who_us_title'); ?>
                        </p>
                        <p class="text">
                            <?php the_field('who_us_description'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 block_out hvr-bob">
                    <div class="block">
                        <p class="title">الحدث سيبدأ بعد :</p>
                        <div class="countdown">
                            <?php
                                $args = array(
                                'post_type'  => 'counter'
                                );

                                $query = new WP_Query($args);
                                if($query->have_posts()){
                                    while($query->have_posts()){
                                        $query->the_post();  
                                        the_field('countdown_timer');
                                    }
                                }
                                  wp_reset_postdata();
                                   ?>
                        </div>
                    </div>
                </div>
            </div>
           <?php } ?>
            <div class="row wow bounceInRight">
               <?php if(get_field('our_vision-display') == 'yes'){ ?>
                <div class="col-sm-6 col-xs-12 block_out  hvr-bob">
                    <div id="vision" class="block block1">
                        <p class="title"> <?php the_field('our_vision_title'); ?></p>
                        <p class="text"><?php the_field('our_vision_description'); ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 block_out hvr-bob">
                    <div class="block block1">
                        <p class="title"> <?php the_field('our_goals_title'); ?></p>
                        <p class="text"><?php the_field('our_goals_description'); ?></p>
                    </div>
                </div>
                <?php } ?>
                <?php if(get_field('idea_display') == 'yes'){ ?>
                <div class="col-md-4 col-sm-6 col-xs-12 block_out hvr-bob">
                    <div class="block block1">
                        <p class="title"> <?php the_field('idea_title'); ?></p>
                        <p class="text"><?php the_field('idea_description'); ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 block_out hvr-bob">
                    <div class="block block1">
                        <p class="title"> <?php the_field('where_when_title'); ?></p>
                        <p class="text"><?php the_field('where_when_description'); ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block_out hvr-bob">
                    <div class="block block1">
                        <p class="title"> <?php the_field('part_title'); ?></p>
                        <p class="text"><?php the_field('part_description'); ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
   

    <?php if(get_field('video_display') == 'yes'){ ?>
    <div id="video">
        <div class="container">
            <div class="row wow bounceInRight">
                <div class="col-sm-12 col-xs-12">
                    <?php
                    $args = array(
                    'post_type'  => 'video'
                    );

                    $query = new WP_Query($args);
                    if($query->have_posts()){
                        while($query->have_posts()){
                            $query->the_post();  
                            the_field('our_video');
                        }
                    }
                      wp_reset_postdata();
                       ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if(get_field('why_display') == 'yes'){ ?>
    <div id="why" class="text-center wow bounceInRight">
        <div class="container">
            <div class="row">
                <h3>
                    <?php the_field('why_title'); ?>
                </h3>
                <?php
                $args = array(
                'post_type'  => 'why',
                'order'      => 'ASC'
                );

                $query = new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();  
                        ?>
                    <div>
                        <p class="why_text" data-wow-duration="2s" data-wow-delay=".2s">
                            <?php the_field('feature'); ?>
                        </p>
                    </div>

                    <?php 
                  
                    }
                    
                }
                  wp_reset_postdata();
                   ?>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if(get_field('sponsors_display') == 'yes'){ ?>
    <div id="parteners" class="wow bounceInRight">
        <div class="container">
            <h1>
                <?php the_field('sponsors_title'); ?>
            </h1>
            <div class="owl-carousel owl-theme">
                <?php
                $args = array(
                'post_type'  => 'sponsors',
                'order'      => 'ASC'
                );

                $query = new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();  
                        $logo = get_field('sponsor_logo');
                        ?>
                    <div class="item">
                        <a href="<?php the_field('sponsor_website'); ?>" target="_blank"><img src="<?php echo $logo['url']; ?>" class="img-responsive hvr-Pulse-grow"></a>
                    </div>
                    <?php 
                  
                    }
                    
                }
                  wp_reset_postdata();
                   ?>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if(get_field('activites_display') == 'yes'){ ?>
    <div id="halls" class="wow bounceInRight">
        <div class="container">
           <h1>
               <?php the_field('activites_title'); ?>
           </h1>
            <div class="owl-carousel owl-theme">
             <?php
            $args = array(
            'post_type'  => 'activites',
            'order'      => 'ASC'
            );

            $query = new WP_Query($args);
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();  
                    $activity_image = get_field('activity_image');
                    ?>
                 <div class="item">
                    <div class="row">
                        <h3><?php the_field('activity_title'); ?></h3>
                        <div class="col-sm-6 col-xs-12">
                            <div class="img_out">
                                <img class="img-responsive" src="<?php echo $activity_image['url']; ?>"> 
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <p><?php the_field('activity_description'); ?></p>
                        </div>
                    </div>
                </div>
         <?php  }   }  wp_reset_postdata();  ?>
            </div>
        </div>  
    </div>
    <?php } ?>

   <?php if(get_field('sponsorship_display') == 'yes'){ ?>
    <div id="sponsers_carousal" class="wow bounceInRight">
        <div class="container">
            <h2><?php the_field('sponsorship_title'); ?> <a href="#"><?php the_field('sponsorship_title_2'); ?></a>
            </h2>
            <div class="owl-carousel owl-theme">
                            <?php
            $args = array(
            'post_type'  => 'sponsorship'
            );

            $query = new WP_Query($args);
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();  
                    $sponsorship_logo1 = get_field('sposorship_logo');
                    $sponsorship_logo2 = get_field('sposorship_logo2');
                    $sponsorship_logo3 = get_field('sposorship_logo3');
                    $sponsorship_logo4 = get_field('sposorship_logo4');
                    ?>
                <div class="item">
                    <?php if(get_field('sponsorship_dispaly1') == 'yes'){ ?>
                    <a href="<?php the_field('sponsorship_website'); ?>"><img class="img-responsive hvr-Pulse-grow" src="<?php echo $sponsorship_logo1['url'] ?>"></a>
                    <?php } ?>
                    <?php if(get_field('sponsorship_dispaly2') == 'yes'){ ?>
                    <a href="<?php the_field('sponsorship_website2'); ?>"><img class="img-responsive hvr-Pulse-grow" src="<?php echo $sponsorship_logo2['url'] ?>"></a>
                    <?php } ?>
                    <?php if(get_field('sponsorship_dispaly3') == 'yes'){ ?>
                    <a href="<?php the_field('sponsorship_website3'); ?>"><img class="img-responsive hvr-Pulse-grow" src="<?php echo $sponsorship_logo3['url'] ?>"></a>
                    <?php } ?>
                    <?php if(get_field('sponsorship_dispaly4') == 'yes'){ ?>
                    <a href="<?php the_field('sponsorship_website4'); ?>"><img class="img-responsive hvr-Pulse-grow" src="<?php echo $sponsorship_logo4['url'] ?>"></a>
                    <?php } ?>
                </div>
         <?php  }   }  wp_reset_postdata();  ?>

            </div>

        </div>
    </div>
    <?php } ?>
    
    <!-- start board section -->
    <?php if(get_field('spaces_display') == 'yes'){ ?>
    <section class="BoardSection wow bounceInRight">
        <form id="BoardForm" action="" method="get">
            <div class="xs-y-scroll">
                <div class="FullBoard">
                    <div class="BoardHeader">
                        <h2>أقسام المعرض</h2>
                        <div class="headEle">
                            <p>بهو المعرض</p>
                            <p>المساحة</p>
                            <p>المستخدمة 55م<sup>2</sup></p>
                            <p>الحرة: 671م<sup>2</sup></p>
                            <p>نساء و عوائل</p>
                        </div><div class="headEle">
                            <p>جناح النخبة</p>
                            <p>المساحة</p>
                            <p>المستخدمة 525م<sup>2</sup></p>
                            <p>الحرة: 936.5م<sup>2</sup></p>
                            <p>نساء و عوائل</p>
                        </div><div class="headEle">
                            <p>جناح مصممات الازياء</p>
                            <p>المساحة</p>
                            <p>المستخدمة 111م<sup>2</sup></p>
                            <p>الحرة: 169م<sup>2</sup></p>
                            <p>نساء فقط</p>
                        </div><div class="headEle">
                            <p>جناح خبيرات التجميل</p>
                            <p>المساحة</p>
                            <p>المستخدمة 91م<sup>2</sup></p>
                            <p>الحرة: 189م<sup>2</sup></p>
                            <p>نساء فقط</p>
                        </div>   
                    </div>
                    <div class="note-div">
                        <p>المساحات المميزة بعلامة <i class="fa fa-star" aria-hidden="true"></i> هى مساحات مُجهزة</p>
                    </div>
                    <div class="BoardContent">
                        <div class="part1">
                            <div class="form-ele">
                                <label class="main-place" for="1">1</label>
                                <input id="1" type="checkbox" name="board-place" value="1">
                            </div>
                        </div>
                        <div class="part2">
                            <div class="form-ele">
                                <label class="glory-place" for="2">2</label>
                                <input id="2" type="checkbox" name="board-place" value="2">
                            </div>
                        </div>
                        <div class="part3">
                            <div class="form-ele">
                                <label class="goldA-place" for="31">31</label>
                                <input id="31" type="checkbox" name="board-place" value="31">
                            </div>
                        </div>
                        <div class="part4">
                            <div class="form-ele">
                                <label class="goldA-place" for="32">32</label>
                                <input id="32" type="checkbox" name="board-place" value="32">
                            </div>
                        </div>
                        <div class="part5">
                            <div class="form-ele">
                                <label class="goldA-place" for="33">33</label>
                                <input id="33" type="checkbox" name="board-place" value="33">
                            </div><div class="form-ele">
                                <label class="goldA-place" for="34">34</label>
                                <input id="34" type="checkbox" name="board-place" value="34">
                            </div>
                        </div>
                        <div class="part6">
                            <div class="form-ele">
                                <label class="goldB-place" for="43">43</label>
                                <input id="43" type="checkbox" name="board-place" value="43">
                            </div><div class="form-ele">
                                <label class="goldB-place" for="44">44</label>
                                <input id="44" type="checkbox" name="board-place" value="44">
                            </div>
                            <div class="form-ele">
                                <label class="goldB-place" for="41">41</label>
                                <input id="41" type="checkbox" name="board-place" value="41">
                            </div><div class="form-ele">
                                <label class="goldB-place" for="42">42</label>
                                <input id="42" type="checkbox" name="board-place" value="42">
                            </div>
                        </div>
                        <div class="part7">
                            <div class="form-ele">
                                <label class="silver-place" for="51">51</label>
                                <input id="51" type="checkbox" name="board-place" value="51">
                            </div><div class="form-ele">
                                <label class="silver-place" for="52">52</label>
                                <input id="52" type="checkbox" name="board-place" value="52">
                            </div>
                        </div>
                        <div class="part8">
                            <div class="form-ele">
                                <label class="silver-place" for="53">53</label>
                                <input id="53" type="checkbox" name="board-place" value="53">
                            </div><div class="form-ele">
                                <label class="silver-place" for="54">54</label>
                                <input id="54" type="checkbox" name="board-place" value="54">
                            </div>
                        </div>
                        <div class="part9">
                            <div class="form-ele">
                                <label class="bronze-place" for="61">61</label>
                                <input id="61" type="checkbox" name="board-place" value="61">
                            </div><div class="form-ele">
                                <label class="bronze-place" for="62">62</label>
                                <input id="62" type="checkbox" name="board-place" value="62">
                            </div>
                        </div>
                        <div class="part10">
                            <div class="form-ele">
                                <label class="bronze-place" for="63">63</label>
                                <input id="63" type="checkbox" name="board-place" value="63">
                            </div><div class="form-ele">
                                <label class="bronze-place" for="64">64</label>
                                <input id="64" type="checkbox" name="board-place" value="64">
                            </div>
                        </div>
                        <div class="part11">
                            <div class="form-ele">
                                <label class="green-place" for="80">80</label>
                                <input id="80" type="checkbox" name="board-place" value="80">
                            </div>
                        </div>
                        <div class="part12">
                            <div class="form-ele">
                                <label class="nokhbaV-place" for="A1">A1</label>
                                <input id="A1" type="checkbox" name="board-place" value="A1">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="A2">A2</label>
                                <input id="A2" type="checkbox" name="board-place" value="A2">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="A3">A3</label>
                                <input id="A3" type="checkbox" name="board-place" value="A3">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="A4">A4</label>
                                <input id="A4" type="checkbox" name="board-place" value="A4">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="A5">A5</label>
                                <input id="A5" type="checkbox" name="board-place" value="A5">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="A6">A6</label>
                                <input id="A6" type="checkbox" name="board-place" value="A6">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="A7">A7</label>
                                <input id="A7" type="checkbox" name="board-place" value="A7">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="A8">A8</label>
                                <input id="A8" type="checkbox" name="board-place" value="A8">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="A9">A9</label>
                                <input id="A9" type="checkbox" name="board-place" value="A9">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="A10">A10</label>
                                <input id="A10" type="checkbox" name="board-place" value="A10">
                            </div>
                        </div>
                        <div class="part13">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="A11">A11</label>
                                <input id="A11" type="checkbox" name="board-place" value="A11">
                            </div>
                        </div>
                        <div class="part14">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="A22">A22</label>
                                <input id="A22" type="checkbox" name="board-place" value="A22">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A21">A21</label>
                                <input id="A21" type="checkbox" name="board-place" value="A21">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A20">A20</label>
                                <input id="A20" type="checkbox" name="board-place" value="A20">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A19">A19</label>
                                <input id="A19" type="checkbox" name="board-place" value="A19">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A18">A18</label>
                                <input id="A18" type="checkbox" name="board-place" value="A18">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A17">A17</label>
                                <input id="A17" type="checkbox" name="board-place" value="A17">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A16">A16</label>
                                <input id="A16" type="checkbox" name="board-place" value="A16">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A15">A15</label>
                                <input id="A15" type="checkbox" name="board-place" value="A15">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A14">A14</label>
                                <input id="A14" type="checkbox" name="board-place" value="A14">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A13">A13</label>
                                <input id="A13" type="checkbox" name="board-place" value="A13">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A12">A12</label>
                                <input id="A12" type="checkbox" name="board-place" value="A12">
                            </div>
                        </div>
                        <div class="part15">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="A23">A23</label>
                                <input id="A23" type="checkbox" name="board-place" value="A23">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A24">A24</label>
                                <input id="A24" type="checkbox" name="board-place" value="A24">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A25">A25</label>
                                <input id="A25" type="checkbox" name="board-place" value="A25">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A26">A26</label>
                                <input id="A26" type="checkbox" name="board-place" value="A26">
                            </div>
                        </div>
                        <div class="part16">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="A27">A27</label>
                                <input id="A27" type="checkbox" name="board-place" value="A27">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A28">A28</label>
                                <input id="A28" type="checkbox" name="board-place" value="A28">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A29">A29</label>
                                <input id="A29" type="checkbox" name="board-place" value="A29">
                            </div>
                        </div>
                        <div class="part17">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="A30">A30</label>
                                <input id="A30" type="checkbox" name="board-place" value="A30">
                            </div>
                        </div>
                        <div class="part18">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="A31">A31</label>
                                <input id="A31" type="checkbox" name="board-place" value="A31">
                            </div>
                        </div>
                        <div class="part19">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="A38">A38</label>
                                <input id="A38" type="checkbox" name="board-place" value="A38">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A37">A37</label>
                                <input id="A37" type="checkbox" name="board-place" value="A37">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A36">A36</label>
                                <input id="A36" type="checkbox" name="board-place" value="A36">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A35">A35</label>
                                <input id="A35" type="checkbox" name="board-place" value="A35">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A34">A34</label>
                                <input id="A34" type="checkbox" name="board-place" value="A34">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A33">A33</label>
                                <input id="A33" type="checkbox" name="board-place" value="A33">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A32">A32</label>
                                <input id="A32" type="checkbox" name="board-place" value="A32">
                            </div>
                        </div>
                        <div class="part20">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="A39">A39</label>
                                <input id="A39" type="checkbox" name="board-place" value="A39">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A40">A40</label>
                                <input id="A40" type="checkbox" name="board-place" value="A40">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A41">A41</label>
                                <input id="A41" type="checkbox" name="board-place" value="A41">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A42">A42</label>
                                <input id="A42" type="checkbox" name="board-place" value="A42">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A43">A43</label>
                                <input id="A43" type="checkbox" name="board-place" value="A43">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="A44">A44</label>
                                <input id="A44" type="checkbox" name="board-place" value="A44">
                            </div>
                        </div>
                        <div class="part21">
                            <div class="form-ele">
                                <label class="nokhbaV-place" for="B1">B1</label>
                                <input id="B1" type="checkbox" name="board-place" value="B1">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="B2">B2</label>
                                <input id="B2" type="checkbox" name="board-place" value="B2">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="B3">B3</label>
                                <input id="B3" type="checkbox" name="board-place" value="B3">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="B4">B4</label>
                                <input id="B4" type="checkbox" name="board-place" value="B4">
                            </div>
                        </div>
                        <div class="part22">
                            <div class="form-ele">
                                <label class="nokhbaV-place" for="B8">B8</label>
                                <input id="B8" type="checkbox" name="board-place" value="B8">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="B7">B7</label>
                                <input id="B7" type="checkbox" name="board-place" value="B7">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="B6">B6</label>
                                <input id="B6" type="checkbox" name="board-place" value="B6">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="B5">B5</label>
                                <input id="B5" type="checkbox" name="board-place" value="B5">
                            </div>
                        </div>
                        <div class="part23">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="B9">B9</label>
                                <input id="B9" type="checkbox" name="board-place" value="B9">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="B10">B10</label>
                                <input id="B10" type="checkbox" name="board-place" value="B10">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="B11">B11</label>
                                <input id="B11" type="checkbox" name="board-place" value="B11">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="B12">B12</label>
                                <input id="B12" type="checkbox" name="board-place" value="B12">
                            </div>
                        </div>
                        <div class="part24">
                            <div class="form-ele">
                                <label class="nokhbaV-place" for="C1">C1</label>
                                <input id="C1" type="checkbox" name="board-place" value="C1">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="C2">C2</label>
                                <input id="C2" type="checkbox" name="board-place" value="C2">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="C3">C3</label>
                                <input id="C3" type="checkbox" name="board-place" value="C3">
                            </div>
                        </div>
                        <div class="part25">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="C4">C4</label>
                                <input id="C4" type="checkbox" name="board-place" value="C4">
                            </div>
                        </div>
                        <div class="part26">
                            <div class="form-ele">
                                <label class="nokhbaV-place" for="C9">C9</label>
                                <input id="C9" type="checkbox" name="board-place" value="C9">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="C8">C8</label>
                                <input id="C8" type="checkbox" name="board-place" value="C8">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="C7">C7</label>
                                <input id="C7" type="checkbox" name="board-place" value="C7">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="C6">C6</label>
                                <input id="C6" type="checkbox" name="board-place" value="C6">
                            </div><div class="form-ele">
                                <label class="nokhbaV-place" for="C5">C5</label>
                                <input id="C5" type="checkbox" name="board-place" value="C5">
                            </div>
                        </div>
                        <div class="part27">
                            <div class="form-ele">
                                <label class="nokhbaH-place" for="C10">C10</label>
                                <input id="C10" type="checkbox" name="board-place" value="C10">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="C11">C11</label>
                                <input id="C11" type="checkbox" name="board-place" value="C11">
                            </div><div class="form-ele">
                                <label class="nokhbaH-place" for="C12">C12</label>
                                <input id="C12" type="checkbox" name="board-place" value="C12">
                            </div>
                        </div>
                    </div>
                    <div class="BoardSubmitDiv">
                        <button id="BoardSubmitBtn" class="btn hvr-grow" type="submit">حجز</button>
                    </div>
                    <div class="BoardFooter">
                        <img src="<?php echo get_template_directory_uri().'/pic/boardFooterBG.png'?>"/>
                    </div>
                </div>
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
           <form id="full-form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="business" value="expo@ter.com.sa">

                <!-- Specify a Buy Now button. -->
                <input type="hidden" name="cmd" value="_xclick">

                <!-- Specify details about the item that buyers will purchase. -->
                <input id="places" type="hidden" name="item_name" value="none">
                <input id="total" type="hidden" name="amount" value="999999">
                <input type="hidden" name="currency_code" value="USD">
                <input id="otherData" type="hidden" name="custom" value=""/>
                <h4>نموذج التسجيل الالكترونى</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="adminName">اسم المسؤول</label>
                            <input id="adminName" type="text" class="form-control" placeholder="الكتابه باللغة الانجليزية فقط" name="adminName" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="userName">اسم المشترك</label>
                            <input id="userName" type="text" class="form-control" placeholder="الكتابه باللغة الانجليزية فقط" name="userName" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="job">المسمى الوظيفى</label>
                            <input id="job" type="text" class="form-control" placeholder="الكتابه باللغة الانجليزية فقط" name="job" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">البريد الإلكترونى</label>
                            <input id="email" type="text" class="form-control" placeholder="" name="email" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="tel">رقم الهاتف</label>
                            <input id="tel" type="tel" class="form-control" placeholder="" name="tel" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">الجوال</label>
                            <input id="phone" type="tel" class="form-control" placeholder="" name="phone" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="userType">نوع العارض</label>
                            <select id="userType" class="form-control" name="userType" required>
                              <option value="company">شركة/مؤسسة - بسجل تجارى</option>
                              <option value="individual">فرد</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="conditions" required>
                              لقد قرأت وقبلت <a id="conditions-btn" href="#">الشروط والاحكام</a> 
                            </label>
                            
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <input id="paypalSubmitBtn" class="btn hvr-grow" type="submit" name="submit" border="0" alt="اكمل الحجز" value="اكمال الحجز">
<!--                    <button type="submit" class="btn hvr-Grow">اكمال الحجز</button>-->
                </div>
                <!-- Display the payment button. -->
            </form>
        </div>
    </div>
    <div id="conditions-popup">
        <div class="conditions-popup-content">
            <div class="close-btn"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>
            <h2 class="text-center">الشروط العامة</h2>
            <ol>
                <li>المشاركين هم السعوديين, مواطنين دول مجلس التعاون, المحلات التجارية, والشركات التي لها سجل تجاري ساري المفعول</li>
                <li>حال كان العارض أجنبي لابد أن يكون على كفالة الجهة المشاركة.</li>
                <li>يمنع عرض السلع التي أوشكت على الانتهاء, القديمة, التالفة, المقلدة, أو الماركات العالمية الا بوجود وكالة مسجلة أو عقد توزيع معتمد رسميأ.</li>
                <li>يمنع إعادة تأجير المنصة, التنازل عنها, او اشراك جهة اخرى او الاعلان او توزيع منشورات ورقية او تعليق منشورات لجهة أخرى سوى كانوا شركات أو افراد.</li>
                <li>الالتزام بأغلاق المنصة أوقات الصلاة وبعد انتهاء ساعات عمل المعرض الرسمية.</li>
                <li>الالتزام بالزي المحتشم لباس الكرت التعريفي الخاص بالعارض محتويا على الاسم, والوظيفة, والجهة.</li>
                <li>المحافظة على النظافة العاملة ورمي النفايات في المكان المخصص لذلك, ويسمح بالتدخين فقط في الآماكن المخصصة.</li>
                <li>التقيد في المساحة الداخلية للمنصة الداخلية للمنصة وعدم استخدام الممرات, الخروج على المنصات المجاورة, او الوقوف في الممرات.</li>
                <li>لا يتم تأكيد  الحجز الا عند دفع 50% من قيمة ايجار المنصة, على ان تكون الدفع الثانية قبل تاريخ 10/11/2017 والا يعتبر الحجز لاغي والدفعة الاولى غير مسترجعهs</li>
                <li>تتحمل الجهة المشاركة بالمحافظة على المنصة, المبنى, المرافق التابعة للفندق, وتتكفل بدفع تكاليف اصلاح أي جزء يتعرض للتلف بسبب سوء استخدام او اهمال.</li>
                <li>عدم التجول في الفندق او المرافق الخاصة فيه والالتزام بأماكن العمل المخصصة لكل عارض والالتزام بأوقات عمل المعرض الرسمية.</li>
                <li>عدم التغيير في انارة المنصة الداخلية او استخدام مكبرات للصوت او أجهزة التشغيل المرئية او الصوتية الا بعد مخاطبة إدارة المعرض كتابيأ.</li>
                <li>المساحات المعدة داخل المنصة في لتعليق مطبوعات المشارك ولا يسمح باستخدام أي جزء خارج المنصة.</li>
                <li>يتم وضع اسم الجهة المشاركة على واجهة المنصة للأفراد بالإضافة الى رقم السجل والعنوان للمحلات التجارية والشركات.</li>
                <li>توقيعك على الاتفاقية بمثابة اذن منك باستخدام شعارك في الخملات الإعلامية والاعلانية والمواقع الالكترونية والمطبوعات الورقية لهذه الحملة او الحملات القادمة.</li>
                <li>اخلاء المنصة فور انتهاء المعرض, مع الالتزام بازالة المنصة في حال كانت ملك المشارك.</li>
                <li>يجيب تقديم عروض تشجيعية وخصومات للزوار, والحرص على تطبيق سياسة الارجاع والاستبدال خلال فترة المعرض او من خلال منافذ البيع الخاصة بالمشتركين.</li>
                <li>في حال عدم تمكن المشارك من العرض في المنصة لآسبابه الخاصة, يحق لموارد النخبة التصرف بالمنصة دون ابلاغ مسبق ولا يتم ارجاع قيمة الايجار.</li>
                <li>يرجى التعاون مع المشرفين المختصين بتنظيم المعرض.</li>
                <li>عند مخالفة العارض لبند او أكثر سيتم الغاء اشتراك العارض وازالة المنصة ولن يتم ارجاع قيمة الاشتراك.</li>
                <li>تتعهد وكالة موارد النخبة بتسليم المشارك المنصة حسب المواصفات وفي الزمان والمكان المنصوص عليه في العقد.</li>
                <li>موارد النخبة غير مسؤلة عن فقد المقتنيات الثمينة او النقود, او أي خسارة ناتجة عن كوارث طبيعية, حروب, شغب, نشوب حريق, خلل في المبنى, طوارئ مخلية, او صحية, او اي قوة قاهرة خارجة عن ارادة موارد النخبة.</li>
                <li>موارد النخبة غير مسئولة ولا تلتزم عن اي وعود شفهية خارج المذكور في العقد أو في ملحق اضافي يتم توقيعه وختمه من ادارة موارد النخبة.</li>
                <li>المنصات التي تندرج تحت ترميز ( A,B,C ) مجهزة بمنصات موارد النخبة والسعر يشمل ايجار المنصة.</li>
                <li>يحق لوكالة موارد النخبة تأجيل موعد المعرض لاي سبب خارج عن ارادة الوكالة أو عند حدوث عائق يقف امام نجاح المشروع, بمدة لاتتجاوز 6 اشهر</li>
            </ol>
            <p></p>
        </div>
    </div>
    <?php } ?>
    <!-- end board section -->


    <!-- sratr tickets reservation section -->
    <?php if(get_field('tickets_display') == 'yes'){ ?>
    <section class="ticketsReservation-section wow bounceInRight">
        <div class="container">
            <h2><?php the_field('tickets_title'); ?></h2>
            <div class="row">
                <div class="col-sm-7 col-lg-6">
                    <div class="row">
                        <div class="col-sm-6 center-xs">
                            <div class="reserv-ele">
                                <div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                <div class="ele-content">
                                    <p class="txt-h">تبدا</p>
                                    <p><?php the_field('tickets_start'); ?>, <?php the_field('tickets_start_time'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 center-xs">
                            <div class="reserv-ele">
                                <div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                <div class="ele-content">
                                    <p class="txt-h">تنتهى</p>
                                    <p><?php the_field('tickets_end'); ?>, <?php the_field('tickets_end_time'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 center-xs">
                            <div class="reserv-ele">
                                <div class="icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                                <div class="ele-content">
                                    <p class="txt-h">اسعار التذاكر</p>
                                    <p><?php the_field('tickets_price'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 center-xs">
                            <div class="reserv-ele">
                                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="ele-content">
                                    <p class="txt-h">مكان الفعالية</p>
                                    <p><?php the_field('tickets_location'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-6">
                    <form id="ticketForm" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="business" value="expo@ter.com.sa">

                        <!-- Specify a Buy Now button. -->
                        <input type="hidden" name="cmd" value="_xclick">

                        <!-- Specify details about the item that buyers will purchase. -->
                        <input id="ticket_name" type="hidden" name="item_name" value="none">
                        <input id="ticket_price" type="hidden" name="amount" value="99">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="charset" value="utf-8">
                        <input type="hidden" name="return" value="http://elnokhba.ter.sa/">
                        <input id="ticketCustomData" type="hidden" name="custom" value="">
                        <div class="form-group">
                            <label>الاسم بالكامل</label>
                            <input id="ticketOwnerName" type="text" class="form-control" placeholder="الكتابه باللغة الانجليزية فقط" name="ticketOwnerName" required>
                        </div>
                        <div class="form-group">
                            <label>البريد الالكترونى</label>
                            <input id="ticketOwnerMail" type="email" class="form-control" placeholder="الكتابه باللغة الانجليزية فقط" name="ticketOwnerMail" required>
                        </div>
                        <div class="form-group">
                            <label>عدد التذاكر</label>
                            <input id="ticketsNumber" type="number" name="ticketsNumber" class="form-control" value="1" min="1" />
                        </div>
                        <div class="form-group">
                            <label for="ticketType">نوع التذكرة</label>
                            <select id="ticket_type" class="form-control" name="ticketType">
                              <option value="100" name="1 person">عادية 100 ريال</option>
                              <option value="500" name="3 persons">VIP 500 ريال</option>
                            </select>
                        </div>
                        <table class="table tickets-price-table">
                            <tbody>
                                <tr>
                                    <td>التكلفة الكلية</td>
                                    <td><span id="ticketsTotalRIAL">0 </span>ريال</td>
                                    <td><span id="ticketsTotalUSD">0 </span>دولار</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <input class="btn hvr-grow" type="submit" name="submit" border="0" alt="حجز تذكرة" value="حجز تذكرة">
        <!--                    <button type="submit" class="btn hvr-grow">اكمال الحجز</button>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- end tickets reservation section -->

    <?php if(get_field('sponsor_program_display') == 'yes'){ ?>
    <div id="sponser_program" class="wow bounceInRight">
        <div class="container">
            <div class="owl-carousel owl-theme">
            <?php
            $args = array(
            'post_type'  => 'sponsor_program',
            'order'      => 'ASC'
            );

            $query = new WP_Query($args);
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();  
                    $sponsor_program_image = get_field('sponsor_program_image');
                    ?>
                    <div class="item">
                        <div class="img_out">
                            <img src="<?php echo $sponsor_program_image['url']; ?>">
                        </div>
                        <p><?php the_field('sponsor_program_name'); ?></p>
                        <div class="price">
                            <span><?php the_field('sponsor_program_price'); ?> <?php the_field('sponsor_program_currancy'); ?></span>
                        </div>
                    </div>
                   
                    <?php 
                  
                    }
                    
                }
                  wp_reset_postdata();
                   ?>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <?php if(get_field('media_display') == 'yes'){ ?>
    <div id="media" class="wow bounceInRight">
        <div class="container">
            <h3><?php the_field('media_center_title'); ?></h3>
            <div class="row">
                <div class="owl-carousel owl-theme">
                            <?php
            $args = array(
            'post_type'  => 'media'
            );

            $query = new WP_Query($args);
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();  
                    $media_logo1 = get_field('media_logo');
                    $media_logo2 = get_field('media_logo2');
                    ?>
                <div class="item">
                    <?php if(get_field('media_dispaly1') == 'yes'){ ?>
                    <a href="<?php the_field('media_website'); ?>"><img class="img-responsive hvr-Pulse-grow" src="<?php echo $media_logo1['url'] ?>"></a>
                    <?php } ?>
                    <?php if(get_field('media_dispaly2') == 'yes'){ ?>
                    <a href="<?php the_field('media_website2'); ?>"><img class="img-responsive hvr-Pulse-grow" src="<?php echo $media_logo2['url'] ?>"></a>
                    <?php } ?>
                </div>
         <?php  }   }  wp_reset_postdata();  ?>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>


    <?php if(get_field('our_location_display') == 'yes'){ ?>
    <h3 class="loctaion"><?php the_field('our_location_title'); ?></h3>
    <div id="map" class="wow bounceInRight">
        <?php the_field('our_location'); ?>
    </div>
   <?php } ?>
   
   <?php if(get_field('company_display') == 'yes'){ ?>
    <div id="contact" class="wow bounceInRight">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <h3>
                                <i class="fa fa-map-marker" aria-hidden="true"></i> موقع الشركة</h3>
                            <ul>
                                <li><?php the_field('company_location'); ?></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <h3>
                                <i class="fa fa-id-card" aria-hidden="true"></i> معلومات الاتصال</h3>
                            <ul>
                                <li><?php the_field('company_contacts'); ?></li>
                                <li><img class="" src="<?php echo get_template_directory_uri().'/pic/logo.png' ?>" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h3>
                        <i class="fa fa-envelope" aria-hidden="true"></i> اتصل بنا</h3>
                    <?php echo do_shortcode('[contact-form-7 id="4" title="اتصل بنا"]'); ?>
                </div>
            </div>
        </div>
    </div>
     <?php } ?>

    <div id="thank" class="wow bounceInDown">
        <div class="text">
            <p><?php the_field('thanks'); ?></p>
            <a href="#" class="btn hvr-grow">احجز مساحتك</a>
        </div>
    </div>
    <?php get_footer(); ?>
