<?php
//Put this line at the very end of the php file and see how long it took to load the whole page
echo "<pre>This page took ".number_format((microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 2, '.', '') ." seconds to load!</pre>";

?>
