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

      $("#commentform input").addClass("required");
      $("#commentform textarea").addClass("required");

          $('form :input').blur(function(){
             var $parent = $(this).parent();
             $parent.find(".formtips").remove();
             //验证邮件
             if( $(this).is('#tel') ){
                if( this.value=="" || ( this.value!="" && !/^1[3|4|5|8][0-9]\d{8}$/.test(this.value) ) ){
                      var errorMsg = '请输入正确的联系电话.';
                      $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
                      $(this).removeClass("uk-form-success");
                      $(this).addClass("uk-form-danger");

                }else{
                      var okMsg = '输入正确.';
                     // $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
                      $(this).removeClass("uk-form-danger");
                      $(this).addClass("uk-form-success");

                }
             }
             if( $(this).is('#comment') ){
                if( this.value==""){
                      var errorMsg = '请输入留言内容.';
                      $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
                      $(this).removeClass("uk-form-success");
                      $(this).addClass("uk-form-danger");

                }else{
                      var okMsg = '请输入留言内容.';
                     // $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
                      $(this).removeClass("uk-form-danger");
                      $(this).addClass("uk-form-success");

                }
             }
        }).keyup(function(){
          $(this).triggerHandler("blur");
        }).focus(function(){
          $(this).triggerHandler("blur");
        });//end blur

        //提交，最终验证。
         $('.submit').click(function(){
                $("form :input.required").trigger('blur');
                var numError = $('form .onError').length;
                if(numError){
                    return false;
                }
                alert("注册成功,密码已发到你的邮箱,请查收.");
         });

        //重置
         $('#res').click(function(){
                $(".formtips").remove();
         });
         $('.bttrlazyloading').bttrlazyloading();
} )(window.jQuery);
