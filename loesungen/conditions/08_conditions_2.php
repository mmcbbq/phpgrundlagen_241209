



<?php


$unitChoice = $_GET['units'] ?? 'I';
$iVal = $_GET['i-input'] ?? 1;
$uVal = $_GET['u-input'] ?? 1;
$rVal = $_GET['r-input'] ?? 1;

$calcResult = match ($unitChoice) {
    "I" => $rVal > 0 ? $uVal / $rVal : "Division durch 0 nicht definiert!",
    "U" => $rVal * $iVal,
    "R" => $iVal > 0 ? $uVal / $iVal : "Division durch 0 nicht definiert!"
};
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ohmsches Gesetz</title>
</head>
<body>
<div class="container">
    <h2>Ohmsches Gesetz</h2>
    <p># Nach dem Ohmschen Gesetz berechnet sich der Widerstand eines ohmschen Widerstandes mit:<br>
        # U = R * I<br>
        # R = U/I<br>
        # I = U/R<br>
        # Schreiben Sie ein Programm, in das der Benutzer zunächst über die Eingabe der Buchstaben R, U oder I<br>
        # auswählen kann, welche Größe berechnet werden soll. Gibt er einen falschen Buchstaben ein, soll eine Meldung<br>
        # über die Fehleingabe erfolgen.<br>
        # Anschließend soll er die Werte der fehlenden Größen eingeben. Am Ende gibt das Programm den Wert der<br>
        # gesuchten Größe mit der richtigen Einheit aus</p><br>
    <form id="calc-form" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET">
        <div class="form-group">
            <label for="units">Größe wählen</label>
            <select name="units" id="units">
                <option value="I" <?= $unitChoice == "I" ? "selected" : "" ?>>I</option>
                <option value="U" <?= $unitChoice == "U" ? "selected" : "" ?>>U</option>
                <option value="R" <?= $unitChoice == "R" ? "selected" : "" ?>>R</option>
            </select>
            <input type="submit" value="Auswahl bestätigen">
        </div>
    </form>

    <form id="i-calc-form" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET" <?= $unitChoice == "I" ? "" : "hidden" ?>>
        <div class="form-group">
            <input type="hidden" name="units" value="<?= $unitChoice ?>">
            <label for="u-input">U<br></label>
            <input type="number" name="u-input" id="u-input" value="<?= $uVal ?>">
            <span class="operator">/</span>
            <label for="r-input"><br><br>R<br></label>
            <input type="number" name="r-input" id="r-input" value="<?= $rVal ?>">
            <span class="equals">=</span>
            <label for="result-output"><br><br>Ergebnis<br></label>
            <input type="text" name="result-output" id="result-output" value="<?= $calcResult ?>" readonly>
        </div>
        <br>
        <input type="submit" name="btn-calc" value="<?= $unitChoice ?> berechnen">
    </form>

    <form id="u-calc-form" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET" <?= $unitChoice == "U" ? "" : "hidden" ?>>
        <div class="form-group">
            <input type="hidden" name="units" value="<?= $unitChoice ?>">
            <label for="r-input">R<br></label>
            <input type="number" name="r-input" id="r-input" value="<?= $rVal ?>">
            <span class="operator">*</span>
            <label for="i-input"><br><br>I<br></label>
            <input type="number" name="i-input" id="i-input" value="<?= $iVal ?>">
            <span class="equals">=</span>
            <label for="result-output"><br><br>Ergebnis<br></label>
            <input type="text" name="result-output" id="result-output" value="<?= $calcResult ?>" readonly>
        </div>
        <br>
        <input type="submit" name="btn-calc" value="<?= $unitChoice ?> berechnen">
    </form>

    <form id="r-calc-form" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET" <?= $unitChoice == "R" ? "" : "hidden" ?>>
        <div class="form-group">
            <input type="hidden" name="units" value="<?= $unitChoice ?>">
            <label for="u-input">U<br></label>
            <input type="number" name="u-input" id="u-input" value="<?= $uVal ?>">
            <span class="operator">/</span>
            <label for="i-input"><br><br>I<br></label>
            <input type="number" name="i-input" id="i-input" value="<?= $iVal ?>">
            <span class="equals">=</span>
            <label for="result-output"><br><br>Ergebnis<br></label>
            <input type="text" name="result-output" id="result-output" value="<?= $calcResult ?>" readonly>
        </div>
        <br>
        <input type="submit" name="btn-calc" value="<?= $unitChoice ?> berechnen">
    </form>
</div>
</body>
</html>

