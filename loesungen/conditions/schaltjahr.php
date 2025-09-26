<?php
# Schaltjahres-Berechnung
# Eingabe eines Jahres -> Ausgabe Schaltjahr, kein Schaltjahr
# Laut Kalender hat ein Jahr 365 Tage. Die Erde braucht aber 365 Tage, 5 Stunden, 48 Minuten und 45 Sekunden, um die Sonne zu umrunden. Der Schalttag gleicht diese Differenz aus – allerdings nicht ganz, dazu sind die Zahlen zu unrund. Denn die überzähligen Stunden, Minuten und Sekunden addieren sich nach vier Jahren zu etwa 23 Stunden und 11 Minuten – also keinem ganzen Tag.
# Im Jahr 1582 veranlasste Papst Gregor eine Kalenderreform. Seitdem gilt der Gregorianische Kalender mit den folgenden Regeln zur Schaltjahresberechnung:
#
# Bedingung 1:
# Ist eine Jahreszahl ganzzahlig durch 4 teilbar, dann ist das Jahr ein Schaltjahr. Testwerte: 1720, 1972
//# und 1980 waren Schaltjahre.
//$jahr = 1721;
//if ($jahr % 4 == 0){
//    echo 'Schaltjahr';
//}else{
//    echo 'kein schaltjahr';
//}


# Bedingung 2:
# Ausnahme zu den Jahreszahlen, die der Bedingung 1 genügen, sind alle Jahreszahlen, die nach Bedingung 1
# ein Schaltjahr sind, aber deren Jahreszahl ganzzahlig durch 100 teilbar ist.
# Testwerte: 1700, 1800 und 1900 oder ferner 2100 sind keine Schaltjahre.
//$jahr = 1700;
//if ($jahr % 4 == 0){
//    if ($jahr % 100 == 0){
//        echo 'kein schaltjahr';
//    }else{
//        echo 'Schaltjahr';
//    }
//}else{
//    echo 'kein schaltjahr';
//}
# Bedingung 3:
# Ausnahme zu den Jahreszahlen, die der Bedingung 2 genügen, sind alle Jahreszahlen, die nach Bedingung 2
# kein Schaltjahr sind, aber deren Jahreszahl ganzzahlig durch 400 teilbar.
# Testwerte: 1600 und 2000 waren Schaltjahre.
$year = 1582;



if ($year % 400 == 0) {
    echo $year . ' ist auch ein Schaltjahr.';
} elseif ($year % 100 == 0) {
    echo $year . ' ist kein Schaltjahr.';
} elseif ($year % 4 == 0) {
    echo $year . ' ist ein Schaltjahr.';
}else{
    echo 'keins';
}
$jahr = 1980;
$schaltjahr = "false";

if($jahr > 1582){
    if($jahr%4 == 0){
        $schaltjahr = "true";
        if($jahr%100 == 0){
            $schaltjahr = "false";
            if($jahr%400 == 0){
                $schaltjahr = "true";
            }
        }
    }
}


$jahr = 1700;
if (false) {
    $ist_schaltjahr = "$jahr ist ein Schaltjahr";
}
else {
    $ist_schaltjahr = "$jahr ist kein Schaltjahr";
}