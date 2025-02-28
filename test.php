<?php
ini_set('output_buffering', 0);
ini_set('implicit_flush', 1);



for ($i = 0; $i <= 3; $i++) {
   sleep(1);//I have some code which takes about 3 seconds to execute
   echo "<br>This is line " . $i . flush();

}

?>
