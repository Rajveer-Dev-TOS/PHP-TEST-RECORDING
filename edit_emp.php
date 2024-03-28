<?php
require_once 'db_connection.php';
$sql = "SELECT * FROM employees WHERE id='" . $_GET['id'] . "'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employees</title>
</head>

<body>
    <h3><u>Edit Employees</u></h3>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="text" id="eid" name="eid" value="<?php echo $row['id']; ?>" required hidden><br><br>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $row['first_name']; ?>" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $row['last_name']; ?>" required><br><br>

        <label for=" email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>

        <label for="mobile">Mobile with country code:</label>
        <select id="country_code" name="country_code" required>
            <option value="1" <?php if ($row['country_code'] == 1) echo 'selected' ?>>+1</option>
            <option value="91" <?php if ($row['country_code'] == 91) echo 'selected' ?>>+91</option>
        </select>
        <input type="number" name="mobile" value="<?php echo $row['mobile']; ?>" id="mobile" required><br><br>

        <label for="address">Address:</label>
        <textarea name="address" id="address" cols="30" rows="10"><?php echo $row['address']; ?></textarea><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="male" value="male" <?php if ($row['gender'] == 'male') echo 'checked' ?> required>
        <label for="male">Male</label>

        <input type="radio" name="gender" id="female" value="female" <?php if ($row['gender'] == 'female') echo 'checked' ?> required>
        <label for="female">Female</label><br><br>

        <label for="hobby">Hobby:</label>
        <input type="checkbox" name="hobby[]" id="reading" value="reading" <?php if (in_array('reading', explode(',', $row['hobbies']))) echo 'checked'; ?>>
        <label for="reading">Reading</label>
        <input type="checkbox" name="hobby[]" id="coder" value="coder" <?php if (in_array('coder', explode(',', $row['hobbies'])))  echo 'checked'; ?>>
        <label for="coder">Coder</label>
        <input type="checkbox" name="hobby[]" id="dancing" value="dancing" <?php if (in_array('dancing', explode(',', $row['hobbies'])))  echo 'checked'; ?>>
        <label for="dancing">Dancing</label><br><br>

        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo">
        <img src="uploads/<?php echo $row['photo']; ?>" height="100px"><br><br>

        <input type="submit" value="submit">





    </form>
</body>

</html>