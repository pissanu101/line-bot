<?php
require "vendor/autoload.php";

$access_token = 'dkovOt+zHrAVARtFYkJbfBI9uIFEDHg5Dyv44WXmsYlqu+dULj2vf5snhyKl7d//0Kw8/p+GX/lJxuYoFKIV8zGUJZqdGkfLNPBV71md5nDBWlSjcEa0NFcbb5Bws4yirPqE/xaoV/hDow3XFlkRWgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '9b51168ef28e112e5b2eaaf15a24346b';
$pushID = 'U0c4dd7723b2b4e2702b023cd6adf1958';

if ($_REQUEST["submit"] == "Send Data" && $_REQUEST["submit"] != "") {
    
    $input_text = $_REQUEST['input'];
    
    $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
    $bot = new \LINE\LINEBot($httpClient, [
        'channelSecret' => $channelSecret
    ]);
    
    $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Hellow world');
    $response = $bot->pushMessage($pushID, $textMessageBuilder);
}

// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
// echo "ส่งข้อมูลเรียบร้อยจ้า...";
?>
<form class='form-horizontal' id="myform1" action=""
	method="post" name="frmMain" enctype="multipart/form-data">
	<input id="latlng" name="latlng" type="hidden" value=""> <input
		id="input" name="input" type="text" value=""> <input type="button"
		name="submit" id="submit" value="Send Data">
</form>







