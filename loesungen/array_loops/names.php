<?php
$users = [
    [
        "lastname" => "Abo Shameh",
        "firstname" => "Ahmad",
        "domain" => "www.ahmad.bbq.zz.",
        "ip" => "10.101.105.100",
        "city" => "Berlin",
        "country" => "Germany"
    ],
    [
        "lastname" => "Bafaiz",
        "firstname" => "Zamir",
        "domain" => "www.zamir.bbq.zz.",
        "ip" => "10.101.105.105",
        "city" => "Paris",
        "country" => "France"
    ],
    [
        "lastname" => "Bayar",
        "firstname" => "Gülden",
        "domain" => "www.guelden.bbq.zz.",
        "ip" => "10.101.105.110",
        "city" => "Istanbul",
        "country" => "Turkey"
    ],
    [
        "lastname" => "Bock",
        "firstname" => "Christian",
        "domain" => "www.christian.bbq.zz.",
        "ip" => "10.101.105.115",
        "city" => "Munich",
        "country" => "Germany"
    ],
    [
        "lastname" => "Borchhardt",
        "firstname" => "Gero",
        "domain" => "www.gero.bbq.zz.",
        "ip" => "10.101.105.120",
        "city" => "Oslo",
        "country" => "Norway"
    ],
    [
        "lastname" => "Bradley",
        "firstname" => "Sian",
        "domain" => "www.sian.bbq.zz.",
        "ip" => "10.101.105.125",
        "city" => "London",
        "country" => "United Kingdom"
    ],
    [
        "lastname" => "Davaasuren",
        "firstname" => "Sod-Erdene",
        "domain" => "www.sod-erdene.bbq.zz.",
        "ip" => "10.101.105.130",
        "city" => "Ulaanbaatar",
        "country" => "Mongolia"
    ],
    [
        "lastname" => "Farmakis",
        "firstname" => "Alexander",
        "domain" => "www.alexander.bbq.zz.",
        "ip" => "10.101.105.135",
        "city" => "Athens",
        "country" => "Greece"
    ],
    [
        "lastname" => "Iordachescu",
        "firstname" => "Stefan-Claudiu",
        "domain" => "www.stefan-claudiu.bbq.zz.",
        "ip" => "10.101.105.140",
        "city" => "Bucharest",
        "country" => "Romania"
    ],
    [
        "lastname" => "Kimura",
        "firstname" => "Ayano",
        "domain" => "www.ayano.bbq.zz.",
        "ip" => "10.101.105.145",
        "city" => "Tokyo",
        "country" => "Japan"
    ],
    [
        "lastname" => "Kocatürk",
        "firstname" => "Fikret",
        "domain" => "www.fikret.bbq.zz.",
        "ip" => "10.101.105.150",
        "city" => "Ankara",
        "country" => "Turkey"
    ],
    [
        "lastname" => "Ludwig",
        "firstname" => "Kilian",
        "domain" => "www.kilian.bbq.zz.",
        "ip" => "10.101.105.155",
        "city" => "Hamburg",
        "country" => "Germany"
    ],
    [
        "lastname" => "Magtoofi",
        "firstname" => "Khaled",
        "domain" => "www.khaled.bbq.zz.",
        "ip" => "10.101.105.160",
        "city" => "Dubai",
        "country" => "United Arab Emirates"
    ],
    [
        "lastname" => "Müller",
        "firstname" => "Moritz",
        "domain" => "www.moritz.bbq.zz.",
        "ip" => "10.101.105.165",
        "city" => "Vienna",
        "country" => "Austria"
    ],
    [
        "lastname" => "Bowinkelmann",
        "firstname" => "Patrick",
        "domain" => "www.patrick.bbq.zz.",
        "ip" => "10.101.105.170",
        "city" => "Zurich",
        "country" => "Switzerland"
    ],
    [
        "lastname" => "Petruschke",
        "firstname" => "Dennis",
        "domain" => "www.dennis.bbq.zz.",
        "ip" => "10.101.105.175",
        "city" => "Warsaw",
        "country" => "Poland"
    ],
    [
        "lastname" => "Shezleen",
        "firstname" => "Ahmed",
        "domain" => "www.ahmed.bbq.zz.",
        "ip" => "10.101.105.180",
        "city" => "Cairo",
        "country" => "Egypt"
    ],
    [
        "lastname" => "Ajvazi",
        "firstname" => "Vullnet",
        "domain" => "www.vullnet.bbq.zz.",
        "ip" => "10.101.105.185",
        "city" => "Pristina",
        "country" => "Kosovo"
    ],
    [
        "lastname" => "Hagedorn",
        "firstname" => "Bastian",
        "domain" => "www.bastian.bbq.zz.",
        "ip" => "10.101.105.190",
        "city" => "Stockholm",
        "country" => "Sweden"
    ],
    [
        "lastname" => "Purtov",
        "firstname" => "Server",
        "domain" => "www.server.bbq.zz.",
        "ip" => "10.101.105.195",
        "city" => "Moscow",
        "country" => "Russia"
    ]
];

?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
    <link href='style.css' rel='stylesheet' >
</head>
<body>

<table>
    <tr>
        <?php
        foreach ($users[0] as $key=>$value){
            echo "<th>$key</th>";
        }

        ?>
    </tr><?php

    for ($i = 0; $i < count($users); $i++) {
        if ($i % 2 == 0 ){
            $class = 'blau';
        }else{
            $class = 'rot';
        }
        echo "<tr class='$class'>";
        foreach ($users[$i] as $key=>$value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    ?>


</table>


</body>
</html>




