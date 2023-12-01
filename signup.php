<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful signup
        echo "<script>alert('Registration successful!'); window.location.href = 'login.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Signup</title>
</head>

<body>
    <div class="account-all">
        <div class="account-image">

        </div>
        <div class="account-forms">
            <div class="account-title">
                <h2>Signup</h2>
            </div>
            <form action="signup.php" method="post">
                Username: <input type="text" name="username" placeholder="Enter your username" required>
                Email: <input type="email" name="email" placeholder="Enter your email address" required>
                Password: <input type="password" name="password" placeholder="Enter your password" required>
                <input type="submit" value="Signup">
                <a href="login.php">Already have an account</a>
            </form>
        </div>
    </div>
</body>

</html>