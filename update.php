<?php
require_once 'db_connection.php';
$id = mysqli_real_escape_string($conn, $_POST['eid']);

$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$country_code = mysqli_real_escape_string($conn, $_POST['country_code']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$hobbies = implode(',', $_POST['hobby']);
$targetdir = "uploads/";
$targetfile = $targetdir . basename($_FILES["photo"]["name"]);
$targetfilename = $_FILES["photo"]["name"];
move_uploaded_file($_FILES["photo"]["tmp_name"], $targetfile);

$sql_select = "SELECT * FROM employees WHERE id='$id' ";
$result = $conn->query($sql_select);
$row = $result->fetch_assoc();

if ($targetfilename == null) {
    $targetfilename = $row['photo'];
}
// echo $targetfilename;
$sql = "UPDATE employees SET
    first_name='$first_name',
    last_name='$last_name',
     email='$email',
      country_code='$country_code',
       mobile='$mobile', 
      address='$address',
     gender='$gender',
      hobbies='$hobbies',
       photo='$targetfilename'
    WHERE id=$id";
if ($conn->query($sql) == TRUE) {
    echo "<script>alert('employee record updated successfully!')</script>";
    header("Location:index.php");
} else {
    echo "Error" . $conn->error;
}
$conn->close();
