<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "姓名: $name<br>";
    echo "邮箱: $email<br>";
    echo "留言: $message<br>";
}
?>
