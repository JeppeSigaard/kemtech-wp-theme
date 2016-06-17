$(window).on('formReturn',function(e){
    var t = $(e.target);
    if(t.is('.contact-form')){
    
        if(e.response.error){

            if (!$('.contact-form .error-msg').length){

                var errorMsg = $('<div class="error-msg"></div>');
                errorMsg.html(e.response.error);
                t.append(errorMsg);

            }
            else{$('.contact-form .error-msg').html(e.response.error).show();}


            setTimeout(function(){
                $('.contact-form .error-msg').fadeOut();
            },4000);
        }

        if(e.response.success){
        
            t.empty().append(e.response.success);
            
            
        }   
    }
});