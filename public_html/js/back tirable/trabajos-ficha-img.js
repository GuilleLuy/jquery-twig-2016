  

// cambia imágenes
$('ul#gallery li a')
  .each(function() {
    var curElem = $(this);
    curElem.attr("data", curElem.attr('href')).removeAttr('href')
  })

  .on('click', function(e) {
    e.preventDefault;
    $('#media').attr({src: $(this).attr('data')});
    $(this).parent().siblings().removeClass('active').addClass('noactive'); 
    $(this).parent().removeClass('noactive').addClass('active'); 

    var img_src = $(this).attr("data");
    var img_alt = $(this).attr("title");
 

    $('#media').fadeOut(10, function(){
        var $cambia = "<img id='media' alt='"+img_alt+"' src='"+img_src+"'/>";
        var $cambia_x = $('#media');
        $cambia_x.replaceWith($cambia);
        $cambia_x.fadeIn("slow");
    })
    
  });


$('ul#gallery li a.img-1')
  .parent().addClass('active')
    .siblings().addClass('noactive');




