function jshtml(tagname,attributes,content){
    var ret = '<' + tagname,
        lineBreaks = false;
    
    if (attributes.lineBreaks === true){
        lineBreaks = true;
    }
    
    for (var k in attributes){
        if (attributes.hasOwnProperty(k) && k !== 'lineBreaks') {
            ret += ' '+ k + '="' +attributes[k]+ '"';   
        }
    }
    
    if(typeof content !== 'undefined'){
    
        if ($.isArray(content)){
            ret +=  '>';
            
            content.forEach(function(e){
                ret += '\n' + e;        
            });
            
            ret += '\n</' + tagname + '>';;
        }
        
        else if (lineBreaks){ret += '>' + content.replace(/(?:\r\n|\r|\n)/g, '<br />') + '</' + tagname + '>';}
        
        else{ ret += '>' + content + '</' + tagname + '>';}
    }

    else{ ret += '/>';}
    
    return ret;
};