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


// Random background images array
$backgroundImages = [
    "https://plus.unsplash.com/premium_photo-1661333820879-517c5e808bfe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8bGF3eWVyfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1521066505762-e50557b7b6fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGp1c3RpY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1681488394409-5614ef55488c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGF3fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGF3fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1505664063603-28e48ca204eb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGxhd3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1668058723804-d7dcd1ffa4c9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGF3JTIwZmlybXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGF3JTIwZmlybXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661329930662-19a43503782f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1473186505569-9c61870c11f9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661769599827-d3cb736e1da8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1472173148041-00294f0814a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODF8fGp1c3RpY2UlMjBsYXclMjBmaXJtc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1568667256549-094345857637?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bGlicmFyeXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHdyaXRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Ym9va3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1674727219372-4ba6644106bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGxhd3llcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1447023029226-ef8f6b52e3ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGxhd3llcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1678865310627-129c0980ab6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGF3eWVyc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661559051049-f9e147c7a90b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGxhd3llcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661333820879-517c5e808bfe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8bGF3eWVyfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661431050026-ce17df0c2a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGp1c3RpY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1468779036391-52341f60b55d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661769599827-d3cb736e1da8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1423592707957-3b212afa6733?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bGF3fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1587740896339-96a76170508d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8anVzdGljZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
    "https://plus.unsplash.com/premium_photo-1661329930662-19a43503782f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGxlZ2FsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",





];
$randomImage = $backgroundImages[array_rand($backgroundImages)];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Regular expression to check if email and password only contain alphanumeric characters
    $emailPattern = '/^[a-zA-Z0-9]+$/';  // Only alphanumeric
    $passwordPattern = '/^[a-zA-Z0-9]+$/';  // Only alphanumeric

    // Validate email
    if (!preg_match($emailPattern, $email)) {
        $error = "Invalid email format. Only alphanumeric characters are allowed.";
    }
    // Validate password
    elseif (!preg_match($passwordPattern, $password)) {
        $error = "Invalid password format. Only alphanumeric characters are allowed.";
    }
    else {
        // Hash the input password with SHA2 (256-bit) to match the DB
        $hashedPassword = hash("sha256", $password);

        // Prepare the SQL statement to avoid SQL injection
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";

        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            die('MySQL prepare failed: ' . $conn->error);
        }

        // Bind the parameters and execute the statement
        $stmt->bind_param("ss", $email, $hashedPassword);
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows === 1) {
            $_SESSION['email'] = $email; // Store session
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>











 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Page</title>
     <link rel="stylesheet" href="login.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100,0,0&icon_names=visibility" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100,0,0&icon_names=lock" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 </head>
 <body>
 
     <div class="container">
         <!-- Left Section -->
         <div class="left-section" style="background: url('<?php echo $randomImage; ?>') no-repeat center center; background-size: cover;">
    <div class="overlay"></div>
</div>

<!-- 
         <div class="left-section">
             <div class="overlay"></div>
         </div>
          -->
         <!-- Right Section (Login Form) -->
         <div class="right-section">
             <div class="login-box">
                 <img src="./depotracelogo.png" alt="Logo" class="logo">
                 
                 <p class="login-credentials" >Enter your login credentials to proceed</p>
 
                 <!-- Show Error Alert -->
                 <?php if (!empty($error)) { ?>
                     <script>
                         alert("<?php echo $error; ?>");
                     </script>
                 <?php } ?>
 
                 <form method="POST">
                     <div class="input-group">
                         <!-- <i class="fa-solid fa-user"></i> -->
                         <i class="fa-regular fa-user"></i>
                         <input type="email" name="email" placeholder="Email" class="inputvalues" required>
                     </div>
                     
                     <div class="input-group password-group">
  <i class="fa-solid fa-lock"></i>
  <input type="password" id="password" name="password" placeholder="Password" class="inputvalues" required>
  <i class="fa-solid fa-eye" id="togglePassword" onclick="togglePassword()"></i>
</div>


                     
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
     
     <!-- Footer -->
    
<footer>
    <div class="social-icons">
        <a href="https://www.facebook.com/depotrace" target="_blank">
            <i class="fa-brands fa-square-facebook"style="color: white;"></i>
        </a>
        <a href="https://x.com/i/flow/login?redirect_after_login=%2Fdepotrace" target="_blank">
            <i class="fab fa-twitter"style="color: white;"></i>
        </a>
        <a href="https://www.instagram.com/depotrace/" target="_blank">
            <i class="fab fa-instagram" style="color: white;"></i>
        </a>
    </div>
    <a href="privacy.php" class="privacy-policy">Privacy Policy</a>
    <div class="copyright"><p>&copy; 2025 All rights reserved </p></div>
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
</script>


     



 </body>
 </html>