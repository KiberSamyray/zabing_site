<?php
/*
Template Name: home
*/
?>
<?php get_header(); 

?>
<div class="xpro-slider-container">
            <div id="scroller" class="xpro-slider">
               <div class="xpro-slider-content">
               <?php if( have_rows('main_slider') ): ?>


<?php while( have_rows('main_slider') ): the_row(); 

   // переменные
   $title_slider = get_sub_field('title_slider');
   $desc_slider = get_sub_field('desc_slider');
   $img_slider = get_sub_field('img_slider');
   $field = get_sub_field('vibor_perehoda');
   
   ?>
              <div class="xpro-slider-item" style="background-image:url(<?php echo $img_slider['url']; ?>);background-position:center bottom">
                     <div class="xpro-item-layer p-text-box" data-effect="animate({'Y':'-200px', zoom:'in', 'delay':'0.2s', 'duration':'1000ms'})">
                        <div class="xpro-item-layer-responsive xp-headtext">
                           <h1><?php echo $title_slider; ?></h1>
                        </div>
                        <div class="xpro-item-layer-responsive xp-headsubtext">
                           <h2>
                           <?php echo $desc_slider; ?>
                           </h2>
                        </div>
                        <div class="button-section">
                           <a href="<?php echo $field; ?>" class="btn btn-primary">Подробнее</a>
                        </div>
                     </div>
                  </div>
              
<?php endwhile; ?>
<?php endif; ?>

                  
                  

               </div>
            </div>
         </div>
         <section class="about-us" id="about">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                      
                     <h2 class="section-title">О компании</h2>
                     
                     <div class="section-subtitle"><?php the_field('company_desc'); ?></div>
                     <hr>
                     <div class="col-sm-6 pad100">
                        <div class="content">
                           <p class="first-letter">
                              <?php the_field('text_promishlennost'); ?>
                           </p>
                           
                        </div>
                     </div>
                     <div class="col-sm-6 pad100">
                        <div class="content">
                           <br>
                           <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="<?php the_field('link_youtube'); ?>" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen=""></iframe></div>
                        </div>
                     </div>	
                  </div>
               </div>
<h2 class="section-title-border">Наши партнеры</h2>
<?php 
$gallery_part = get_field('gallery_part');
$size = 'full'; 
if( $gallery_part ): ?>
        <?php foreach( $gallery_part as $gallery_part ): ?>

         <center><img style="height:120px;margin-right:7px;width:auto;float:left" src="<?php echo wp_get_attachment_image_url( $gallery_part['ID'], $size ); ?>"</center>
        <?php endforeach; ?>
<?php endif; ?>
   </div>
         </section>
         <section class="special-menu parallax-box" id="special-menu">
            <div class="mediaSection-box">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h2 class="section-title-border">Ингредиенты</h2>
                        <div class="section-subtitle">
                           <?php the_field('desc_ingr11'); ?>
                        </div>
                        <div class="owl-carousel special-menu-slider">

                        <?php if( have_rows('add_new_ingr') ): ?>



<?php while( have_rows('add_new_ingr') ): the_row(); 

   // переменные
   $image = get_sub_field('img_ingr');
   $name_ingr = get_sub_field('name_ingr');
   $desc_ingr = get_sub_field('desc_ingr');

   ?>

                           <div class="item-frame-box">
                              <div class="item-bg-box">
                                 <div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></div>
                                 <div class="info">
                                    <h3 class="section-title-border text-uppercase">
                                       <?php echo $name_ingr; ?>
                                    </h3>
                                    <p>
                                    <?php echo $desc_ingr; ?>
                                    </p>
                                 </div>
                              </div>
                           </div>


   

<?php endwhile; ?>
<?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="about-us hlebushek" id="hleb">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h2 class="section-title">Учебный центр «Мастерская хлеба»</h2>
                     <div class="section-subtitle">
