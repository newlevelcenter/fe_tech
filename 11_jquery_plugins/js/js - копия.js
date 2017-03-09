(function( $ ){

  $.fn.slider = function( name ) {  
        $(this).css('margin', '0 auto').css('width','200px').css('height','200px').css('overflow','hidden');
    return this.each(function() {
      $(this).css('float', 'left');
      
    });

  };
})( jQuery );