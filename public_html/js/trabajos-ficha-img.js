if ($gallery > 1 ) {

$(function (){

  $('#img_nxt')
    .on('click', function(e) {
      e.preventDefault;
      naveGador();
      $img_src = $img_orig + $img_next;
      $li_a_sig = $('.img-' + $img_next);
      classLiGalleryUl();
      if ( $img_next == $gallery ) {
        $(this).addClass('como_hideado_2');
      }
      if ( $img_next == 2 ) {
        $('#img_bfr').removeClass('como_hideado');
        $img_alt = $('.img-' + $img_next).attr('title');
      }
      replaceImg();
  });
  
  // Click siguiente
  $('#img_bfr')
    .on('click', function(e) {
      e.preventDefault;
      naveGador();
      $img_src = $img_orig + $img_bef;
      $li_a_sig = $('.img-' + $img_bef);
      classLiGalleryUl();
      replaceImg();
      if ( $img_bef == $gallery_limit) {
        $('#img_nxt').removeClass('como_hideado_2');
      }
      if ( $img_bef == 1) {
        $(this).addClass('como_hideado');
      }
  });

  $('ul#gallery li a')
  .on('click', function(e) {
    e.preventDefault;
    $(this).parent().removeClass('noactive').addClass('active').siblings().removeClass('active').addClass('noactive'); 
    $img_src = $(this).attr("data");
    $img_alt = $(this).attr("title");
    $('#media').replaceWith("<img id='media' alt='"+$img_alt+"' src='"+$img_src+"'/>") // difiere del otro
  });

}); // function()


} // if gallery


