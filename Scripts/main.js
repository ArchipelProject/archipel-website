function addAnchor(name)
{
    $("#slider-button-" + name).click(function() {
        $('html, body').animate({
         scrollTop: $("#slider-target-" + name).offset().top - 20
     }, 500);
    });
}

function addScrollTop()
{
    $(".top-scroller").click(function() {
        $('html, body').animate({
         scrollTop: 0
     }, 500);
    });
}

$(document).ready(function() {

    addAnchor("permissions");
    addAnchor("health");
    addAnchor("definition");
    addAnchor("vnc");
    addAnchor("creation");
    addAnchor("vmcasts");
    addAnchor("controls");

    $("img.lazy").lazyload({
        effect : "fadeIn",
        threshold : 0
    });

    addScrollTop();

    $('.slider').liteSlider({
    content : '.sliderContent', // The sliding content selector. Can be a list also. eg:li
    width : 1024,            // Width of the slider
    height : 410,           // Height of the slider
    autoplay : true,        // Autoplay the slider. Values, true & false
    delay : 10,          // Transition Delay. Default 3s
    buttonsClass : 'buttons',   // Button's class
    activeClass : 'active',     // Active class
    controlBt : '.control',     // Control button selector
    playText : 'Play',      // Play text
    pauseText : 'Stop'      // Stop text
});

});