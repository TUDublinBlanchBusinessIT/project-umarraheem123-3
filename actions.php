<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['member_name'];
$member_id = $_POST['member_id'];
$action = $_POST['action'];

if ($action == "checkout") {

    $sql = "INSERT INTO attendance_log (member_id, member_name, action) 
    VALUES ($member_id, '$name', 'check_out')";
    mysqli_query($conn, $sql);
}

if ($action == "delete") {
    
    $sql = "DELETE FROM attendance_log WHERE id = $id";
    mysqli_query($conn, $sql);
}

header("Location: admin.php");
exit;
?>
