<?php
// require_once 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employees</title>
</head>

<body>
    <h3><u>Add Employees</u></h3>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mobile">Mobile with country code:</label>
        <select id="country_code" name="country_code" required>
            <option value="1">+1</option>
            <option value="91">+91</option>
        </select>
        <input type="number" name="mobile" id="mobile" required><br><br>

        <label for="address">Address:</label>
        <textarea name="address" id="address" cols="30" rows="10"></textarea><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="male" value="male" required>
        <label for="male">Male</label>

        <input type="radio" name="gender" id="female" value="female" required>
        <label for="female">Female</label><br><br>

        <label for="hobby">Hobby:</label>
        <input type="checkbox" name="hobby[]" id="reading" value="reading">
        <label for="reading">Reading</label>
        <input type="checkbox" name="hobby[]" id="coder" value="coder">
        <label for="coder">Coder</label>
        <input type="checkbox" name="hobby[]" id="dancing" value="dancing">
        <label for="dancing">Dancing</label><br><br>

        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" required><br><br>

        <input type="submit" value="submit">





    </form>
</body>

</html>