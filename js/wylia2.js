jQuery(function() {

   // Standout the second word for headings
    jQuery('.page-header > h1, .page-header > h2, [class*="module"] > h1, [class*="module"] > h2, [class*="module"] > h3, [class*="module"] > h4, [class*="module"] > h5, [class*="module"] > h6, [id^="hikashop_"] h1').each(function(){
        var text = jQuery(this).text().split(' ');
        var n = 1;
        var t = 'span';
        if(n>=text.length){
            return;
        }
        text[n] = '<'+t+'>'+text[n]+' </'+t+'>';
        jQuery(this).html( text.join(' ') );
    });
});