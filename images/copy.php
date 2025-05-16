<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "depotrace-login";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$backgroundImages = [
    "https://plus.unsplash.com/premium_photo-1661333820879-517c5e808bfe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8bGF3eWVyfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1521066505762-e50557b7b6fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGp1c3RpY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1668058723804-d7dcd1ffa4c9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGF3JTIwZmlybXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1681488394409-5614ef55488c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGF3fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1568667256549-094345857637?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bGlicmFyeXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1472173148041-00294f0814a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODF8fGp1c3RpY2UlMjBsYXclMjBmaXJtc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHdyaXRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHJlYWRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1505663912202-ac22d4cb3707?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bGF3ZmlybXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1674727219372-4ba6644106bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGxhd3llcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1678865310627-129c0980ab6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGF3eWVyc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661559051049-f9e147c7a90b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGxhd3llcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1521066505762-e50557b7b6fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGp1c3RpY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1589391886645-d51941baf7fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGxlZ2FsJTIwZG9jdW1lbnR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661431050026-ce17df0c2a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGp1c3RpY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1468779036391-52341f60b55d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661329930662-19a43503782f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGF3JTIwZmlybXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGF3fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1447023029226-ef8f6b52e3ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGxhd3llcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
];
$randomImage = $backgroundImages[array_rand($backgroundImages)];



//  Initialize error messages
 $emailError = $passwordError = $authError = "";
 $email = "";

//  Handle form submission
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = trim($_POST["email"]);
    $password = $_POST["password"];
    $isValid = true;

     // Validate email
     if (empty($email)) {
    $emailError = "Please enter your registered email address";
    $isValid = false;
 } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Please enter a valid email address";
        $isValid = false;
    }

     // Validate password
    if (empty($password)) {
         $passwordError = "Please input your password";
         $isValid = false;
     }

    if ($isValid) {
        $hashedPassword = hash("sha256", $password);
       $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        if ($stmt) {
            $stmt->bind_param("ss", $email, $hashedPassword);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $_SESSION['email'] = $email;
                header("Location: dashboard.php");
                exit();
            } else {
                // If login fails, set error message in session
                $_SESSION['error'] = "Invalid email or password";
                header("Location: login.php");
                exit();
            }
        }
    }
            }
        

 ?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DepoTrace</title>
    <link rel="icon" type="image/x-icon" href="./depotrace-fevicon.png">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100,0,0&icon_names=visibility" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100,0,0&icon_names=lock" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Modal -->
<!-- <div id="errorModal" class="modal">
    <div class="modal-content">
        <span class="error-icon">✖</span>
        <span class="error-message">Error: Invalid password</span>
    </div>
</div> -->
<!-- Modal -->
<div id="errorModal" class="modal">
    <div class="modal-content">
        <span class="error-icon">✖</span>
        <span class="error-message">Error: Invalid password</span>
    </div>
</div>






<div class="container">
    <!-- Left Section -->
    <div class="left-section" style="background: url('<?php echo $randomImage; ?>') no-repeat center center; background-size: cover;">
        <div class="overlay"></div>
    </div>

    <!-- Right Section (Login Form) -->
    <div class="right-section">
        <div class="login-box">
            <img src="./depotracelogo.png" alt="Logo" class="logo">
            <p class="login-credentials">Enter your login credentials to proceed</p>

          

            <form method="POST">
                

                 <div class="input-group">
                    <i class="fa-regular fa-user"></i>
                    <input type="email" name="email" placeholder="Email" class="inputvalues"  required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"
                </div>
               
                <div id="emailError" class="error-msg"><?php echo $emailError; ?></div>

                <div class="input-group password-group">
                    <i class="fa-solid fa-lock" style="font-size: 16px; opacity: 0.6;"></i>
                    <input type="password" id="password" name="password" placeholder="Password" class="inputvalues" required>
                    <i class="fa-regular fa-eye" id="togglePassword" onclick="togglePassword()"></i>
                </div>
                 <!-- <div id="passwordError" class="error-msg"></div> -->
                 <div id="passwordError" class="error-msg"><?php echo $passwordError; ?></div>

                  <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>

                <div class="login-actions">
                    <button type="submit" class="login-btn">Login</button>
                    <a href="forgotpassword.php" class="forgot-password">Forgot Password?</a>
                 </div>   
            </form>
        </div>
    </div>
