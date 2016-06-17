/* Fix meta box bug? */
jQuery(function($){
    
    var jio_meta_bugfix = function(){
        setTimeout(function(){
            var container = $('#product_vars .rwmb-group-wrapper .rwmb-input'),
                group = container.children('.rwmb-clone'),
                length = group.length;

            group.each(function(i){
                var input = $(this).find('input');

                input.each(function(){
                    var oldName = $(this).attr('name'),
                        newName = oldName.replace(/product_var\[([0-9])+/g,'product_var['+i);
                    $(this).attr('name',newName);
                }); 
            });   
        },400);
    }
    
    jio_meta_bugfix();
    $(window).on('click #product_vars .rwmb-button-add-clone',function(){
        jio_meta_bugfix();
    });
});