<?php
# Eine Variable im allgemeinsten Sinne ist einfach ein Behälter (Container) zur Aufbewahrung von bestimmten Werten.
# Eine Variable wird definiert, indem ich einen $ Zeichen gefolgt von Namen vergebe und mit dem zuweisungsoperator = diese "Behälter" fuelle.
$my_var = "Hallo Welt";

# Ein Variablenname muss nach dem $ mit einem Buchstaben anfangen. Es ist allgemeine praxis kleine Buchstaben zu verwenden.
# $666var = 666 geht nicht
$Variable = "sollte man nicht machen";
$my_var2 = "ist gut";
# Variablennamen dürfen Zahlen und _ sowie Umlaute enthalten. Umlaute sollte man vermeiden
$my_var2üöa = "bitte keine Umlaute";

$snake_case = "Snake Case";

$camelCase = "Camel Case";


// Vor dem Aufrufen müssen Variablen definiert werden
//echo $test; -> erzeugt einen Fehler
//
//$test = "test";

# Man kann beliebig viele Variablen erstellen
$name1 = "Bob";
$name2 = "Jones";
$name3 = "Jim";


# Variablen kann man überschreiben
$name = "Tim";
$name = "Bob";
$name = 1;

# Bei der Zuweisung von Variablen kann ich mathematische Operationen durchführen
# ebenso können bei der Zuweisung Variablen verwendet werden
$zahl = 400 + 200;
echo $zahl;
echo "\n";
#sowie andere Variablen benutzen
$zahl2 = $zahl - 100;
echo "\n";;


# Um eine Variable hochzuzählen wird die Variable bei der Zuweisung selbst Aufgerufen
$autos = 1;
$autos = $autos + 1;
echo $autos;
echo "\n";;

$autos += 1; // Das ist die kurz Schreibweise für Zeile 46
echo $autos;
echo "\n";;

++$autos;  //  Es erhöht den Wert von x um 1 und gibt dann den inkrementierten Wert zurück
echo $autos;
echo "\n";;

// $autos++; Es erhöht ebenfalls den Wert von x um 1, gibt jedoch den ursprünglichen Wert von x vor der Inkrementierung zurück.
echo 'Autos ++';
echo "\n";;
echo $autos++; // 4
echo "\n";;
echo $autos; // 5
echo "\n";;

$autos -= 1;  //autos -1
echo $autos;
echo "\n";;

$autos *= 2;  //autos mal 2
echo $autos;
echo "\n";;

$autos /= 2; //autos durch 2
echo $autos;
echo "\n";;


//
# Um Variablenwerte zu tauschen, benötigt man einen Zwischenspeicher
$a = 1;
$b = 2;
echo $a;
echo "\n";;
echo $b;
echo "\n";;

$zwischenspeicher = $a;
$a = $b;
$b = $zwischenspeicher;
echo $a;
echo "\n";;

echo $b;


