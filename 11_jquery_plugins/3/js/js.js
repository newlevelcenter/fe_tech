(function( $ ){

  $.fn.lockDimensions = function( type ) {  

    return this.each(function() {

      var $this = $(this);

      if ( !type || type == 'width' ) {
        $this.width( $this.height() );
      }

      if ( !type || type == 'height' ) {
        $this.height( $this.width() );
      }

    });

  };
})( jQuery );