<?php the_field('slogan_zentr'); ?>
                  </div>
                     <hr>
                     <div class="col-sm-6 pad100">
                        <div class="content">
                           <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/flexslider/flexslider.css?=3" type="text/css" media="all">
                           <link rel="stylesheet" href="/wp-content/themes/zab-ingridients/assets/flexslider/public.css" type="text/css" media="all">
                           <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/flexslider/jquery.flexslider-min.js"></script>
                           <style>
                              #metaslider.flexslider li {
                              }
                              #ds-flexslider {
                              margin:0 auto;
                              }
                           </style>
                           <div id="ds-flexslider" class="metaslider metaslider-flex">
                              <div id="metaslider_container">
                                 <div id="metaslider" class="flexslider">
                                    <ul class="slides">
                                    <?php 
$gallery_zentr = get_field('gallery_zentr');
$size = 'full'; 
if( $gallery_zentr ): ?>
        <?php foreach( $gallery_zentr as $gallery_zentr ): ?>

         <li style="display: none;"><img src="<?php echo wp_get_attachment_image_url( $gallery_zentr['ID'], $size ); ?>"></li>
        <?php endforeach; ?>
<?php endif; ?>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <script>
                              $(document).ready(function () {
                              $('#metaslider').flexslider({
                              slideshowSpeed:5000,
                              animation:'slide',
                              controlNav:true,
                              directionNav:true,
                              pauseOnHover:true,
                              direction:'horizontal',
                              reverse:false,
                              animationSpeed:600,
                              prevText:"<",
                              nextText:">",
                              easing:"linear",
                              slideshow:true,
                              itemMargin:10,
                              useCSS:true
                              });
                              });
                           </script>
                        </div>
                     </div>
                     <div class="col-sm-6 pad100">
                        <div class="content">
                           <p class="first-letter">
<?php the_field('main_inf'); ?>
                        </p>
                           
                           <p class="wow fadeInLeft">
                              <b><?php the_field('inf_sem'); ?>
                              </b><br>
                           </p>
                        </div>
                     </div>
                     <div class="remodal masterhleb" data-remodal-id="novinki-zabingredient">
                        <a class="close-btn2" href="" data-remodal-action="close"></a>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/hleb.png">
                        <h3>
                           Семинар «Самостоятельное производство заквасок на основе оборудования нового поколения. Ферментаторы»
                        </h3>
                        <h4>10:00 Начало семинара</h4>
                        <h5>Презентация оборудования компании «ЖАК» (ферментаторы, багетозакатки)
                           Менеджер-технолог Сергей Галаган (г.Москва)<br>
                           Работа с ферментатором (технология выведение заквасок)<br>
                           Специалист-технолог компании «ЗабИнгредиент» Мария Никифорова
                        </h5>
                        <h4>13:00 - 14:00 Перерыв на обед</h4>
                        <h4>14:00 - 17:00 Выпечка хлеба</h4>
                        <br>
                        <ol class="number-list">
                           <li>Замес теста с использованием ржано-пшеничной закваски собственного производства.</li>
                           <li>Выпечка хлеба с использованием молочно-кислой закваски собственного производства.</li>
                           <li>Замес теста с использованием ржано-пшеничной закваски собственного производства.</li>
                           <li>Производство багетов на закваске разделка теста с использованием тестозакатывающей машины «Жак».</li>
                        </ol>
                        <h4>17:00 Кофе-брейк, дегустация готовой продукции</h4>
                        <h4>18:00 - 19:00 Окончание семинара</h4>
                        <h4>Стоимость участия 5 000 руб / чел</h4>
                        <h5>Место проведения: г.Чита, ул. Недорезова, 1 стр. 7,<br>демоцентр ИП Арефьев А.Л. «ЗабИнгредиент»</h5>
                        <br>
                        <a href="#1" class="btn btn-o-primary callme_viewform">Записаться на семинар</a>
                        <br><br>
                        <a href="" data-remodal-action="close"><i class="fa fa-times" aria-hidden="true"></i> закрыть окно</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="testimonials parallax-box" id="testimonials">
            <div class="mediaSection-box">
               <div class="container">
                  <div class="owl-carousel owl-testimonials">
                  <?php if( have_rows('add_reviews') ): ?>



