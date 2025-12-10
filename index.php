<!DOCTYPE html>
<html>
<head>
    <title>Gym Capacity Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
        }
header {
            background: #2c3e50;
            color: white;
            padding: 25px 0;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.2);
        }

        .container {
            width: 90%;
            max-width: 700px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        .menu-btn {
            display: block;
            background: #3498db;
            color: white;
            text-decoration: none;
            padding: 15px;
            margin: 15px 0;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            transition: 0.2s;
        }

        .menu-btn:hover {
            background: #2980b9;
        }

        .admin-btn {
            background: #2ecc71;
        }

        .admin-btn:hover {
            background: #27ae60;
        }
    </style>
</head>
<body>

<header>
    <h1>Gym Capacity Tracker</h1>
</header>


<div class="container">

    <h2>Welcome</h2>
    <p>Select an action below:</p>

    <a href="checkin.php" class="menu-btn">Record a Check-In</a>
    <a href="admin.php" class="menu-btn admin-btn">Admin Login</a>
</div>

</body>
</html>
