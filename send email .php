<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // ตั้งค่าอีเมลที่จะรับข้อมูล
    $to = "sirassornaemjai@gmail.com.com";  //
    $subject = "คำขอคำปรึกษาจาก MindCareDeChill";
    $body = "ชื่อ: $name\nอีเมล: $email\nข้อความ: $message";
    $headers = "From: $email";

    // ส่งอีเมล
    if (mail($to, $subject, $body, $headers)) {
        echo "ข้อมูลถูกส่งเรียบร้อยแล้ว!";
    } else {
        echo "เกิดข้อผิดพลาดในการส่งข้อมูล";
    }
}
?>
