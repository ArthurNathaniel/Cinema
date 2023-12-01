<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Redirect to dashboard after successful login
            echo "<script>alert('Login successful!'); window.location.href = 'dashboard.php';</script>";
            exit();
        } else {
            echo "<script>alert('Invalid password');</script>";
        }
    } else {
        echo "<script>alert('User not found');</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <?php include 'meta.php'; ?>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/account.css">
    <title>Login</title>
</head>

<body>
    <div class="account-all">
        <div class="account-image"></div>
        <div class="account-forms">
            <div class="account-title">
                <h2>Login</h2>
            </div>
            <form action="login.php" method="post">
                Email: <input type="email" name="email" placeholder="Enter your email address" required>
                Password: <input type="password" name="password" placeholder="Enter your password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>

</html>