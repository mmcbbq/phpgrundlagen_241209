<?php
function cidrToSubnetMask($cidr) {
    $bits = (int)$cidr;
    $mask = long2ip(-1 << (32 - $bits));
    return $mask;
}
$kea_json = file_get_contents('kea-dhcp4.conf');
$kea_json = json_decode($kea_json,true);
$interface = $kea_json["Dhcp4"]["interfaces-config"]["interfaces"][0];
$valid_life = $kea_json["Dhcp4"]["max-valid-lifetime"];
$ip = explode('/',$kea_json["Dhcp4"]["subnet4"][0]["subnet"])[0];
$subnet = explode('/',$kea_json["Dhcp4"]["subnet4"][0]["subnet"])[1];
$gateway = $kea_json["Dhcp4"]["subnet4"][0]["option-data"][0]["data"];
$dns = $kea_json["Dhcp4"]["subnet4"][0]["option-data"][1]['data'];

 $kea_json["Dhcp4"]["subnet4"][0]["option-data"][0]["data"] = '192.168.0.123';
$kea_json["Dhcp4"]["subnet4"][0]["option-data"][1]['data'] = '1.1.1.1';
$kea_json["Dhcp4"]["subnet4"][0]["option-data"][2]['data'] = 'manue-bbq.zz';
$kea_json["Dhcp4"]["subnet4"][0]["option-data"][3]['data'] = 'manue-bbq.zz';
$subnet = cidrToSubnetMask($subnet);


var_dump($kea_json["Dhcp4"]["subnet4"][0]["option-data"][3]['data']);

?>


<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>
<div><?= $interface ?> </div>
</body>
</html>
