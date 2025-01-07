<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // แสดงผลในเทอร์มินัล (STDOUT)
    echo "ชื่อ: $name\n";
    echo "อีเมล: $email\n";
    echo "ข้อความ: $message\n";

    // ส่งผลลัพธ์ไปยังเทอร์มินัล
    $output = "ชื่อ: $name\nอีเมล: $email\nข้อความ: $message\n";
    file_put_contents('php://stdout', $output);
} else {
    echo "ไม่อนุญาตให้เข้าถึงหน้านี้โดยตรง";
}
?>
