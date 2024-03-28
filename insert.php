<?php
require_once 'db_connection.php';
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$country_code = mysqli_real_escape_string($conn, $_POST['country_code']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$hobbies = implode(',', $_POST['hobby']);
$photo = mysqli_real_escape_string($conn, $_FILES['photo']['name']);


$sql = "INSERT INTO employees
(
    id, first_name, last_name, email, country_code, mobile, address, gender, hobbies, photo
)
VALUES
(
    0,'$first_name','$last_name','$email','$country_code','$mobile','$address','$gender','$hobbies','$photo'

)";
if (move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $photo) && $conn->query($sql) == TRUE) {
    echo "<script>alert('employee record inserted successfully!')</script>";
    header("Location:index.php");
} else {
    echo "Error" . $conn->error;
}
$conn->close();
