  // cambia figure/imagen por div/iframe
var img_obj = $("figure");
var iframe_url = $('div#video iframe').attr('src');

$('iframe').attr({id: 'media'});

  $('ul#gallery li a')
    .each(function() {
      var curElem = $(this);
      curElem.attr("data", curElem.attr('href')).removeAttr('href')
    })
    .on('click', function(e) {
      e.preventDefault;
      $('#media').attr({src: $(this).attr('data')});
      $(this).parent().removeClass('noactive').addClass('active').siblings().removeClass('active').addClass('noactive');
      //$(this).parent();
      $("figure").replaceWith("<div id='video'><iframe id='media' src='"+iframe_url+"' /></div>");

    })
    .not('.img-1')
    .on('click', function() {
    var img_src = $(this).attr("data");
    var img_alt = $(this).attr("title");
      $('div#video').replaceWith("<figure><img id='media' alt='"+img_alt+"' src='"+img_src+"'/></figure>");
    });

$('ul#gallery li a.img-1')
  .parent().addClass('active')
    .siblings().addClass('noactive');



