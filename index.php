<?php
$update = json_decode(file_get_contents("php://input"), true);

// نمایش اطلاعات دریافتی در لاگ سرویس Render
echo "New update:\n";
var_dump($update);

if (isset($update["message"]["text"])) {
    $chat_id = $update["message"]["chat"]["id"];
    $text = "سلام علی سینا! 👋 ربات PHP روی Render کار می‌کنه.";

    // توکن خودت رو جایگزین کن
    $token = "7544747513:AAGUNzsu6pH4ueWa8qte49ohDmLIBKMJSjo";

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text));
}
?>
