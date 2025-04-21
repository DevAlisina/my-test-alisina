<?php
$update = json_decode(file_get_contents("php://input"), true);
file_put_contents("log.txt", print_r($update, true), FILE_APPEND);

if (isset($update["message"]["text"])) {
    $chat_id = $update["message"]["chat"]["id"];
    $text = "سلام علی سینا! 👋";
    
    file_get_contents("https://api.telegram.org/bot<YOUR_TOKEN>/sendMessage?chat_id=$chat_id&text=" . urlencode($text));
}
?>
