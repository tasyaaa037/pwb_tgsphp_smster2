<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
<form method="post" action="index3.php">
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>

    <label for="firstname">First name : </label><br><br>
    <input type="text" name="firstname"><br><br>

    <label for="lastname">Last name : </label><br><br>
    <input type="text" name="lastname"><br><br>

    <label for="gender">Gender</label><br><br>
    <input type="radio" name="gender" value="Male">Male <br>
    <input type="radio" name="gender" value="Female">Female <br><br>

    <label for="nationality">Nationality</label><br><br>
    <select name="nationality">
        <option value="Indonesia">Indonesia</option>
    </select>
    <br><br>

    <label for="languages">Language Spoken</label><br><br>
    <input type="checkbox" name="languages[]" value="Bahasa Indonesia">Bahasa Indonesia<br>
    <input type="checkbox" name="languages[]" value="English">English<br>
    <input type="checkbox" name="languages[]" value="Other">Other<br>
    <br>

    <label for="bio">Bio</label><br>
    <textarea name="bio" id="" cols="30" rows="10"></textarea><br><br>
    
    <button type="submit">Sign Up</button><br><br>
</form>

</body>
</html>
