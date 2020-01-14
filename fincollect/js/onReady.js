// ============= PRELOADER SCRIPT ===================
$(window).load(function() { 
	setTimeout(function() {
        $('#preloader').addClass('hid');
    }, 200); 
    setTimeout(function() {
        $('#preloader').hide();
    }, 800);
});
// ============= END PRELOADER SCRIPT ===================
/*closestchild*/
 
 ;(function($){
  $.fn.closestChild = function(selector) {
    var $children, $results;
    
    $children = this.children();
    
    if ($children.length === 0)
      return $();
  
    $results = $children.filter(selector);
    
    if ($results.length > 0)
      return $results;
    else
      return $children.closestChild(selector);
  };
})(window.jQuery);

/* /. closestchild*/


$(function(){
        var hPanelHide = 36; // В каком положении полосы прокрутки прятать верхнюю панель
        var top_show = 280; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
        var speed = 500; // Скорость прокрутки
    	var $backButton = $('#up');
        
        var tempScrollTop, currentScrollTop = 0;

    	$(window).scroll(function () { // При прокрутке попадаем в эту функцию
    		/* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
    		if ($(this).scrollTop() > top_show) {
    			$backButton.fadeIn();
    		}
    		else {
    			$backButton.fadeOut();
    		}
            

            currentScrollTop = jQuery(window).scrollTop();
        
            if (tempScrollTop < currentScrollTop ){
                if ($(this).scrollTop() > hPanelHide) {
    			$('.header-wrapper').addClass('hPanelHide');
        		}
        		else {
        			$('.header-wrapper').removeClass('hPanelHide');
        		}
            }
            
            else if (tempScrollTop > currentScrollTop ){
                $('.header-wrapper').removeClass('hPanelHide');
            }

            tempScrollTop = currentScrollTop;

            
    	});
        
        
    	$backButton.click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
    		/* Плавная прокрутка наверх */
    		scrollto(0, speed);
    	});
        
        
        

// scrollto
    	window.scrollto = function(destination, speed) {
    		if (typeof speed == 'undefined') {
    			speed = 800;
    		}
    		jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination-60}, speed);
    	};
    	$("a.scrollto").click(function () {
    		var elementClick = $(this).attr("href")
    		var destination = $(elementClick).offset().top;
    		scrollto(destination);
    		return false;
    	});
// end scrollto 




// fancybox
        $('.fancybox').fancybox({
            padding: 0,
            openEffect  : 'fade',
            closeEffect : 'fade',
            nextEffect  : 'none',
            prevEffect  : 'none',
            helpers: {
            overlay: {
              locked: false
            }
            }
        });
        
        $('.fancyboxModal').fancybox({
            autoResize:true,            
            padding: 0,
            openEffect  : 'fade',
            closeEffect : 'fade',
            nextEffect  : 'none',
            prevEffect  : 'none',
            fitToView : false, 
            maxWidth: '100%',
            scrolling : "no",
            helpers: {
            overlay: {
              locked: false
            }
            }
        });
        

// end fancybox


// инициализация плагина jquery.maskedinput.js
        if(typeof $.mask !== "undefined"){
            $.mask.definitions['~']='[+-]';
            $('.tel').mask('+7(999) 999-9999');
        }

