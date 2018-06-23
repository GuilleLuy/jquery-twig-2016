  var $document = $(document),
    $punto = $('#punto'),
    $header_home = $('#header_home'),
    $pst = $('<span class="che" id="pst">pst..</span> <span class="che" id="aca">< '+ $aca +'</span> <span class="che" id="apalalala">!</span>')
  ;

  $pst.appendTo($header_home);

  function PuntoFn() {
    window.location.href = '/';
  }

 $punto
  .one('mouseover', function() {
    PuntoFn();
  });
    