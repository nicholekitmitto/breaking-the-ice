var originalNavClasses;

function toggleNav() {
    var elem = document.getElementById('navigation_list');
    var classes = elem.className;
    if (originalNavClasses === undefined) {
        originalNavClasses = classes;
    }
    elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}

function scrollFade() {

var primaryTitle = document.querySelector('primary_title');
$(window).scroll(function(){
   if($(window).scrollTop() <10 ){
         primaryTitle.stop(true,true).fadeIn("slow");
   } else {
         primaryTitle.stop(true,true).fadeOut("slow");
   }
})
}

$('.nav_dropdown').hover(
   function(){ $('#changeableBorder').addClass('current') },
   function(){ $('#changeableBorder').removeClass('current') }

)//Solution for adding current class to parent element when hovering on child found from http://css-tricks.com/snippets/jquery/addingremoving-class-on-hover/

var myElement = document.querySelector("header");
var headroom  = new Headroom(myElement, {
  "offset": 150,
  "tolerance": 5,
  "classes": {
    "initial": "animated",
    "pinned": "slideDown",
    "unpinned": "slideUp"
  }
});

headroom.init();
