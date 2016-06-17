var checkSuccess = function(target){

    if(target.val() === ''){target.removeClass('success').next('label').removeClass('stayup');}

    else if(target.is('input[type="checkbox"], input[type="radio"]')){}

    else{target.addClass('success').next('label').addClass('stayup');}

}

var formHandleResponse = function(response,form){

    form.removeClass('loading');
    
    $.event.trigger({
        type : "formReturn",
        response : response,
        target : form,
    });

}

var validateForm = function(form){

    var ready = true;

    form.find('input, textarea').each(function(){

        if($(this).hasClass('error')){
            ready = false;
        }

		if($(this).is(':required') && $(this).val() === '' || $(this).hasClass('required') && $(this).val() === ''){
			$(this).removeClass('success').addClass('error');
			ready = false;
		}

    });

    if (ready){
        return true;
    }
    else{
        return false
    }
}

var validateEmail = function(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

var formJsInit = function(){

    $('form input, form textarea').each(function(){
        checkSuccess($(this));
    });

    autosize($('form textarea:not(.no-autosize)'));

    // Check for allerede udfyldt felter ved sideload
    $('form input, form textarea').each(function(){
        var target = $(this);
        checkSuccess(target);
    });

    // Kosmetisk opdatering ved blur
    $('form input, form textarea').off().on('blur',function(e){
        var target = $(e.target);

        // Fjern error
        target.removeClass('error');

        // Check om feltet er tomt
        checkSuccess(target);

        if(target.is('input[type="email"]') && target.val() !== ''){

            if(!validateEmail(target.val())){

                target.addClass('error');
            }


        }

    });


    $('form').off().on({

        keyup : function(e){

            var target = $(e.target);

            // Fjern error og success
            target.removeClass('error').removeClass('success');

            if(target.is('input[type="number"]')){

                var value = target.val().replace(/[^0-9]/g, '');

                target.val(value);

            }
            
            if(target.is('input[data-restrict="true"]')){
                
                var value = target.val().replace(/[^0-9a-zA-ZÆØÅæøå ]/g, '');

                target.val(value);
                
            }

        },

        click : function(e){
            var t = $(e.target);

            if(t.is('.submit')){
                e.preventDefault();


                var form = t.parents('form'),
                    action = form.attr('action'),
                    formData = form.serialize();

                if(validateForm(form) && !form.hasClass('loading') && !form.hasClass('success')){

                    form.addClass('loading');

                    $.ajax({
                        url : action,
                        type : 'POST',
                        data : formData,
                        dataType : 'json',
                        success : function(response){
                            formHandleResponse(response,form);
                        },
                    });

                }
            }
        }
     });

}

$(function(){

    formJsInit();

});
