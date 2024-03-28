<?php
$id = $_GET['id'];
require_once('db_connection.php');
$sql = "DELETE FROM employees WHERE id='$id' ";
if ($conn->query($sql) == TRUE) {
    echo "<script>alert('employee record deleted successfully!')</script>";
    header("Location:index.php");
} else {
    echo "error" . $conn->error;
}
$conn->close();
