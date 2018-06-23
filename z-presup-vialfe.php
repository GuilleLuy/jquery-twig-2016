<?php 
include 'inc/start.php';
include 'inc/defines.php';

$titulo = 'Guillermo Luy';
$texto = 'diseño web 3d logo editorial, desarrollo web';
$url_img = 'http://www.luy.com.ar/vialfe/';

include 'inc/meta.php';



?>
<style>
.productos p a { text-transform: capitalize;  }
</style>

<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>


</head>
<?php
// acá viene la frula de facebook (div y js) , y otras mas, etc
?>

<body id='presupuesto'>

<?php include ('inc/header.php'); ?>

    <article class="texto">
      
      <h1>Impresiones para <strong>Vialfe</strong>. </h1>

        <p>Todas las imágenes están en CMYK a tamaño real. Los volantes están a 300 dpi, todo lo demás a 150.</p>
      
      <div class="productos">

        <h2>Banderas: 1.5m x 0.75m</h2>
          <p><a href="<?php echo $url_img ?>bandera-ausa.jpg">Bandera Ausa</a></p>
          <p><a href="<?php echo $url_img ?>bandera-cowdin.jpg">Bandera cowdin</a></p>
          <p><a href="<?php echo $url_img ?>bandera-disd.jpg">Bandera disd</a></p>
          <p><a href="<?php echo $url_img ?>bandera-doosan.jpg">Bandera doosan</a></p>
          <p><a href="<?php echo $url_img ?>bandera-terex.jpg">Bandera terex</a></p>
          <p><a href="<?php echo $url_img ?>bandera-vialfe.jpg">Bandera Vialfe</a></p>


        <h2>Banners: 1.9m x 0.9m</h2>
          <p><a href="<?php echo $url_img ?>banner-ausa.jpg">banner Ausa</a></p>
          <p><a href="<?php echo $url_img ?>banner-disd.jpg">banner disd</a></p>
          <p><a href="<?php echo $url_img ?>banner-doosan.jpg">banner doosan</a></p>
          <p><a href="<?php echo $url_img ?>banner-terex.jpg">banner terex</a></p>


        <h2>Lona: 2m x 1.5m</h2>
          <p><a href="<?php echo $url_img ?>lona-vialfe-cowdin.jpg">Lona Vialfe-Cowdin</a></p>


        <h2>Volantes: A5</h2>
          <p><a href="<?php echo $url_img ?>volante-hammer.jpg">Volante Hammer</a></p>
          <p><a href="<?php echo $url_img ?>volante-vialfe+cowdin.jpg">Volante Vialfe-Cowdin</a></p>




      </div>

      </article>

<?php  include ('inc/footer.php'); 
?>

  </body>
  </html>