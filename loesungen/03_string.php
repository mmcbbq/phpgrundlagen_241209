<?php


# Erstelle einen Variable my_var und weise ihr den wert "Hallo Welt" zu
$my_var = 'Hallo Welt';
# Erstelle eine Variable erster und weise ihr den Ersten Buchstaben des Strings my_var zu
$erster = $my_var[0];
echo $erster;
# Erstelle eine Variable letzter und weise ihr den letzten Buchstaben des Strings my_var zu
$letzter = $my_var[strlen($my_var)-1];
echo $letzter;
# Schneide aus dem String in my_var das Wort Hallo aus und weise es der Variable hallo zu.
$hallo = substr($my_var,0,5);
echo $hallo;
# Schneide aus dem String in my_var das Wort Welt aus und weise es der Variable welt zu.
$welt = substr($my_var,-4);
$welt_replace = str_replace('Hallo ','',$my_var);
$welt_explode = explode(' ',$my_var)[1];
echo $welt;
echo $welt_replace;
echo $welt_explode;
# Tausche den Wert der Variablen hallo und welt
$zwischen = $welt;
$welt = $hallo;
$hallo = $zwischen;

[$hallo, $welt] = [$welt, $hallo];

$alphabet = "abcdefghijklmnopqrstuvwxyz ";

# Erstelle eine Variable name und weise ihr den Vor- und Nachnamen bob studehi zu.
# Benutze dafür nur die Buchstaben aus der Variable alphabet
$char =str_split($alphabet);
print_r($char);
$name = $alphabet[1].$alphabet[14].$alphabet[1].$alphabet[-1].substr($alphabet,-9,3).str_replace('fg','',substr($alphabet,3,6));
echo $name;

# Ändere mithilfe einer eingebauten Methode den Anfangsbuchstaben des Vor- und Nachnamens
$name = ucwords($name);
echo $name;
# Printe den Nachnahmen mit Slicen der name Variable
echo explode(' ',$name)[1];
# Erstelle eine Variable name_9999, in der dein Name 9999-mal gespeichert ist
$name_9999 = str_repeat($name,9999);
echo $name_9999;
