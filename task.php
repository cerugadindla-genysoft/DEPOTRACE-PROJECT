<?php
session_start();
include 'database.php'; // Include the database connection file

$error = ""; // Initialize error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check the user in the database
    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify the hashed password
        if (hash('sha256', $password) === $hashed_password) {
            $_SESSION['user'] = $email;
            echo "<script>alert('Login successful!');</script>";
        } else {
            $error = "Invalid email or password!";
        }
    } else {
        $error = "Invalid email or password!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="task.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <div class="overlay"></div>
        </div>
        
        <!-- Right Section (Login Form) -->
        <div class="right-section">
            <div class="login-box">
                <img src="./depotracelogo.png" alt="Logo" class="logo">
                <h4>Enter your login credentials here</h4>

                <!-- Show Error Alert -->
                <?php if (!empty($error)) { ?>
                    <script>
                        alert("<?php echo $error; ?>");
                    </script>
                <?php } ?>

                <form method="POST">
                    <div class="input-group">
                        <i class="fa-solid fa-user"></i>
                        <input type="email" name="email" placeholder="Email" class="inputvalues" required>
                    </div>
                    
                    <div class="input-group password-group">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" class="inputvalues" required>
                        <i class="fa-solid fa-eye" onclick="togglePassword()"></i>
                    </div>
                    
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    
                    <div class="login-actions">
                        <button type="submit" class="login-btn">Login</button>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="social-icons">
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
        </div>
        <a href="#" class="privacy-policy">Privacy Policy</a>
        <div class="copyright"><h4>&copy; 2023 All rights reserved </h4></div>
    </footer>
    
    <script>
    function togglePassword() {
        const passwordInput = document.querySelector('.password-group input');
        const eyeIcon = document.querySelector('.password-group i.fa-solid');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
        }
    }
    </script>

</body>
</html>
