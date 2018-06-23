
  $(document).ready(function() { 
    $('.open_sidebar').hide();
    $('.link-'+$trab_12).attr('href', $img_trab_url+'sm/'+$trab_12+'.jpg');
    $('.link-'+$trab_11).attr('href', $img_trab_url+'sm/'+$trab_11+'.jpg');
    $('.link-'+$trab_10).attr('href', $img_trab_url+'sm/'+$trab_10+'.jpg');
    $('.link-'+$trab_9).attr('href', $img_trab_url+'sm/'+$trab_9+'.jpg');
    $('.link-'+$trab_8).attr('href', $img_trab_url+'sm/'+$trab_8+'.jpg');
    $('.link-'+$trab_7).attr('href', $img_trab_url+'sm/'+$trab_7+'.jpg');
    $('.link-'+$trab_6).attr('href', $img_trab_url+'sm/'+$trab_6+'.jpg');
    $('.link-'+$trab_5).attr('href', $img_trab_url+'sm/'+$trab_5+'.jpg');
    $('.link-'+$trab_4).attr('href', $img_trab_url+'sm/'+$trab_4+'.jpg');
    $('.link-'+$trab_3).attr('href', $img_trab_url+'sm/'+$trab_3+'.jpg');
    $('.link-'+$trab_2).attr('href', $img_trab_url+'sm/'+$trab_2+'.jpg');
    $('.link-'+$trab_1).attr('href', $img_trab_url+'sm/'+$trab_1+'.jpg');
  }); // $(document).ready(function()

  // pronto-express
  var $trab_10_video1 = 'spot';
  $('article.'+$trab_10+'')
  .append('<a href="/media/video/trabajos/pronto-express-spot.php" data-fancybox data-type="ajax" class="video '+$trab_10+'" id="'+$trab_10+'-'+$trab_10_video1+'"><img src="'+$vid_path+$trab_10+'-'+$trab_10_video1+'.jpg"></a>');
  // canapina
  var $trab_8_video1 = 'face-1'
  $('article.'+$trab_8+'')
  .append('<a href="/media/video/trabajos/canapina-face-1.php" data-fancybox data-type="ajax" class="video '+$trab_8+'" id="'+$trab_8+'-'+$trab_8_video1+'"><img src="'+$vid_path+$trab_8+'-'+$trab_8_video1+'.jpg""></a>');

  $('.video')
    .prop("volume", 0.05)
  ;



  $close_text
    .on('click', function() {
      $('article h2').hide();
      $open_text.show();
      $footer_nav.css({'min-width':'220px'});
  });

  $open_text
    .on('click', function() {
      $('article h2').show();
     $(this).hide();
     $footer_nav.css({'min-width':'204px'});
  });



  $('article').onScreen({
    doIn: function() {
      var $id = $(this).attr('id');
      var $letra = $id.replace("work_", "");
      var $siguiente =  parseInt($letra) - 1;
      var $anterior =  parseInt($letra) + 1;
      var $ir_siguiente = '#work_' + $siguiente;
      var $ir_anterior = '#work_' + $anterior;
      if($ir_anterior == $trab_no_mas) {
        $('.to_before').addClass('como_hideado')//.hide();
      }else{
        $('.to_before').removeClass('como_hideado')//.show();
      };
      if($ir_siguiente == '#work_0') {
        $('.to_next').addClass('como_hideado');
      }else{
        $('.to_next').removeClass('como_hideado');
      };
      $(this).css({'z-index':'1'}).find('h2').css({'opacity':'1'});
      $to_next.attr('href', $ir_siguiente);     
      $to_before.attr('href', $ir_anterior); 
   },
    doOut: function() {
        $(this).css({'z-index':'1'}).find('h2').css({'opacity':'0'})
    },
  });

