<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Website</title>
    <style>
        body {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 90vh;
            margin: 0;
        }
        .data-container {
            text-align: left;
            width: 300px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = isset($_POST["firstname"]) ? test_input($_POST["firstname"]) : "";
        $lastname = isset($_POST["lastname"]) ? test_input($_POST["lastname"]) : "";
        $gender = isset($_POST["gender"]) ? test_input($_POST["gender"]) : "";
        $nationality = isset($_POST["nationality"]) ? test_input($_POST["nationality"]) : "";
        $languages = isset($_POST["languages"]) ? $_POST["languages"] : [];
        $bio = isset($_POST["bio"]) ? test_input($_POST["bio"]) : "";

        if (!empty($firstname)) {
            echo "<h1>SELAMAT DATANG $firstname!!</h1>";
        } else {
            echo "<h1>SELAMAT DATANG!</h1>";
        }

        echo "<div class='data-container'>";
        echo "<h1>Data Anda yang Telah Terverifikasi!</h1>";
        echo "<p>Nama : $firstname $lastname</p>";
        echo "<p>Jenis Kelamin : $gender</p>";
        echo "<p>Kewarganegaraan : $nationality</p>";
        echo "<p>Bahasa yang Dikuasai : " . implode(", ", $languages) . "</p>";
        echo "<p>Bio : $bio</p>";
        echo "</div>";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Terima kasih telah bergabung di Website Kami.</h2>
    <h2> Media Belajar kita bersama.</h2>
</body>
</html>
