<?php
$userId = "88224979-406e-4e32-9458-55836e4e1f95";
$url = "https://stats.dev.chip.test/users/" . $userId;

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if ($response === false) {
$error = curl_error($ch);
echo "cURL error: " . $error;
} else {
// Process the response
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if ($httpCode == 200) {
echo "Successful request. Response:\n" . $response;
} else {
echo "Unexpected status code: " . $httpCode;
}
}

curl_close($ch);

