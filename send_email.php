<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $headers = "From: your_email@example.com"; // 送信元のメールアドレスを設定
    
    if (mail($to, $subject, $message, $headers)) {
        echo "メールが送信されました。";
    } else {
        echo "メールの送信に失敗しました。";
    }
}
?>
