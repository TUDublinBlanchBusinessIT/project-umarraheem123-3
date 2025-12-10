<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["member_name"];
     $area = $_POST["area"];
     $membership = $_POST["membership"];
     $energy = $_POST["energy_level"];
        
     $equipment = "";
     if (!empty($_POST["equipment"])) {
        foreach ($_POST["equipment"] as $item) {
        $equipment = $equipment . $item . ", ";
        }
     }

    $sql = "INSERT INTO attendance_log (member_name, action, area, membership, equipment, energy_level) VALUES ('$name', 'check_in' , '$area', '$membership', '$equipment', '$energy')";
    
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
    <select name="area">
        <option value="Weights">Weights</option>
        <option value="Cardio">Cardio</option>
        <option value="Studio">Studio</option>
        <option value="Hall">Hall</option>
        <option value="Stretch Area">Stretch Area</option>
    </select>
    <br><br>

        Membership Type:<br>
    <input type="radio" name="membership" value="standard"> Standard<br>
    <input type="radio" name="membership" value="premium"> Premium<br>
    <input type="radio" name="membership" value="student"> Student<br>
    <br>

    Equipment Needed:<br>
    <input type="checkbox" name="equipment[]" value="Water Bottle"> Water Bottle<br>
    <input type="checkbox" name="equipment[]" value="Towel"> Towel<br>
    <input type="checkbox" name="equipment[]" value="Yoga Mat"> Yoga Mat<br>
    <input type="checkbox" name="equipment[]" value="Lifting Belt"> Lifting Belt<br>
    <input type="checkbox" name="equipment[]" value="Wrist Straps"> Wrist Straps<br>
    <input type="checkbox" name="equipment[]" value="Training Gloves"> Training Gloves<br>
    <input type="checkbox" name="equipment[]" value="Resistance Band"> Resistance Band<br>
    <br>

    Energy Level (0–10):<br>
    <input type="range" name="energy_level" min="0" max="10">
    <br><br>


    <input type="submit" value="Submit">
</form>

</body>
</html>
