<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["member_name"];
    $sql = "INSERT INTO attendance_log (member_name, action) VALUES ('$name', 'check_in')";
    mysqli_query($conn, $sql);
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Check In</h2>

<form method="post">
    Name: <input type="text" name="member_name" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