</div>

 Footer 
<footer>
    <div class="social-icons">
        <a href="https://www.facebook.com/depotrace" target="_blank">
            <i class="fa-brands fa-square-facebook" style="color: white;"></i>
        </a>
        <a href="https://x.com/i/flow/login?redirect_after_login=%2Fdepotrace" target="_blank">
            <i class="fab fa-twitter" style="color: white;"></i>
        </a>
        <a href="https://www.instagram.com/depotrace/" target="_blank">
            <i class="fab fa-instagram" style="color: white;"></i>
        </a>
    </div>
    <a href="privacy.php" class="privacy-policy">Privacy Policy</a>
    <div class="copyright"><p>&copy; 2025 All rights reserved</p></div>
</footer>

<script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePassword');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}
document.addEventListener("DOMContentLoaded", function () {
    // Check if error session is set (this will come from PHP)
    <?php if (isset($_SESSION['error'])): ?>
        // Display the modal if the error is set
        const errorModal = document.getElementById('errorModal');
        errorModal.style.display = 'flex'; // Show the modal

        // Hide the modal after 5 seconds
        setTimeout(() => {
            errorModal.style.display = 'none';
        }, 5000);

        // Clear the session error message to prevent it from showing on refresh
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
});












</script>



</body>
</html>


<?php
// login.php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        $error = "Both fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } else {
        // Simulate login
        if ($email === "user@example.com" && $password === "pass123") {
            $_SESSION["user"] = $email;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Basic styles */
        body {
            font-family: Arial;
            background: #f3f3f3;
        }
        .login-box {
            width: 350px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px gray;
            border-radius: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        .error {
            color: red;
            margin: 10px 0;
        }
        button {
            background: #28a745;
            border: none;
            color: white;
            padding: 10px;
            width: 100%;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>DEPOTRACE</h2>

    <?php if ($error): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <!-- Use type="text" to avoid browser validation -->
        <input type="text" name="email" placeholder="Email address" autocomplete="off">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>


<form method="POST">
             <div class="input-group">
              <i class="bi bi-person user-icon"></i>
              <input type="email" name="email" placeholder="Email" class="inputvalues"  required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"
            <div id="emailError" class="error-msg"><?php echo $emailError; ?></div>  


                 <!-- Password Input  -->
                <div class="input-group password-group">
                <i class="bi bi-lock"></i> 
                <input type="password" id="password" name="password" placeholder="Password" class="inputvalues" required>
                 <i class= "bi bi-eye" id="togglePassword" onclick="togglePassword()"></i>
                </div>
                <div id="passwordError" class="error-msg"><?php echo $passwordError; ?></div>




                $backgroundImages = [
    "https://plus.unsplash.com/premium_photo-1661333820879-517c5e808bfe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8bGF3eWVyfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1521066505762-e50557b7b6fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGp1c3RpY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1668058723804-d7dcd1ffa4c9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGF3JTIwZmlybXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1681488394409-5614ef55488c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGF3fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1568667256549-094345857637?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bGlicmFyeXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1472173148041-00294f0814a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODF8fGp1c3RpY2UlMjBsYXclMjBmaXJtc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHdyaXRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHJlYWRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1505663912202-ac22d4cb3707?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bGF3ZmlybXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1674727219372-4ba6644106bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGxhd3llcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1678865310627-129c0980ab6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGF3eWVyc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661559051049-f9e147c7a90b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGxhd3llcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1521066505762-e50557b7b6fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGp1c3RpY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1589391886645-d51941baf7fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGxlZ2FsJTIwZG9jdW1lbnR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661431050026-ce17df0c2a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGp1c3RpY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1468779036391-52341f60b55d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661329930662-19a43503782f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGF3JTIwZmlybXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGF3fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1447023029226-ef8f6b52e3ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGxhd3llcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
];
$randomImage = $backgroundImages[array_rand($backgroundImages)];