var prodSearch = {
    
    titles : {},
    data : {},
    
    substringMatcher : function(strs,q) {
        var matches, substringRegex;
        matches = [];
        substrRegex = new RegExp(q, 'i');
        $.each(strs, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(i);
            }
        });
        return matches;
    },
    
    fetchProducts : function(complete){
        $.ajax({
            url : ajaxURL,
            type : 'POST',
            data : 'action=fetch-products',
            dataType : 'json',
            success : function(response){
                if (response.data){
                    prodSearch.data = response.data;
                    prodSearch.titles = response.titles;
                } 
                if(typeof complete === 'function'){
                    complete(response);
                }
            },
        });
    },
    
    makeNode : function(id,term){
        var data = prodSearch.data[id],
            
            img = jshtml('img',{src: data.img}),
            imgContainer = jshtml('div',{class : 'result-img'},[img]),
            
            header = jshtml('h3',{class: 'result-title',} , prodSearch.strHiglight(data.title, term)),
            desc = jshtml('div',{class: 'result-desc'},prodSearch.strHiglight(data.desc, term));
            
            vars = '';
            data.vars.forEach(function(i){
                vars += jshtml('span',{class: 'result-variation'},i);
            });
            
            var footer = jshtml('footer',{class: 'result-footer'},vars),
            textContainer = jshtml('div',{class: 'result-text'}, [header,desc,footer]),
            
            downloadData = jshtml('div',{class: 'download-link download-data','data-href' : data.downloads.data },'Hent Datablad'),
            downloadApprove = jshtml('div',{class: 'download-link download-approve', 'data-href' : data.downloads.approve},'Hent Godkendelser'),
                
            linksContainer = jshtml('div',{class: 'result-links'},[downloadData,downloadApprove]),
            
            containerInner = jshtml('div',{class: 'inner'}, [imgContainer, textContainer, linksContainer]),
            container = jshtml('a', {class: 'result result-'+id, href: data.permalink} , [containerInner] );
        
        return container;
    },
    
    strHiglight : function(str,hi){
        var substrRegex = new RegExp(hi,'i'),
            ret = str;
        if (substrRegex.test(str)) {
            var ret = str.replace(substrRegex,jshtml( 'span', {class: 'hilight'}, String(str.match(substrRegex))));
        }
        return ret;
    },
    
    keyup : function(){
        if(!$('body').hasClass('is-customizer')){$('#product-search-form input[name="s"]').focus()}
        $('#product-search-form input[name="s"]').on({
            
            keydown : function(e){
                
                if (e.keyCode === 9 && $('.search-results-container .result').length){
                    e.preventDefault();
                    $('.search-results-container .result:first-child').focus();

                }
                
            },
            
            keyup : function(e){
                var content = $(this).val(),
                    resultContainer = $('.search-results-container');
                if(content.length > 2){
                    prodSearch.spawnResults(content,resultContainer);
                }

            }
        });    
    },
    
    spawnResults : function(content,resultContainer){
        
        if(!$('.hero-banner').hasClass('search-mode')){
            $('.hero-banner').addClass('search-mode');
        }

        resultContainer.empty();

        var t = 0,
            maxRes = 10,
            incs = [];

        // Søg på titler
        var titleMatches = prodSearch.substringMatcher(prodSearch.titles,content);
        titleMatches.forEach(function(i){
            t ++;
            if(t < maxRes && incs.indexOf(i) === -1){
                incs.push(parseInt(i));
                resultContainer.append(prodSearch.makeNode(i,content));
            }
        });
        
        // Søg på indhold
        var descriptions = [];
        for (var prop in prodSearch.data) {
            if( prodSearch.data.hasOwnProperty( prop ) ) {
                descriptions[prop] = prodSearch.data[prop].desc;
            } 
        }
        
        var descMatches = prodSearch.substringMatcher(descriptions,content);
        descMatches.forEach(function(i){
            t ++;
            if(t < maxRes && incs.indexOf(i) === -1){
                incs.push(parseInt(i));
                resultContainer.append(prodSearch.makeNode(i,content));
            }
        });
        
        // Søg på langt indhold
        descriptions = [];
        for (var prop in prodSearch.data) {
            if( prodSearch.data.hasOwnProperty( prop ) ) {
                descriptions[prop] = prodSearch.data[prop].long_desc;
            } 
        }
        
        descMatches = prodSearch.substringMatcher(descriptions,content);
        descMatches.forEach(function(i){
            t ++;
            if(t < maxRes && incs.indexOf(i) === -1){
                incs.push(parseInt(i));
                resultContainer.append(prodSearch.makeNode(i,content));
            }
        });
        
        
        // Afslut med en ingen resultater - box, hvis t = 0;
        if(t === 0){
            
            var span = jshtml('span',{},'Din søgning på "'+ content + '" gav ingen resultater.');
            resultContainer.append(jshtml('div',{class: 'search-no-results'},[span]));
        }
        
    },
}

// Do all this on load
$(function(){
    
    if($('#product-search-form').length){
        
        prodSearch.fetchProducts(function(){
            
            if(!is_touch_device()){
                prodSearch.keyup();
            }
            
            if($('input[name=s]').val().length > 2){
                prodSearch.spawnResults($('input[name=s]').val(),$('.search-results-container'));
                $('input[name=s]').putCursorAtEnd();
            }
            
            $('.submit-search').click(function(e){
                e.preventDefault();
                var content = $('input[name=s]').val(),
                    res = $('.search-results-container');
                
                if(content.length > 2 ){
                    prodSearch.spawnResults(content,res);
                }
            });
        });
    }
    
    else{
        
        $('.sidebar-submit-search').click(function(e){
            e.preventDefault();
            var content = $('input[name=s]').val(),
                form = $(this).parents('form'),
                location = form.attr('action');
            if(content.length > 2){
                window.location.href = location + '?s=' + encodeURI(content);
            }
        });
        
    }
});