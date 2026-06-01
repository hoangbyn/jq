<?php

$callback =
    'jQuery3510' .
    mt_rand(100000000000000000,999999999999999999) .
    '_' .
    round(microtime(true) * 1000);

$url = "https://example.com/test";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'callback' => $callback
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

echo "<pre>";
echo htmlspecialchars($response);
echo "</pre>";
