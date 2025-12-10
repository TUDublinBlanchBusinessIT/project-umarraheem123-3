<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM attendance ORDER BY event_time DESC");
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
    </style>
</head>
<body>

<div class="container">

<h2>Admin Panel – Gym Attendance Log</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Action</th>
        <th>Timestamp</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td class="<?php echo $row['action']; ?>">
            <?php echo ucfirst($row['action']); ?>
        </td>
        <td><?php echo $row['event_time']; ?></td>
    </tr>
    <?php } ?>

</table>

<a href="index.php">Back to Main</a>

</div>

</body>
</html>
