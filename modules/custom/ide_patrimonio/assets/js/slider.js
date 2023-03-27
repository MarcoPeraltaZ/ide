// Can also be used with $(document).ready()
(function ($) {
  $(document).ready( function (){
    $('.flexslider').flexslider({
      animation: "slide",
      animationSpeed: 600,
      animationLoop: true,
      itemWidth: 338,
      itemMargin: 18,
      minItems: 3,
      maxItems: 0,
      touch: true,
      controlNav: false,
      directionNav: true,
      keyboard: true,
      multipleKeyboard: false,
      mousewheel: true,
      customDirectionNav: $(".custom-navigation a")
    });
  });
  $(document).ready( function (){
    $('.flexslider-estadisticas').flexslider({
      animation: "slide",
      animationSpeed: 600,
      animationLoop: true,
      itemWidth: 338,
      itemMargin: 10,
      minItems: 4,
      maxItems: 0,
      touch: true,
      controlNav: false,
      directionNav: true,
      keyboard: true,
      multipleKeyboard: false,
      mousewheel: true,
      slideshow: false,
      customDirectionNav: $(".custom-navigation a")
    });
  });
}(jQuery));
