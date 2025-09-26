<?php


$zahl1 = $_GET['zahl1'];
$zeichen = $_GET['zeichen'];
$zahl2 = $_GET['zahl2'];


if ($zeichen === '+') {
    echo $zahl1 + $zahl2;
} elseif ($zeichen === '/') {
    if ($zahl2 === '0' or $zahl2 === '-0'){
        echo 'Das kann nur Chuck Norris';
    }else{
        echo $zahl1 / $zahl2;
    }
}else{

}