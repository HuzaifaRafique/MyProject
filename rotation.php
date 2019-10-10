<?php
 



 function arr_rotate(&$array,$rotate_count) {
        for ($i = 0; $i < $rotate_count; $i++) {
            array_push($array, array_shift($array));
        }
    }
	 $xarr = array('1','2','3','4','5');
    arr_rotate($xarr, 4);
   echo implode($xarr);


?>