// end

        
        

        
// validation
        
        $('.rf').each(function(){
            var item = $(this),
            
            btn = item.find('.btn');
            
            
            function checkInput(){
                item.find('select.required').each(function(){
                    if($(this).val() == ''){
                        
                        // Если поле пустое добавляем класс-указание
                        $(this).parents('.form-group').addClass('error');
                        $(this).parents('.form-group').find('.error-message').show();

                    } else {
                        // Если поле не пустое удаляем класс-указание
                        $(this).parents('.form-group').removeClass('error');
                    }
                });
                
                
                
                
                
                item.find('input[type=text].required').each(function(){
                    if($(this).val() != ''){
                        // Если поле не пустое удаляем класс-указание
                        $(this).removeClass('error');
                    } else {
                        // Если поле пустое добавляем класс-указание
                        $(this).addClass('error');
                        $(this).parent('.form-group').find('.error-message').show();
                        
                    }
                });
                
                
                item.find('input[type=password].required').each(function(){
                    if($(this).val() != ''){
                        // Если поле не пустое удаляем класс-указание
                        $(this).removeClass('error');
                    } else {
                        // Если поле пустое добавляем класс-указание
                        $(this).addClass('error');
                        $(this).parent('.form-group').find('.error-message').show();
                        
                    }
                });
                
                
                if($('.pass1',item).length != 0){
                    var pass01 = item.find('.pass1').val();
                    var pass02 = item.find('.pass2').val();
                    if(pass01 != pass02){
                        $('.pass1, .pass2',item).addClass('error');
                        
                        
                        $('.pass1').parent('.form-group').find('.error-message').show();
                        $('.pass2').parent('.form-group').find('.error-message').show();
                    }
                }
                
                
                
                item.find('textarea.required').each(function(){
                    if($(this).val() != ''){
                        // Если поле не пустое удаляем класс-указание
                        $(this).removeClass('error');
                    } else {
                        // Если поле пустое добавляем класс-указание
                        $(this).addClass('error');
                        $(this).parent('.form-group').find('.error-message').show();
                        
                    }
                });
                
                item.find('input[type=email]').each(function(){
                    var regexp = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i;
                    var $this = $(this);
                    if($this.hasClass('required')){
                        
                        if (regexp.test($this.val())) {
                            $this.removeClass('error');
                        }else {
                            // Если поле пустое добавляем класс-указание
                            $this.addClass('error');
                            $(this).parent('.form-group').find('.error-message').show();
                        }
                    }else{
                        
                        if($this.val() != ''){
                            if (regexp.test($this.val())) {
                                $this.removeClass('error');
                            }else {
                            
                            $this.addClass('error');
                            $(this).parent('.form-group').find('.error-message').show();
                            }
                        }else{
                            $this.removeClass('error');
                        }
                    }
                    
                    
                });
                
                
                item.find('input[type=checkbox].required').each(function(){
                    if($(this).is(':checked')){
                        // Если поле не пустое удаляем класс-указание
                        $(this).removeClass('error');
                    } else {
                        // Если поле пустое добавляем класс-указание
                        $(this).addClass('error');
                        $(this).parent('.form-group').find('.error-message').show();
                    }
                });
                
            
            }

            btn.click(function(){
                checkInput();
                var sizeEmpty = item.find('.error:visible').size();
                if(sizeEmpty > 0){
                    return false;
                } else {
                    // Все хорошо, все заполнено, отправляем форму
                    
                    item.submit();
                    $.fancybox.close();
                }
            });

        });
        
        
        $('.required:not(.pass1, .pass2)').change(function(){
            if($(this).val() != ''){
                $(this).removeClass('error');
                $(this).parents('.form-group').find('.error-message').hide();
            }
            
        });
        
        $('.pass1').change(function(){
            if($(this).val() != ''){
                
                var pass1Val = $('.pass1').val();
                var pass2Val = $(this).parents('.rf').find('.pass2').val();
                
                if(pass1Val == pass2Val){
                    $('.pass1, .pass2').removeClass('error');
                    $('.pass1, .pass2').parents('.form-group').find('.error-message').hide();
                }

            }
            
        });
        
        $('.pass2').change(function(){
            if($(this).val() != ''){
                
                var pass2Val = $('.pass2').val();
                var pass1Val = $(this).parents('.rf').find('.pass1').val();
                
                if(pass1Val == pass2Val){
                    $('.pass1, .pass2').removeClass('error');
                    $('.pass1, .pass2').parents('.form-group').find('.error-message').hide();
                    $('.pass1, .pass2').parents('.form-group').find('.t-tip').tooltip('hide');
                }

            }
            
        });
        
        
        $('select').change(function(){
            if($(this).val() == ''){     
                // Если значение empty
                $(this).parents('.form-group').removeClass('selected');

            } else {
                // Если значение не empty
                $(this).parents('.form-group').addClass('selected');
                $(this).parents('.form-group').removeClass('error');
            }
        });
        
// end validation
        




// Carousels
        
        $('.partners-carousel').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 700,
            fade: false,
            arrows: true,
            dots: false,
            adaptiveHeight: true,
            prevArrow: '<a href="#" class="slick-prev"></a>',
            nextArrow: '<a href="#" class="slick-next"></a>'    
        });
        
        $('.tenders-carousel').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            //autoplay: true,
            autoplaySpeed: 5000,
            speed: 700,
            fade: false,
            arrows: true,
            dots: false,
            adaptiveHeight: true,
            prevArrow: '<a href="#" class="slick-prev"></a>',
            nextArrow: '<a href="#" class="slick-next"></a>'    
        });
        
        
        
        
        
        
        slickVar = {
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplaySpeed: 5000,
            speed: 700,
            fade: false,
            arrows: true,
            dots: false,
            prevArrow: '<a href="#" class="slick-prev"></a>',
            nextArrow: '<a href="#" class="slick-next"></a>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]    
        }
        
        $('.terminal-carousel').slick(slickVar);
        

        
