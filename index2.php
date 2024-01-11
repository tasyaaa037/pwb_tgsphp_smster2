<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .form-container {
            background-color: #ffffff;
            padding: 180px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        form {
            text-align: center;
        }
         .checkbox-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .checkbox-container label {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .checkbox-container input {
            margin-right: 7px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="post" action="index3.php" onsubmit="return validateForm()">
            <h1>Buat Account Baru</h1>
            <h2>Sign Up Form</h2>

            <label for="firstname">First name : </label><br><br>
            <input type="text" name="firstname" required><br><br>

            <label for="lastname">Last name : </label><br><br>
            <input type="text" name="lastname" required><br><br>

            <label for="gender">Gender :</label><br><br>
            <input type="radio" name="gender" value="Laki-Laki" required>Laki-Laki
            <input type="radio" name="gender" value="Perempuan" required>Perempuan<br><br>

            <label for="nationality">Nationality :</label><br><br>
            <select name="nationality" required>
                <option value="Indonesia">Indonesia</option>
                <option value="Jepang">Jepang</option>
                <option value="Korea Selatan">Korea Selatan</option>
                <option value="Thailand">Thailand</option>
                <option value="China">China</option>
                <option value="Singapore">Singapore</option>
                <option value="Other">Other</option>
            </select>
            <br><br>

            <label for="languages">Language Spoken :</label><br><br>
            <div class="checkbox-container">
                <label><input type="checkbox" name="languages[]" value="Indonesia">Indonesian</label>
                <label><input type="checkbox" name="languages[]" value="English">English</label>
                <label><input type="checkbox" name="languages[]" value="Japanese">Japanese</label>
                <label><input type="checkbox" name="languages[]" value="Germany">Germany</label>
                <label><input type="checkbox" name="languages[]" value="Other">Other</label>
            </div>
            <br>

            <label for="bio">Bio</label><br>
            <textarea name="bio" id="" cols="30" rows="10" required></textarea><br><br>
            
            <button type="submit">Sign Up</button><br><br>
        </form>
    </div>

    <script>
        function validateForm() {
            var checkboxes = document.querySelectorAll('input[name="languages[]"]:checked');
            if (checkboxes.length === 0) {
                alert("Pilih setidaknya satu bahasa yang dikuasai!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
