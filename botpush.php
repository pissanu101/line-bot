<?php



require "vendor/autoload.php";

$access_token = 'dkovOt+zHrAVARtFYkJbfBI9uIFEDHg5Dyv44WXmsYlqu+dULj2vf5snhyKl7d//0Kw8/p+GX/lJxuYoFKIV8zGUJZqdGkfLNPBV71md5nDBWlSjcEa0NFcbb5Bws4yirPqE/xaoV/hDow3XFlkRWgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '041894f452a191dad4d7ecaf2441ba9f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







