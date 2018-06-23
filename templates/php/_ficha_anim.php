  <body id='<?php echo $id_trab ?>' class="ficha">
<?php include  PATH_INC . 'header.php'; ?>
       <div class="work">
        <h2><?php echo $categoria; ?></h2>
          <h3><?php echo str_replace('|', ' - ',$titulo) ?></h3>
          <p><?php echo $texto; ?></p>
<?php // inicializo galeria imagenes
$imagenes;
?>        
        <div id='media'>
          <div id="imagen_media">
            <iframe allowfullscreen="allowfullscreen" class="youtube_embed_iframe" data-volume="<?php echo VIDEO_VOL ?>" width='<?php echo VIDEO_ANCH ?>' height="<?php echo VIDEO_ALTO ?>" src="//www.<?php echo $video_url; ?>"></iframe>
          </div>

          <ul id='gallery' class='gallery_media'><?php // si se agrega anim a la web juntar esto ?>  
            <li>
              <a class="fancybox-media" href="http://<?php echo $video_url; ?>">
                <img alt="imagen <?php echo $titulo  . ' anim' ?>" src="/<?php echo $img_gal_url ?>/<?php echo $cliente_url ?>_<?php echo $tipo . '_anim' ?><?php echo THUMB_SIZE ?>.jpg"/>
              </a>
            </li>
  <?php foreach ($imagenes as &$valor) { ?>
            <li>
              <a href="/<?php echo $img_gal_url ?>/<?php echo $cliente_url ?>_<?php echo $tipo . '_' . $valor ?><?php echo BIG_SIZE ?>.jpg">
                <img alt="imagen <?php echo $titulo  . ' ' . $valor ?>" src="/<?php echo $img_gal_url ?>/<?php echo $cliente_url ?>_<?php echo $tipo . '_' . $valor ?><?php echo THUMB_SIZE ?>.jpg"/>
              </a>
            </li>
  <?php } ?>
          </ul>
          
        </div>
      </div>

<?php include PATH_INC . 'footer.php'; ?>

  </body>
  </html>