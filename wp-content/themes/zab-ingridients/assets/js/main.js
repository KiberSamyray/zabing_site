
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
