$(function(){if($('.fixed-aside').length){

    var lastScrollTop = 0,
        fancyScroll = $('.fixed-aside'),
        content = $('.single-content, .archive-content');

    
    
    $(window).on('scroll', function () {

        if(content.offset().top + content.innerHeight() < $(window).scrollTop() + $(window).height()){
            fancyScroll.addClass('bottom');
        }
        
        else{
            
            fancyScroll.removeClass('bottom');
        }

        var st = $(this).scrollTop(),
            diff = st - lastScrollTop,
            scrollStop = $(window).innerHeight() + $(window).scrollTop(),
            fancyHeight = fancyScroll.offset().top + fancyScroll.innerHeight(),
            fancyScrollAmount = fancyScroll.scrollTop() + diff;

        if(fancyScroll.hasClass('bottom')){
        }
        
		else if($(window).width() > 768 && !fancyScroll.hasClass('bottom')){
            fancyScroll.scrollTop(fancyScrollAmount);
		}

		else{
			fancyScroll.scrollTop(0);
		}

		lastScrollTop = st;
    });
    
    $(window).load(function(){
        
        if($('.site-content').innerHeight() < $('.fixed-aside').innerHeight() && $(window).width() > 960){
        
            $('.site-content').css({
                height: $('.fixed-aside').innerHeight(),
            });

        }
        
    });

}});
