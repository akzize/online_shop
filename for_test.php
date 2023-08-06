<?php

use function Symfony\Component\Translation\t;

$n = 2111;
//$t = "$n";
//$t = explode('', $t);
//var_dump($t);

//echo count($t);
$t = str_split("$n");
//substr
//foreach ($t as $item) {
//    echo $item . PHP_EOL;
//}
//

echo count($t);
//echo $t[0];
//for ($i = 0; $i < count($t) - 1; ++$i) {
//    echo $t[$i] . PHP_EOL;
//
//}

echo array_search('1', $t);