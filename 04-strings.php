<?php

//contatenação

$string1 = "Schoolof of Net";
$string2 = "Iniciando com PHP";

echo $string1 . $string2;
echo "\n";
echo "Rafael" . "Trevisani";
echo "\n";
echo $string1 . ' ' . $string2;

$string3 = $string1 . ' ' . $string2;

$string4 = "$string1 $string2"; //interpolação obrigatório aspas duplas

echo "\n";
echo $string4;

$string5 = '$string1 $string2';

echo "\n";
echo $string5;