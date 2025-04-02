<?php
session_start();

$error = ""; // Initialize error message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Dummy credentials
    $valid_email = "chandana@gmail.com";
    $valid_password = "password123";

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['user'] = $email;
        echo "<script>alert('Login successful!');</script>";
    } else {
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Login</h2>

<!-- Show error message if login fails -->
<?php if (!empty($error)) { ?>
    <script>alert("<?php echo $error; ?>");</script>
    <p class="error"><?php echo $error; ?></p>
<?php } ?>

<form action="" method="post">
    <label>Email:</label>
    <input type="email" name="email" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>

</body>
</html>
