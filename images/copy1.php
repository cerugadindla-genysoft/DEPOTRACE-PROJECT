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
         $passwordError = "Please enter your password";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>


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

          

           
          <!-- EMAIL FIELD -->
          <form method="POST" action="login.php" novalidate>

<div class="input-group <?php echo !empty($emailError) ? 'input-error' : ''; ?>">
    <i class="bi bi-person user-icon"></i>
    <input type="email" name="email" placeholder="Email" class="inputvalues"
        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
</div>
<div id="emailError" class="error-msg"><?php echo $emailError; ?></div>

<!-- PASSWORD FIELD -->
<div class="input-group password-group <?php echo !empty($passwordError) ? 'input-error' : ''; ?>">
    <i class="bi bi-lock"></i>
    <input type="password" id="password" name="password" placeholder="Password" class="inputvalues">
    <i class="bi bi-eye" id="togglePassword" onclick="togglePassword()"></i>
</div>
<div id="passwordError" class="error-msg"><?php echo $passwordError; ?></div>



 <!-- LOGIN ERROR -->
 <?php if (!empty($_SESSION['error'])): ?>
                <div class="error-msg"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
            <?php endif; ?>
                
            
        
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
    <!-- <a href="privacy.php" class="privacy-policy">Privacy Policy</a> -->
    <a href="privacy.php" target="_blank" class="privacy-policy">Privacy Policy</a>
    <div class="copyright"><p>&copy; 2025 All rights reserved</p></div>
</footer>

<script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePassword');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('bi-eye');
        toggleIcon.classList.add('bi-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('bi-eye-slash');
        toggleIcon.classList.add('bi-eye');
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
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    let isValid = true;

    // Email validation: must not start with special char or digit
    if (!/^[a-zA-Z][a-zA-Z0-9._%+-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(emailValue)) {
      email.classList.add('error');
      emailError.style.display = 'block';
      isValid = false;
    } else {
      email.classList.remove('error');
      emailError.style.display = 'none';
    }

    // Password should not be empty
    if (passwordValue === '') {
      password.classList.add('error');
      passwordError.style.display = 'block';
      isValid = false;
    } else {
      password.classList.remove('error');
      passwordError.style.display = 'none';
    }

    if (isValid) {
      alert('Login successful (for demo)');
      // Submit to backend here
    }
  });















</script>



</body>
</html>




<!-- forgot password -->
 <?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailError'] = "Please enter your registered email address";
    } else {
        // You can handle actual email reset logic here
        header("Location: dashboard.php"); // or reset-confirmation.php
        exit();
    }

    // Redirect to avoid form resubmission on refresh
    header("Location: forgotpassword.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DepoTrace</title>
  <link rel="icon" type="image/x-icon" href="./depotrace-fevicon.png">
  <link rel="stylesheet" href="forgotpassword.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="left-section">

      <!-- Left blue area -->
    </div>
    <div class="right-section">
      <div class="login-box">
        <img src="./depotracelogo.png" alt="DEPOTRACE" class="logo">
        <p class="instruction">
    Please enter your registered email to reset
    your password 
</p>

<!-- 
        <form method="POST">
  <div class="input-group">
  <i class="bi bi-person user-icon"></i>
    <input type="email" name="email" placeholder="Email" class="inputvalues" required>
  </div> -->
 
  <form id="forgotPasswordForm" method="POST" action="" novalidate>
  <div class="input-group <?php echo isset($_SESSION['emailError']) ? 'input-error' : ''; ?>">
    <i class="bi bi-person user-icon"></i>
    <input type="email" id="emailInput" name="email" placeholder="Email" class="inputvalues"
      value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
  </div>

  <div id="emailError" class="error-msg" style="<?php echo isset($_SESSION['emailError']) ? '' : 'display:none;'; ?>">
    <span><?php echo $_SESSION['emailError'] ?? ''; ?></span>
  </div>


              



              
     

          <div class="button-group">
            <button type="submit" class="reset-btn">Reset</button>
            <a href="login.php" class="login-btn">Go to Login</a>
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
    <!-- <a href="privacy.php" class="privacy-policy">Privacy Policy</a> -->
    <a href="privacy.php" target="_blank" class="privacy-policy">Privacy Policy</a>
    <div class="copyright"><p>&copy; 2025 All rights reserved</p></div>
</footer>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <script>
const inputGroup = emailInput.closest('.input-group');

if (!email || !emailRegex.test(email)) {
  event.preventDefault();
  emailError.style.display = "block";
  emailError.innerHTML = "<span>Please enter your registered email address</span>";
  emailInput.classList.add("input-error");
  inputGroup.classList.add("input-error"); // Add to container
} else {
  emailError.style.display = "none";
  emailInput.classList.remove("input-error");
  inputGroup.classList.remove("input-error");
}



  </script>

  <!-- Clear session error after page load -->
  <?php
    unset($_SESSION['emailError']);
  ?>
  </script>
</body>
</html>