<?php while( have_rows('add_reviews') ): the_row(); 

   // переменные
   $title_review = get_sub_field('title_review');
   $company_name = get_sub_field('company_name');
   $text_review = get_sub_field('text_review')
   ?>
                     <div class="item-bg-box">
                        <div class="thumb-section">
                           <h3 class="name"><?php echo $title_review; ?></h3>
                           <div class="town"><?php echo $company_name; ?></div>
                        </div>
                        <div class="desc">
                           <p><i class="fa fa-quote-left"></i>
                              <?php echo $text_review; ?>
                           <i class="fa fa-quote-right"></i>
                           </p>
                        </div>
                     </div>
<?php endwhile; ?>
<?php endif; ?>
                  </div>
               </div>
            </div>
         </section>
         <section class="chef-team-section" id="thef-team">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h2 class="section-title"><?php the_field('title_oborud'); ?></h2>
                     <div class="section-subtitle"><?php the_field('desc_oborud11'); ?></div>
                     <div class="owl-carousel owl-chef-team-slider">
                     <?php if( have_rows('add_new_oborud') ): ?>



<?php while( have_rows('add_new_oborud') ): the_row(); 

   // переменные
   $image = get_sub_field('photo_oborud');
   $name_oborud = get_sub_field('name_oborud');
   $name_oborud_2 = get_sub_field('name_oborud_2')
   

   ?>
                        <div class="item-frame-box">
                           <div class="item-bg-box">
                              <div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></div>
                              <div class="info">
                                 <h3 class="manuscript"><?php echo $name_oborud; ?><br><?php echo $name_oborud_2; ?></h3>
                              </div>
                           </div>
                        </div>
<?php endwhile; ?>



<?php endif; ?>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <h2 class="section-title-border edit-marginTop50"><?php the_field('title_block'); ?></h2>
                     <div class="section-subtitle"><?php the_field('desc_block'); ?></div>
                     <div class="tabs edit-marginTop20">
                        <ul class="tab-links">
                        <li class="active"><a href="#tab1"><i class="fa fa-check-square-o"></i>
                              <span><?php the_field('name_1'); ?></span></a>
                           </li>
                           <li><a href="#tab2"><i class="fa fa-check-square-o"></i>
                              <span><?php the_field('name_2'); ?></span></a>
                           </li>
                           <li><a href="#tab3"><i class="fa fa-check-square-o"></i>
                              <span><?php the_field('name_3'); ?></span></a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div id="tab1" class="tab active">
                              <h3><?php  the_field('p1'); ?></h3>
                              <p>
                                 <img src="<?php  the_field('image_group'); ?>" alt="кондитерское производство в Чите">
<?php the_field('p2'); ?>
                              </p>
                           </div>
                           <div id="tab2" class="tab">
                              <h3><?php the_field('t2_p1'); ?></h3>
                              <p>
                                 <img src="<?php  the_field('t2_img'); ?>" alt="хлебопекарное производство в Чите">
                                 <?php the_field('t2_p2'); ?>
                              </p>
                           </div>
                           <div id="tab3" class="tab">
                              <h3><?php the_field('t3_p1'); ?></h3>
                              <p>
                                 <img src="<?php  the_field('t3_img'); ?>" alt="хлебопекарное и кондитерское производство">
                                 <?php the_field('t3_p2'); ?>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="home-gallery" id="gallery">
            <div class="container">
               <h2 class="section-title-border">Галерея</h2>
               <div class="section-subtitle section-subtitle edit-paddingTop0 edit-paddingBottom10">
                  Фотографии продукции и производственных цехов
               </div>
               <div id="gallery-box" class="row edit-paddingTop40">
               <?php 
$images = get_field('photo_gallery');
$size = 'full'; 
if( $images ): ?>
        <?php foreach( $images as $image ): ?>

               <div class="col-sm-4 col-sm-6">
                     <div class="xp-grid-thumb">
                        <img class="gallery-slide-image" src="<?php echo wp_get_attachment_image_url( $image['ID'], $size ); ?>" data-src="<?php echo wp_get_attachment_image_url( $image['ID'], $size ); ?>">
                     </div>
                  </div>
            	
        <?php endforeach; ?>
<?php endif; ?>
               </div>
            </div>
         </section>
         <div class="contact-map" id="contact">
            <div id="googleMap" style="position:relative"></div>
         </div>
<?php get_footer(); ?>
