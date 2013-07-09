$('document').ready(function() {
    $('.accordion-toggle').click(function() {
        $(this).attr("class","icon-white icon_collapse icon-chevron-right icon-chevron-down");
    });
    
     $('.accordion-toggle collapsed').click(function() {
        $(this).attr("class","icon-white icon_collapse icon-chevron-right");
    });
});