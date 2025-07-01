<?php
session_start();

// ✅ MySQL connection directly in this file
$host = "localhost";
$user = "root";
$password = ""; // Change this to your actual DB password
$database = "depotrace_logins"; // Replace with your DB name

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ Form submission logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);

    if (empty($email)) {
        $_SESSION['emailError'] = "Please enter your registered email address";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailError'] = "Please enter a valid email address";
    } elseif (!preg_match('/^[a-zA-Z]/', $email)) {
        $_SESSION['emailError'] = "Email must start with a letter";
      } else {
        // ✅ Check if email exists in the table
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
    
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
    

        if ($result->num_rows > 0) {
            // ✅ Email found
            $_SESSION['emailSuccess'] = "Email verified successfully";
            header("Location: dashboard.php");
            exit();
        } else {
            // ❌ Email not found
            $_SESSION['emailError'] = "Invalid email. Please enter a registered email address.";
        }

        $stmt->close();
    }

    header("Location: forgotpassword.php");
    exit();
}
?>
<style>
  input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
  -webkit-box-shadow: 0 0 0px 1000px white inset !important;
  box-shadow: 0 0 0px 1000px white inset !important;
  background-color: white !important;
  color: black !important;
  border: none !important;
  outline: none !important;
  transition: background-color 9999s ease-out, color 9999s ease-out !important;
}

</style>



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


document.addEventListener("DOMContentLoaded", function () {
  const emailInput = document.getElementById("emailInput");
  const emailError = document.getElementById("emailError");
  const inputGroup = emailInput.closest('.input-group');

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const startsWithLetter = /^[a-zA-Z]/;

  function validateEmail() {
    const email = emailInput.value.trim();

    if (!email) {
      showError("Please enter your registered email address");
    } else if (!emailRegex.test(email)) {
      showError("Please enter a valid email address");
    } else if (!startsWithLetter.test(email)) {
      showError("Email must start with a letter");
    } else {
      clearError();
    }
  }

  function showError(message) {
    emailError.style.display = "block";
    emailError.innerHTML = `<span>${message}</span>`;
    inputGroup.classList.add("input-error");
    emailInput.classList.add("input-error");
  }

  function clearError() {
    emailError.style.display = "none";
    emailError.innerHTML = "";
    inputGroup.classList.remove("input-error");
    emailInput.classList.remove("input-error");
  }

  // Real-time validation
  emailInput.addEventListener("input", validateEmail);

  // Also validate on form submit to prevent incorrect data from being submitted
  const form = document.getElementById("forgotPasswordForm");
  form.addEventListener("submit", function (event) {
    const email = emailInput.value.trim();
    if (!emailRegex.test(email) || !startsWithLetter.test(email)) {
      event.preventDefault();
      validateEmail();
    }
  });
});
</script>




  </script>

  <!-- Clear session error after page load -->
  <?php
    unset($_SESSION['emailError']);
  ?>
  </script>
</body>
</html>