// End Carousels
        
        
        

// tabs
    
          $('ul.tabs').on('click', 'li:not(.current)', function() {
            
            
            $(this)
              .addClass('current').siblings().removeClass('current')
              .closest('div.section').closestChild('div.box').removeClass('visible').eq($(this).index()).addClass('visible');
              
              
                if($(this).parents().hasClass('clients-head')){
                    $('.terminal-carousel').slick('unslick');
                    $('.terminal-carousel').slick(slickVar);
                }
          });
          
          
          
            $('ul.tabs li').click(function(){
                $(this).parent().hide().siblings('.mobile-tab-header').html($(this).html());
                $('.mobile-tab-header').removeClass('active');
            });
          
            $('.mobile-tab-header').click(function(e){
                $(this).toggleClass('active');
                $(this).siblings('.tabs').toggle();
                e.stopPropagation();
            });
        
            
            $('body').click(function(){
                if($('.mobile-tab-header').is(':visible')){
                    $('.tabs').hide();
                    $('.mobile-tab-header').removeClass('active');
                }
            });
    
// end tabs   
        
 
 
 
    
//Chrome Smooth Scroll
        
        var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        
        if(!iOS){
            try {
                $.browserSelector();
                if($("html").hasClass("chrome")) {
                    $.smoothScroll();
                }
            } catch(err) {
        
            };
        }
        
//Chrome Smooth Scroll end        

                 



// проверка на Internet Explorer 6-11
        var isIE = /*@cc_on!@*/false || !!document.documentMode;
            
        
        if(isIE){
            $('body').addClass('ie');
        }
// end
        



// accordeon
        var $thisElement, 
            $thisElementContent,
            $elements,
            $elementsContent;
            
        $('.accordeon .title').click(function(){
            $thisElement = $(this).parent();
            $thisElementContent = $thisElement.find('.element-content');
            $elements = $thisElement.siblings();
            $elementsContent = $elements.find('.element-content');
            
            $elements.removeClass('active');
            $elementsContent.slideUp();
            if(!$thisElement.hasClass('active')){
                $thisElement.addClass('active');
                $thisElementContent.slideDown();
            }else{
                $thisElement.removeClass('active');
                $thisElementContent.slideUp();
            }
            
        });
// accordeon end        
        
        
       
       
   $('.top-menu > ul > li').has('ul').addClass('down');    
// mobile-menu       
       
        $('.mob-menu-btn').click(function(){
            $(this).toggleClass('open');
            $('.header .dropdown').toggleClass('active');
        });
       
       
// end mobile-menu       
  
  
// styler
        if($('.styler').length > 0){
            $('.styler').styler({
                selectSearch: false
            });
        }
        

// end styler  
  
  
  
  
// input file custom

        $('input[type="file"]').on('change', function(){
            
            
            var $this       = $(this),
                $fileblock  = $this.parents('.file-input-box'),
                $infoblock  = $this.parents('.file-input-box').find('.file-input-info'),
                $attachName = $infoblock.find('.attach-name');
                $attachDel  = $infoblock.find('.attach-delete');
                
            if($this.val() !=''){
                
                var filename = this.files[0].name,
                    filesize = this.files[0].size,
                    filetype = this.files[0].type;
                    
                $fileblock.addClass('active');
                $infoblock.addClass('active');    
                $attachName.text(filename);    
            }else{
                $fileblock.removeClass('active');
                $infoblock.removeClass('active');
                $this.val('');
            }
            
            
            
            $attachDel.click(function(){
                $this.val('');
                $fileblock.removeClass('active');
                $infoblock.removeClass('active');
            });
            
            
            
        });

// end input file custom   
  
        
        

// print block


    var html_to_print=$('.for-print').html();
    var iframe=$('<iframe id="print_frame"/>'); // создаем iframe в переменную
    $('body').append(iframe); //добавляем эту переменную с iframe в наш body (в самый конец)
    
    var doc = $('#print_frame')[0].contentDocument || $('#print_frame')[0].contentWindow.document;
    var win = $('#print_frame')[0].contentWindow || $('#print_frame')[0];
    
    doc.getElementsByTagName('body')[0].innerHTML=html_to_print;
    
    
    
    $('.printBtn').click(function(){
        win.print();
        
    });
    
    


//end print block










                
                
});// end ready












    