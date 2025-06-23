<?php
session_start();
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

// $randomImage = $backgroundImages[array_rand($backgroundImages)];
// On GET request: pick a new image and save in session
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $_SESSION['bgImage'] = $backgroundImages[array_rand($backgroundImages)];
}

// Always use the session image (set either on GET or preserved on POST)
$randomImage = $_SESSION['bgImage'] ?? $backgroundImages[0];






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










if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['emailError'] = null;
    $_SESSION['passwordError'] = null;
    $_SESSION['authError'] = null;

    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $isValid = true;

    if (empty($email)) {
        $_SESSION['emailError'] = "Please enter your registered email  address";
        $isValid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailError'] = "Please enter a valid email address";
        $isValid = false;
    }

    if (empty($password)) {
        $_SESSION['passwordError'] = "Please input your password";
        $isValid = false;
    }

    if ($isValid) {
        $hashedPassword = hash("sha256", $password);
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $hashedPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $_SESSION["email"] = $email;
            header("Location: dashboard.php");
            exit();
             } else {
            $_SESSION['authError'] = "error : Invalid password";
        }
    }

    // Reload the page so errors are visible only once
    header("Location: login.php");
    exit();
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


<?php if (isset($_SESSION['authError'])): ?>
    <div id="errorModal" class="modal show">
        <div class="modal-content">
            <span class="error-icon">X</span>
            <p class="error-message"><?= $_SESSION['authError']; ?></p>
        </div>
    </div>
    <?php unset($_SESSION['authError']); // clear error after showing ?>
<?php endif; ?>


<div class="container">
    <!-- Left Section -->
   <div  class="left-section" style="background: url('<?php echo $randomImage; ?>') no-repeat center center; background-size: cover;">
        <div class="overlay"></div>
    </div>
   

    <!-- Right Section (Login Form) -->
     
    <div class="right-section">
        <div class="login-box">
            <img src="./depotracelogo.png" alt="Logo" class="logo">
            <p class="login-credentials">Enter your login credentials to proceed</p>

         

           
            <form method="POST" action="login.php" novalidate>
            <div class="input-group <?php echo isset($_SESSION['emailError']) ? 'input-error' : ''; ?>">
    <i class="bi bi-person user-icon"></i>
    <input type="email" name="email" placeholder="Email" class="inputvalues"
                        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                </div>
              
                <?php if (isset($_SESSION['emailError'])): ?>
    <div id="emailError" class="error-msg">
        <span>Please enter your registered email</span>
        <br>
        <span>address</span>
    </div>
<?php endif; ?>


              
   





                <div class="input-group password-group <?php echo isset($_SESSION['passwordError']) ? 'input-error' : ''; ?>">
                    <i class="bi bi-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" class="inputvalues">
                    <i class="bi bi-eye" id="togglePassword" onclick="togglePassword()"></i>
                </div>
                <?php if (isset($_SESSION['passwordError'])): ?>
                    <div id="passwordError" class="error-msg"><?php echo $_SESSION['passwordError']; ?></div>
                <?php endif; ?>

                <?php if (isset($_SESSION['authError'])): ?>
                    <div id="authError" class="error-msg"><?php echo $_SESSION['authError']; ?></div>
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

// error messages

document.addEventListener("DOMContentLoaded", function () {
    const emailInput = document.querySelector("input[name='email']");
    const loginButton = document.querySelector(".login-btn");

    // Create or get error message element
    let emailErrorDiv = document.getElementById("emailError");
    if (!emailErrorDiv) {
        emailErrorDiv = document.createElement("div");
        emailErrorDiv.id = "emailError";
        emailErrorDiv.className = "error-msg";
        emailInput.parentElement.insertAdjacentElement("afterend", emailErrorDiv);
    }

    emailInput.addEventListener("input", function () {
        const value = emailInput.value.trim();
        const atIndex = value.indexOf("@");

        // Extract local part (before @), or use full value if @ not typed yet
        let localPart = atIndex !== -1 ? value.substring(0, atIndex) : value;

        // Check for errors
        const startsWithAt = value.startsWith("@");
        const invalidLocalPart = !/^[a-zA-Z]*$/.test(localPart);

        // Update text color to black
        emailInput.style.color = "black";

        if (startsWithAt || invalidLocalPart) {
            emailErrorDiv.textContent = "Please enter a valid email address ";
            emailInput.classList.add("input-error");
        } else {
            emailErrorDiv.textContent = "";
            emailInput.classList.remove("input-error");
        }
    });
});


     
// popup model
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("errorModal");
        if (modal) {
            setTimeout(() => {
                modal.style.display = "none";
            }, 5000); // hide after 3 seconds
        }
    });

