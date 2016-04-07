$('[data-href]').click(function(e){
    
    var h = $(this).attr('data-href');
    if(h !== ''){
        e.preventDefault();
        window.location.href = h;
    }
});