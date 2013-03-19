/*
 * main.js
 *
 * Copyright (C) 2010 Antoine Mercadal <antoine.mercadal@inframonde.eu>
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


function addAnchor(name)
{
    $("#slider-button-" + name).click(function() {
        $('html, body').animate({
         scrollTop: $("#slider-target-" + name).offset().top - 150
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

function replaceTopLinkWithScroll()
{
    var topLink = $(".navigation .link-container .current");

    topLink.removeAttr("href");
    topLink.css("cursor", "pointer");
    topLink.click(function() {
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
    addAnchor("networks");

    $("img.lazy").lazyload({
        effect : "fadeIn",
        threshold : 0
    });

    addScrollTop();
    replaceTopLinkWithScroll();

    $(".social-buttons").mouseover(function(){
        $(this).removeClass("slow-fade-out");
    });

    $('.slider').liteSlider({
    content : '.sliderContent', // The sliding content selector. Can be a list also. eg:li
    width : 1024,            // Width of the slider
    height : 410,           // Height of the slider
    autoplay : false,        // Autoplay the slider. Values, true & false
    delay : 10,          // Transition Delay. Default 3s
    buttonsClass : 'buttons',   // Button's class
    activeClass : 'active',     // Active class
    controlBt : '.control',     // Control button selector
    playText : 'Play',      // Play text
    pauseText : 'Stop'      // Stop text
});

});