// no page Reload






   




    
// Clear session error messages on page load
document.addEventListener("DOMContentLoaded", function () {
    <?php 
    // After displaying errors, unset them to avoid them showing again after refresh
    unset($_SESSION['emailError']);
    unset($_SESSION['passwordError']);
    unset($_SESSION['authError']);
    ?>
});




    

       

    














</script>



</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create User</title>
  <style>
    body {
      font-family: 'popins', sans-serif;
      background-color: #fff;
      margin: 0px;
    }

    h2 {
      color: #2AA9E0;
      font-weight: bold;
      margin-bottom: 5px;
    }

    p {
      color: #2AA9E0;
      margin-bottom: 30px;
    }

    .container {
      max-width: 1100px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
      
    }

    .form-row {
      display: flex;
      gap: 20px;
    }
 
   .form-row.full-width {
    flex-direction: column;
}

   .form-row.full-width input,
   .form-row.full-width select {
  width: 100%;
}

    

    
    input,
    select {
      background-color: #f2f2f2;
      border: none;
      border-bottom: 2px solid #ccc;
      border-radius: 8px 8px 0 0;
      padding: 18px 16px;
      font-size: 14px;
      width: 50%;
      box-sizing: border-box;
      color: #333;
    }

    .button-row {
      justify-content: flex-end;
    }


  
    button {
      padding: 12px 24px;
      background-color: #2AA9E0;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #1f90c0;
    }
    input:focus,
   select:focus {
    outline: none;            /* removes the default blue/black outline */
    border-bottom-color: #999; /* keep the same border color or customize */
    box-shadow: none;         /* removes any shadow */
}

  </style>
</head>
<body>
  <div class="container">
    <h2>CREATE USER</h2>
    <p>Create a New User Profile</p>
    <form>
      <div class="form-row">
        <input type="text" placeholder="First Name *" required />
        <input type="text" placeholder="Last Name *" required />
      </div>
      <div class="form-row">
        <input type="text" placeholder="User Name *" required />
        <input type="password" placeholder="Password *" required />
      </div>
      <div class="form-row">
        <input type="text" placeholder="Organization Name *" required />
        <select required>
          <option value="" disabled selected>Role *</option>
          <option>Admin</option>
          <option>User</option>
        </select>
      </div>
      <div class="form-row">
        <select required>
          <option value="" disabled selected>Status *</option>
          <option>Active</option>
          <option>Inactive</option>
        </select>
        <input type="text" placeholder="Occupation" />
      </div>
      <div class="form-row full-width">
        <input type="email" placeholder="Email *" required />
      </div>
      <div class="form-row full-width">
        <input type="tel" placeholder="Phone Number *" required />
      </div>
      <div class="form-row full-width">
        <input type="text" placeholder="City" />
      </div>
      <div class="form-row full-width">
        <select>
          <option value="" disabled selected>Country</option>
          <option>India</option>
          <option>USA</option>
        </select>
      </div>
      <div class="form-row full-width">
        <select>
          <option value="" disabled selected>State</option>
          <option>Maharashtra</option>
          <option>California</option>
        </select>
      </div>
      <div class="form-row button-row">
        <button type="submit">CREATE NEW USER</button>
      </div>
    </form>
  </div>
</body>
</html>