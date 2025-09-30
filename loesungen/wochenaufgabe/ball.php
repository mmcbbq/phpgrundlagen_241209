<?php
//
//
//$sort_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//$kugel = 2;
//$suche = 9;
//
////echo $sort_array[4.9];
//
//$links = 0;
//$rechts = count($sort_array) - 1;
//$mitte = ($rechts - $links) / 2;
//
//
//echo 'start' . $mitte . "\n";
//$prufe = $sort_array[$mitte];
//
//
//echo 'untersuche' . $prufe . "\n";
//if ($suche < $prufe) {
//    echo 'kaputt';
//    for ($i = $links; $i <= $rechts; $i++) {
//        if ($sort_array[$i] == $suche) {
//            echo 'Das Stockwerk ist ' . $sort_array[$i - 1];
//        }
//    }
//
//} elseif ($suche >= $prufe) {
////    $verbleibende_stockwerke = $start + ($start/2);
//    echo 'ok';
//    $links = $mitte + 1;
//    $mitte = ((($rechts - $mitte + 1) / 2) + $mitte + 1);
//    $prufe = $sort_array[$mitte];
//    if ($suche < $prufe) {
//        echo 'kaputt';
//        for ($i = $links; $i <= $rechts; $i++) {
//            if ($sort_array[$i] == $suche) {
//                echo 'Das Stockwerk ist ' . $sort_array[$i - 1];
//            }
//        }
//    }
//
//}


$sort_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$kugel = 2;
$suche = 10;

//echo $sort_array[4.9];

$links = 0;
$rechts = count($sort_array) - 1;
$mitte = floor(($rechts - $links) / 2);
$prufe = $sort_array[$mitte];

while (true) {
    echo 'rechts' . $rechts . "\n";
    echo 'links' . $links . "\n";
    if ($suche == $prufe) {
        echo "gefunden auf dem index $mitte";
        break;
    } elseif ($suche < $prufe) {
        $rechts = $mitte - 1;
        $mitte = floor(($rechts - $links) / 2);
        $prufe = $sort_array[$mitte];
    } elseif ($suche > $prufe) {
        $links = $mitte + 1;
        $mitte = floor(((($rechts - ($mitte + 1)) / 2) + $mitte + 1));
//        $mitte = floor($rechts - $links);
        $prufe = $sort_array[$mitte];

    }

    if ($rechts < $links) {
        echo "nicht gefunden";
        break;
    }

}