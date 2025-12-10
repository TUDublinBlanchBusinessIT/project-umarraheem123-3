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
<head>
    <title>Check In</title>
<body>
<h2>Check In</h2>

<form method="post">
    Name: <input type="text" name="member_name" required>
    <br><br>

    Gym Area<br>
    <select>
        <option>Weights</option>
        <option>Cardio</option>
        <option>Studio</option>
        <option>Hall</option>
        <option>Stretch Area</option>
    <select>
    <br><br>

        Membership Type:<br>
    <input type="radio" name="type" value="standard"> Standard<br>
    <input type="radio" name="type" value="premium"> Premium<br>
    <input type="radio" name="type" value="student"> Student<br>
    <br>

    Equipment Needed:<br>
    <input type="checkbox" name="water"> Water Bottle<br>
    <input type="checkbox" name="towel"> Towel<br>
    <input type="checkbox" name="mat"> Yoga Mat<br>
    <input type="checkbox" name="belt"> Lifting Belt<br>
    <input type="checkbox" name="straps"> Wrist Straps<br>
    <input type="checkbox" name="gloves"> Training Gloves<br>
    <input type="checkbox" name="band"> Resistance Band<br>
    <br>

    Energy Level (0–10):<br>
    <input type="range" min="0" max="10">
    <br><br>


    <input type="submit" value="Submit">
</form>

</body>
</html>
