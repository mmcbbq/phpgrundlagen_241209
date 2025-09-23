<?php
# Ein string ist eine Sequenz von Zeichen
# Strings werden mit ' oder " umschlossen

$my_string = "Hallo";
$my_string2 = 'Hallo';

// In " ist es moeglich Variable und spezielle Zeichen zu benutzen

$name = "Rolf";
$doppel = "Hallo $name";
$einfach = 'Hallo $name';
echo $doppel;
echo "\n";
echo $einfach;
echo "\n";
# spezielle Zeichen leitet man mit einem \ ein

#\n -> newline
echo "hallo\n$name";
echo "\n";
# \t tabulator
echo "hallo\t$name";
echo "\n";
# \\ ume ein \ zu machen
echo "c:\\user\\$name";
echo "\n";
# \" um eine " in einem string dazustellen
echo "der \"$name\"";
echo "\n";

echo strlen($name);
echo "\n";
echo  str_word_count('Hallo Welt');

//Strings Verkettten
$vorname = "Jens";
$nachname = "Jenson";

// String kann man mit '.' verbinden
$name = $vorname . $nachname;
echo "\n";
echo $name; // ohne Leerzeichen
$name = $vorname . " ". $nachname;
echo "\n";
echo $name; // mit Leerzeichen
// bessere Methode ist die Variablen in einem " String zu schreiben
$name = "$vorname $nachname";
echo "\n";
echo $name;
//https://www.w3schools.com/php/php_ref_string.asp
//strtoupper();
//strtolower();

$name = 'Peter Pan';
echo "\n";
echo str_replace('Peter','Max',$name);
echo "\n";
//strrev();
//$anme = '    Peter    Pan';
//echo trim($anme);
$domain = 'www.test.de';
var_dump(explode('.',$domain));

// String Slicing
$a = "php ist super toll";


print "\n";
echo substr($a,0,3); // Starte beim ersten Buchstaben und gehe 3 Buchstaben weiter
print "\n";
echo substr($a,8); // ohne den lenght parameter macht er es bis zum ende
print "\n";
echo substr($a,-5, 5); // bei negativen geht es am ende los
print "\n";
echo substr($a,8, -5); // vom 8 bis zum index -5

