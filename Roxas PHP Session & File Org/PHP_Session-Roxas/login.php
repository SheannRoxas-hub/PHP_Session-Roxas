<?php
        session_start();
        $correct_username = "shean";
        $correct_password = "1234";
        $error = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $password = trim($_POST['password'] ?? '');

            if ($username === "" || $password === "") {
                $error = "Username and Password are required";
            }
            elseif ($username !== $correct_username || $password !== $correct_password) {
                $error = "Invalid Username or Password";
            }
            else {
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
                exit;
            }
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
    <?php if ($error): ?>
    <p style="color:red;"><?php echo
    htmlspecialchars($error); ?></p>
    <?php endif; ?>
    
    <h2>Login Page</h2>

    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Login</button>
    </form>

</body>
</html>