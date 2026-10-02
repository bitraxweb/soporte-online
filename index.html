<?php

// Obtener IP del visitante
$ip = $_SERVER['REMOTE_ADDR'];

// Para pruebas en localhost
if ($ip == "::1" || $ip == "127.0.0.1") {
    $ip = "8.8.8.8"; // IP ejemplo USA
}


// Consulta país
$consulta = file_get_contents("http://ip-api.com/json/".$ip."?fields=countryCode");

$datos = json_decode($consulta, true);

$pais = $datos['countryCode'] ?? '';


// Países de Latinoamérica que irán a inicio.php
$latinoamerica = [
    "AR", // Argentina
    "BO", // Bolivia
    "BR", // Brasil
    "CL", // Chile
    "CO", // Colombia
    "CR", // Costa Rica
    "CU", // Cuba
    "DO", // República Dominicana
    "EC", // Ecuador
    "GT", // Guatemala
    "HN", // Honduras
    "MX", // México
    "NI", // Nicaragua
    "PA", // Panamá
    "PY", // Paraguay
    "PE", // Perú
    "PR", // Puerto Rico
    "SV", // El Salvador
    "UY", // Uruguay
    "VE"  // Venezuela
];


// Europa + Estados Unidos
if (in_array($pais, $latinoamerica)) {

    header("Location: inicio.php");
    exit();

} else {

    header("Location: home.php");
    exit();

}

?>
