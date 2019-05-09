<?php
$access_token = 'PyE1bA/BKoUBQ8uvnF5h8frX4EGEfRud4Xe9T2phv9qvyK+K01yHUKvhQ/n2FCQzINDwhkZolyevHO2ukG0wxEzFgJJkcZ0iJBkGItQ+CHYXMKzXRw+7C83nJ3e7i2FLJK3GbOKQ1jvrBvdgz/HXIgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;