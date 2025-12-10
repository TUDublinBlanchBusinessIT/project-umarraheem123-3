<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['member_name'];
$action = $_POST['action'];

if ($action == "checkout") {

    $sql = "INSERT INTO attendance_log (member_name, action) 
            VALUES ('$name', 'check_out')";
    mysqli_query($conn, $sql);
}

if ($action == "delete") {
    
    $sql = "DELETE FROM attendance_log WHERE id = $id";
    mysqli_query($conn, $sql);
}

header("Location: admin.php");
exit;
?>
