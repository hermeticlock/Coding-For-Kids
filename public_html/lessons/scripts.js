$( document ).ready(function() {



  $('#triggerbtn').click(function(){
    $('.contactarea').css("display", "block");
    $('.arrow').css("display", "block");
  })

  $('.logo').draggable({revert: true, scroll: false});

/*  $('.har').hover(
    function(){ $(this).addClass('animated flash') },
       function(){ $(this).removeClass('animated flash') }
  )*/

});
