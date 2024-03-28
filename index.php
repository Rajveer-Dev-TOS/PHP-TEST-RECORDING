<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Data</title>
</head>

<body>
    <a href='add_new_emp.php'>Add Employee</a>
    <?php
    require_once('db_connection.php');
    $sql = "SELECT * FROM employees ORDER BY id DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table><tr>
        <th>No</th>

        <th>first Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>Mobile</th>

        <th>Address</th>

        <th>Gender</th>

        <th>Hobby</th>

        <th>photo</th>

        <th>created Date</th>

        <th>Actions</th>

        <tr>";
        $i = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tbody><tr>
            <td>" . $i++ . "</td>

            <td>" . $row['first_name'] . "</td>
            <td>" . $row['last_name'] . "</td>

            <td>" . $row['email'] . "</td>

            <td>" . $row['mobile'] . "</td>

            <td>" . $row['country_code'] . "</td>

            <td>" . $row['gender'] . "</td>

            <td>" . $row['hobbies'] . "</td>

            <td><img height='100px' width='100px' src='uploads/" . $row['photo'] . "'></td>

            <td>" . $row['created_date'] . "</td>

            <td><a href='edit_emp.php?id=" . $row['id'] . "'>Edit</a><br><a href='delete_emp.php?id=" . $row['id'] . "'>Delete</a></td>


            
            
            </tr></tbody>";
        }
        // echo "</table>";
    } else {
        echo "<tr><td>No data found</td><tr>";
    }
    $conn->close();
    ?>
</body>

</html>