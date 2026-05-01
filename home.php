<?php
session_start();

// If user is NOT logged in, redirect to login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }
        .container {
            width: 400px;
            margin: auto;
        }
        .card {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Welcome, <?php echo $_SESSION['user']; ?> 🎉</h2>
        <p>You have successfully logged in.</p>

        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>