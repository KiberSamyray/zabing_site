<footer id="footer" class="footer-background">
            <div id="footer-top" class="container">
               <div class="row">
                  <div class="block col-sm-4">
                     <h3 class="footer-title"><?php the_field('company_name_footer'); ?></h3>
                     <div id="footer-about">
                        <p>
                        <?php the_field('desc_footer'); ?>                        
                     </p>
                     </div>
                  </div>
                  <div class="block col-sm-4">
                     <h3 class="footer-title">Контакты</h3>
                     <ul id="footer-contacts">
                        <li><i class="fa fa-map-marker"></i><?php the_field('address_footer'); ?>    </li>
                        <br>
                        <li><i class="fa fa-phone"></i><?php the_field('num_phone1_footer'); ?></li>
                        <br>
                        <li><i class="fa fa-phone"></i> <?php the_field('num_phone2_footer'); ?></li>
                        <br>
                        <li><i class="fa fa-envelope-o"></i> <?php the_field('footer_email'); ?></li>
                     </ul>
                  </div>
                  <div class="block col-sm-4">
                     <h3 class="footer-title">Режим работы</h3>
                     <ul id="footer-work-time">
                        <li>
                           <span class="date">Понедельник - Пятница</span><span class="time"><?php the_field('time_work'); ?></span>
                           <div class="line-box">
                              <div class="line-dotted"></div>
                           </div>
                        </li>
                        <li>
                           <span class="date">Суббота</span><span class="time"><?php the_field('work_subbota'); ?></span>
                           <div class="line-box">
                              <div class="line-dotted"></div>
                           </div>
                        </li>
                        <li>
                           <span class="date">Воскресенье</span><span class="time"><?php the_field('work_wsk'); ?></span>
                           <div class="line-box">
                              <div class="line-dotted"></div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div id="copyright">
               <a href="#page-top" class="scrollTopButton">
               <span class="button-square">
               <i class="fa fa-angle-double-up"></i>
               </span>
               </a>
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <span class="allright">«ЗабИнгредиент»<br><strong>Веб-студия <a href="https://zab-net.ru" title="Веб студия Чита">Zab-<b>Net</b></a></strong></span>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/common.js"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/bootstrap-progressbar.js"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/jquery.nav.js"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/isotope.pkgd.min.js"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/datepiker/js/moment.js"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/datepiker/js/bootstrap-datepicker.js"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/xpro/js/slider.js"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/scripts.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSEBsEMoHacKnvsg6A_h85H90JrVle7k4&callback=initMap" type="text/javascript"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/contact.js"></script>
      <script type="text/javascript" src="/wp-content/themes/zab-ingridients/assets/js/contact-mail.js"></script>
      <script type="text/javascript">
         // Hero Slide// --------------------------
         jQuery(document).ready(
         function() {
         var slider = new XPRO.Controls.Slider(null);
         slider.initSlider("scroller", {
         "mode"              : "fade",
         "dir"               : "left",
         "iniWidth"          : 1200,
         "iniHeight"         : 600,
         "autoRun"           : true,
         "interval"          : 6000,
         "autoHeightMode"    : "maintainratio",
         "thumbnails"        : null,
         "stopOnHover"       : false,
         "imageVAlign"       : "bottom",
         "showProgress"      : false,
         "enableNavigation"  : true,
         "onAdjustHeight"    : function(theslider) {
         //get available height
         var aH = jQuery(window).innerHeight();
         var top = jQuery(theslider.rt["scroller"]).position()["top"];
         return aH-top;
         }
         });
         jQuery(".xp-custom-navigation").on("click", function() {
         slider.forward();
         return false;
         });
         var slider = new XPRO.Controls.Slider();
         //   Creat	Gallery Box
         slider.createSliderStruct({
         elements: jQuery('#gallery-box .gallery-slide-image').toArray(),
         sliderOptions: {
         "mode"              : "slide",
         "iniWidth"          : 1000,
         "iniHeight"         : 500,
         "autoHeightMode"    : "maintainratio",
         "thumbnails"        : null,
         "floating"          : true,
         "autoRun"           : true,
         "interval"          : 6000,
         "stopOnHover"       : false,
         "showProgress"      : true,
         "infoPanel"         : {panelId: "infopanel"},
         "onSlide"           : function(cnt) {
         //select thumbnail
         jQuery("#gallery-box").find(".xp-grid-thumb").removeClass("xp-grid-thumb-sel");
         var thm = cnt.elm.getAttribute("data-thumb-idx");
         jQuery("#gallery-box").find("[data-thumb-idx='"+thm+"']").parent(".xp-grid-thumb").addClass("xp-grid-thumb-sel");
         }
         },
         itemHTML: function(html, idx, elm) {
         elm.setAttribute("data-thumb-idx", idx);
         jQuery(elm).on("click", function() {
         slider.showSlider();
         slider.slideTo(idx);
         });
         html  = "<div class='xpro-slider-item' data-thumb-idx='"+idx+"'><div class='xpro-image-placeholder' data-src='" + elm.getAttribute("data-src") +"' data-class='xpro-kenburns-dir-random' ></div>";
         html += "<div class='xpro-item-layer p-item-layer' data-effect=\"animate({zoom:'in', delay:'0.8s'})\" >"+elm.getAttribute('alt')+"</div>";
         html += "<div class='xpro-slider-info'>"+elm.getAttribute('title')+"</div>";
         html += "</div>";
         return html;
         },
         beforeHTML: function() {return ""; /*not needed just show it as example*/ },
         afterHTML: function() {return "<div id='infopanel' ></div>"}
         });
         }
         );
         //  Scroll Nav  //
         jQuery('body').onePageNav({
         filter: ':not(.external)',
         begin: function() {
         },
         });
      </script>
      <script type="text/javascript" charset="utf-8" src="/wp-content/themes/zab-ingridients/assets/callme/js/callme.js"></script>
      <script src="/wp-content/themes/zab-ingridients/assets/js/remodal.min.js"></script>
      <script src="/wp-content/themes/zab-ingridients/assets/js/wow.min.js"></script>
      <script>
         new WOW().init();
      </script>
    <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter44482891 = new Ya.Metrika({ id:44482891, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> 
      <noscript>
         <div><img src="/wp-content/themes/zab-ingridients/assets/watch/44482891" style="position:absolute; left:-9999px;" alt=""></div>
      </noscript>
      <?php wp_footer(); ?>
      
     
   </body>
</html>