<?php

$json1='["h\u00e0 n\u1ed9i","nam \u0111\u1ecbnh","h\u1ed3 ch\u00ed minh"]';
$json2='{"name":"nguy\u1ec5n van trung","age":"23","location":" nam \u0111\u1ecbnh"}';

$conver1=json_decode($json1);
$conver2=json_decode($json2);

echo "<pre>";
print_r($conver1);
echo "</pre>";

echo "<pre>";
print_r($conver2);
echo "</pre>";

