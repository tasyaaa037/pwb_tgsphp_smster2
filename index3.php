<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Website</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $nationality = $_POST["nationality"];
    $languages = isset($_POST["languages"]) ? $_POST["languages"] : [];
    $bio = $_POST["bio"];

    echo "<h1>Selamat datang di Website</h1>";
    echo "<p>$firstname $lastname</p>";
    echo "<p>Jenis Kelamin: $gender</p>";
    echo "<p>Kewarganegaraan: $nationality</p>";
    echo "<p>Bahasa yang Dikuasai: " . implode(", ", $languages) . "</p>";
    echo "<p>Bio: $bio</p>";
}
?>
    <h1>SELAMAT DATANG!</h1>
    <h2>Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama.</h2>
</body>
</html>
