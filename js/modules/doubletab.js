var limited = $('ul'),
    doubleTabGo = function(e,m){
        var t = $(e.target); 
        if ( t.next('.sub-menu').length && !t.parents('li').hasClass('go') && $(window).width() < 768 ){
            e.preventDefault(); 
            m.find('.go').removeClass('go'); 
            t.parents('li').addClass('go');
        }
    };
	
	limited.each(function(){
        var menu = $(this);
        menu.on({
            touchend : function(e){
                doubleTabGo(e,menu);
            },
            click : function(e){
                doubleTabGo(e,menu);
            },
        }); 
    
    });