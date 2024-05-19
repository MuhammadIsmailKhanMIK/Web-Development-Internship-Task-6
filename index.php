<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Recruiter Application</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </nav>
    <main>
        <h2>Welcome to the Recruiter Application</h2>
        <p>Your go-to platform for job postings and finding the right candidates.</p>
    </main>
</body>
</html>
