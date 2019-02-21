<?php



require "vendor/autoload.php";

$access_token = 'dkovOt+zHrAVARtFYkJbfBI9uIFEDHg5Dyv44WXmsYlqu+dULj2vf5snhyKl7d//0Kw8/p+GX/lJxuYoFKIV8zGUJZqdGkfLNPBV71md5nDBWlSjcEa0NFcbb5Bws4yirPqE/xaoV/hDow3XFlkRWgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '041894f452a191dad4d7ecaf2441ba9f';

$pushID = 'U229da5b78f4a7deb7032e2b37c79e5d5';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







