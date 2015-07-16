/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function($) {

        $(".form-group").click(function() {
            $(this).find(":input").focus()
        }),

        $("body").on("focus", ".form-group :input",
        function() {
            $(".form-group").removeClass("focused"),
            $(this).parents(".form-group").addClass("focused")
        }),

        $("body").on("blur", ".form-group :input",
        function() {
            $(this).parents(".form-group").removeClass("focused"),
            $(this).val() ? $(this).closest(".form-group").find("label").addClass("fade") : $(this).closest(".form-group").find("label").removeClass("fade")
        }),

        $(".form-group .checkbox, .form-group .radio").hover(function() {
            $(this).parents(".form-group").addClass("focused")
        },

        function() {
            $(this).parents(".form-group").removeClass("focused")
        }),

       $(function(){
          $(window).scroll(function(){
            if($(window).scrollTop()>100){
              $("#side-bar .gotop").fadeIn();
            }
            else{
              $("#side-bar .gotop").hide();
            }
          });
          $("#side-bar .gotop").click(function(){
            $('html,body').animate({'scrollTop':0},500);
          });
        });

        if ($(".ad_b").length){
          var $slidebannertop = $(".ad_b"),$bannertop = $(".ad_s");
          setTimeout(function(){$bannertop.slideUp(1000);$slidebannertop.slideDown(1000);},2500);
          setTimeout(function(){$slidebannertop.slideUp(1000,function (){$bannertop.slideDown(1000);});},8500);
        }

        $("#owl-example").owlCarousel({
              autoPlay: 5000, //Set AutoPlay to 3 seconds
              items : 4,
              itemsDesktop : [1199,3],
              itemsDesktopSmall : [979,3]

          });
         $("#owl-demo").owlCarousel({
          autoPlay : 3000,
          stopOnHover : true,
          navigation:true,
          paginationSpeed : 1000,
          goToFirstSpeed : 2000,
          singleItem : true,
          autoHeight : true,
          transitionStyle:"fade"
        });
          $("#owl-demo2").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]

        });
       $("img.lazy").lazyload({effect: "fadeIn"});
} )(window.jQuery);
