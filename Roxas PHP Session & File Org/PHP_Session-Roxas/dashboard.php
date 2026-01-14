<?php
    session_start();
    /* Protect page */

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
    /* Escape output for security */

    function h($v) {
        return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dashboard</h2>

    <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
    <a href="logout.php">Logout</a>
</body>
</html>