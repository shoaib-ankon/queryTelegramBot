<?php
 
$botToken = "";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

switch($message) {
       
        case "hi":
                sendMessage($chatId, "hi");
                break;
        case "test1":
                sendMessage($chatId, "replytest1");
                break;

         case "test2":
                sendMessage($chatId, "replytest2");
                break;       
        default:
                sendMessage($chatId, "Opss! Please enter the correct command");
       
}
 
function sendMessage ($chatId, $message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
       
}
 ?>




