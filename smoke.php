<?php
require __DIR__ . '/vendor/autoload.php';
if (!class_exists('Soneso\StellarSDK\StellarSDK')) throw new Exception('SDK missing');
$client = new GuzzleHttp\Client();
if (!$client) throw new Exception('Control failed');
echo "Stellar SDK and Guzzle control loaded offline.\n";
