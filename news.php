<?php

// echo "http://www.ortszeitungen.de/rmp/DxMLW?Template=./Templates/idx.tpl&Ort=31&Rubrik=1000002&Art=2279791";

ini_set('default_mimetype', 'text/html');
ini_set('default_charset', 'ISO-8859-1');
$url = "http://www.ortszeitungen.de/rmp/DxMLW?Template=./Templates/ShowArt.tpl&Ort=" . $_POST['Ort'] . "&Rubrik=" . $_POST['Rubrik'];

$ch = curl_init();

// set URL and other appropriate options  
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// grab URL and pass it to the browser  

$outputs = curl_exec($ch);

//Regular expression to excerpt the targeted portion  
preg_match('/<body>(.*)<\/body>/is', $outputs, $matches);

echo ($matches[0]);


curl_close($ch);
?>