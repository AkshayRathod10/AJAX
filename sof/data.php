<?php

$str = $_GET['q'];

echo $str;

$input = preg_quote('bl', '~'); // don't forget to quote input string!
$data = array('orange', 'blue', 'green', 'red', 'pink', 'brown', 'black');

$result = preg_grep('~' . $input . '~', $data);

print_r($result);


?>