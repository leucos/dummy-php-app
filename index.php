<?php

include 'src/DemoApp.php';

$apc = apc_cache_info();

if ($apc) {
  echo "Hits  : " . $apc['num_hits'] . "<br />";
  echo "Misses: " . $apc['num_misses'] . "<br />";
} else {
  echo "APC not enabled"
}
?>
