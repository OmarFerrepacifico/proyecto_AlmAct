<?php

$curl = curl_init();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$id = intval($id); // Convertir $id a un entero

$url = "http://corpo-fondeport-zkwpvgkhvbc.dynamic-m.com:8181/exsim/servicios/metodo/ARTICULOS/4P9prZ33S7WIy617wu29p076206j61/10/0/$id";

// Configurar opciones cURL
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_VERBOSE => true, // Activar el modo verbose para depuración
    CURLOPT_STDERR => fopen('php://stderr', 'w'), // Redirigir errores de cURL al log de errores de PHP
));

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo 'Error: ' . curl_error($curl);
} else {
    echo $response;
}

curl_close($curl);
?>
