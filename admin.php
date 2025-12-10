<?php
include 'db.php';

$inQuery = mysqli_query($conn, "SELECT * FROM attendance_log WHERE action='check_in'");
$in = mysqli_num_rows($inQuery);

$outQuery = mysqli_query($conn, "SELECT * FROM attendance_log WHERE action='check_out'");
$out = mysqli_num_rows($outQuery);

$current_capacity = $in - $out;


$result = mysqli_query($conn, "
    SELECT attendance_log.*, members.member_id
    FROM attendance_log LEFT JOIN members ON attendance_log.member_name = members.member_name
    ORDER BY timestamp DESC
");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Attendance Log</title>
    <style>
        body { 
            font-family: Arial; 
            background: #e9e9e9; 
            padding-top: 40px; 
            text-align: center;
        }

        .container {
            width: 85%;
            margin: auto;
        }

        h2 {
            margin-bottom: 25px;
        }

        table {
            margin: auto;
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ccc;
        }

        th {
            background: #222;
            color: white;
        }

        tr:hover {
            background: #f4f4f4;
        }

        .enter {
            color: green;
            font-weight: bold;
        }

        .exit {
            color: red;
            font-weight: bold;
        }

        a {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            color: #333;
            background: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        a:hover {
            background: #ddd;
        }


        select {
    padding: 6px;
    border-radius: 5px;
    border: 1px solid #aaa;
    background: #f8f8f8;
    font-size: 14px;
}

select:hover {
    background: #eee;
}

input[type="submit"] {
    padding: 6px 10px;
    border: none;
    border-radius: 5px;
    background: #333;
    color: white;
    cursor: pointer;
    font-size: 14px;
}

input[type="submit"]:hover {
    background: #555;
}

    </style>
</head>
<body>

<div class="container">

<h2>Admin Panel – Gym Attendance Log</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Action</th>
        <th>Name</th>
        <th>Timestamp</th>
        <th>Area</th>
        <th>Membership</th>
        <th>Equipment</th>
        <th>Energy</th>
        <th>Options</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['action']; ?></td>
    <td><?php echo $row['member_name']; ?></td>
    <td><?php echo $row['timestamp']; ?></td>




    <!-- EXTRA FIELDS -->
    <td><?php echo $row['area']; ?></td>
    <td><?php echo $row['membership']; ?></td>
    <td><?php echo $row['equipment']; ?></td>
    <td><?php echo $row['energy_level']; ?></td>

        <td>
        <form method="post" action="actions.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="member_name" value="<?php echo $row['member_name']; ?>">
            <input type="hidden" name="member_id" value="<?php echo $row['member_id']; ?>">


            <select name="action">
                <option value="">Choose</option>
                <option value="checkout">Check Out</option>
                <option value="delete">Delete</option>
            </select>

            <input type="submit" value="Go">
        </form>
    </td>
</tr>
<?php } ?>


    <h3>Current Gym Capacity: <?php echo $current_capacity; ?></h3>
</table>

<a href="checkin.php">Record a Check-In</a>

<div class="menu">
    
        <a href="index.php">Back to Main</a>
</div>

</body>
</html>
