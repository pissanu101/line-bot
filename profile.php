<?php


$access_token = 'dkovOt+zHrAVARtFYkJbfBI9uIFEDHg5Dyv44WXmsYlqu+dULj2vf5snhyKl7d//0Kw8/p+GX/lJxuYoFKIV8zGUJZqdGkfLNPBV71md5nDBWlSjcEa0NFcbb5Bws4yirPqE/xaoV/hDow3XFlkRWgdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

