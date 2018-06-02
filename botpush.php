<?php



require "vendor/autoload.php";

$access_token = 'Pt1n8juNRvooMS37xtRVsa6lbLw0hEpHqfcIGc9MhE9lkSvJjR0Xe8Q3iOFfAVc4FSPNxvnvzz5Z+VFGq+S+rrwdzMskFehfBYknLHMYBymvdtIXGf+hE/4E3jT3HYMRg6UmffkzvITCuo4BvJWV5gdB04t89/1O/w1cDnyilFU=';

$channelSecret = '65dd124a1ae84ed0e88a0abe844c4a40';

$pushID = 'Uba02a2eb998b086e79ceea53f57b6c93';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







