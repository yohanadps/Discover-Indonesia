$(document).ready(function() {
    $(".side-bar-item").mouseover(function()
    {
        $(this).animate({left: '90%'}, "fast");
    });
    $(".side-bar-item").mouseleave(function()
    {
        $(this).animate({left: '0%'}, "fast");
    });
});