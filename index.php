<?php
$update = json_decode(file_get_contents("php://input"), true);

// نمایش اطلاعات دریافتی در لاگ سرویس Render
echo "New update:\n";
var_dump($update);

if (isset($update["message"]["text"])) {
    $chat_id = $update["message"]["chat"]["id"];
    $text = "Hello WOrld!";

    // توکن خودت رو جایگزین کن
    $token = getenv("BOT_TOKEN");

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text));
}
?>
