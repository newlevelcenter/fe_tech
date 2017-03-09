(function( $ ){

  $.fn.maxHeight1 = function() {
  
    var max = 0;
   	//console.log(this);
 
    this.each(function() {
      max = Math.max( max, $(this).height() );
    });

    return max;
  };
})( jQuery );
//создать блок с размером на 100 пикселей больше, чем самый большой блок