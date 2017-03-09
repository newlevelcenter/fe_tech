(function( $ ){

  $.fn.slider = function( name ) {  
    $(this).css('margin', '0 auto').css('width','200px').css('height','200px').css('overflow','hidden').css('position','relative');

     $(this).css(
        {"position" : "absolute",
         "top":'0', "left": '20px'}).hide().eq(0).show();
    $(this).after('<div id =l_arrow><</div>').after('<div id =r_arrow>></div>');
    $("#l_arrow").css({"position" : "absolute","top":'50px', "left": '0',"cursor":'pointer'})
    $("#r_arrow").css({"position" : "absolute","top":'50px', "left": '230px',"cursor":'pointer'})
    var n_class = $(this).attr("class");
    
    $("."+n_class+" div").each(function(i) {
      var n = i*200;
      $(this).css({'float': 'left','position':'absolute','top':'0px','left':''+n+'px'});
    });
    $("#l_arrow").click(function(){
         $("."+n_class+" div").each(function(i) {
          var left = parseInt($(this).css("left"));
          left -= 200;
          if (left<0) {left = 400;}
        if (left == 200);
        //$(this).css({'left':''+left+'px'});
        
        $(this).animate({'left':''+left+'px'},2000);
    });
   })
    
      $("#r_arrow").click(function(){
         $("."+n_class+" div").each(function(i) {
          var left = parseInt($(this).css("left"));
          left += 200;
          if (left>400) {left = 0;}
        //if (left == 200);
        //$(this).css({'left':''+left+'px'});
        
        $(this).animate({'left':''+left+'px'},2000);
    });
   })

  };
})( jQuery );