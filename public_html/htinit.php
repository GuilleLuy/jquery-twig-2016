<?php

// se oculta al subir
require_once  '../vendor/lessphp/lessc.inc.php';
function autoCompileLess($inputFile, $outputFile) {
  // load the cache
  $cacheFile = $inputFile.".cache";

  if (file_exists($cacheFile)) {
    $cache = unserialize(file_get_contents($cacheFile));
  } else {
    $cache = $inputFile;
  }
  $less = new lessc;
  // comprime:
  $less->setFormatter("compressed");

  $newCache = $less->cachedCompile($cache);
  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
    file_put_contents($cacheFile, serialize($newCache));
    file_put_contents($outputFile, $newCache['compiled']);
  }
}

autoCompileLess( __DIR__ . '/less/_import_diseno.less', __DIR__ . '/css/styles.css');


require_once __DIR__ . '/../init.php';


