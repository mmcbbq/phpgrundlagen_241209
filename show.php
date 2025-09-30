<?php



function changearry(&$arr)
{
    $arr[0]='change';
}

$arr = ['eins','zwei'];

changearry($arr);

var_dump($arr);

