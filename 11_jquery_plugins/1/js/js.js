(function( $ ){

  $.fn.myPlugin = function() {
  
    // нет необходимости писать $(this), так как "this" - это уже объект jQuery
    // выражение $(this) будет эквивалентно $($('#element'));
      
    this.fadeIn('normal', function(){

      // тут "this" - это элемент дерева DOM

    });

  };
})( jQuery );