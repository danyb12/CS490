<?php
header("Content-Type:application/json");
$data = $_POST;

$ch = curl_init('https://web.njit.edu/~ms2285/cs490/backend/backend.php');
$postData = http_build_query($data);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = json_decode(curl_exec($ch), true);
curl_close($ch);

$response = array(
"custom" => $response["login"],
"njit" => false
);

echo json_encode($response);
?>