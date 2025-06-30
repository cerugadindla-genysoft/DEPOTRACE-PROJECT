
<?php
session_start();

// Block unauthenticated access
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>
<?php
if (!isset($_GET['page'])) {
    // Redirect to createuser by default
    header("Location: superadmin.php?page=createuser");
    exit;
}
$current_page = $_GET['page'];
?>

<?php
// session_start();
$current_page = $_GET['page'] ?? 'dashboard';
$page = basename($current_page);
$file = __DIR__ . "/superadmin/{$page}.php";

// 🔁 If file not found, immediately show 404 and stop everything else
if (!file_exists($file)) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>DepoTrace</title>
    <link rel="icon" type="image/x-icon" href="./depotrace-fevicon.png">
    <link rel="stylesheet" href="superadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<style>
    body.dark-mode {
  --bg-color: rgb(17, 17, 54);
  --text-color: #e0d587;
    }

    #toggleDark:focus,
#toggleDark:active,
#toggleDark:focus-visible {
  outline: none !important;
  box-shadow: none !important;
  border: none !important;
}

</style>



<!-- Sidebar -->
<div class="sidebar">
    <div class="logo">
        <img src="./depotracelogo.png" alt="DepotTrace Logo">
    </div>
    <ul class="menu">
    <p class="section-title">User Management</p>
        <li><a href="superadmin.php?page=createuser"><i class="fas fa-user-plus"></i> CreateUser</a></li>
        <li><a href="superadmin.php?page=admin"><i class="fas fa-user-shield"></i> Admin</a></li>
        <li><a href="superadmin.php?page=team"><i class="fas fa-users"></i> Team</a></li>
        <li><a href="superadmin.php?page=customers"><i class="fas fa-user-friends"></i> Customers</a></li>

        
    </ul>
</div>

<!-- Main Content -->
<div class="main">

    <!-- Header: always shown -->
    <div class="header">
        <div class="left-icon" id="closeSidebar"><i class="fas fa-times"></i></div>
        <div class="left-icon" id="openSidebar" style="display: none;"><i class="fas fa-bars"></i></div>
        <div class="header-right">
            <button id="themeToggle" class="theme-icon">
                <i class="ri-sun-line" style="color:#666"></i>
            </button>
            <div class="profile-wrapper">
    <img src="./profile img.jpeg" alt="Profile" class="profile-img" id="profileImg">
    <div class="logout-popup" id="logoutPopup">
        <form id="uploadForm" action="upload_profile.php" method="POST" enctype="multipart/form-data">
            <label for="profileUpload" style="cursor: pointer; display: block; margin-bottom: 8px; color: #333;">Upload Profile</label>
            <input type="file" id="profileUpload" name="profileImage" style="display: none;" onchange="document.getElementById('uploadForm').submit();" />
        </form>
        <!-- <hr style="margin: 6px 0;"> -->
        <!-- <a href="login.php" >Logout</a> -->
        <form id="logoutForm" method="POST" action="logout.php" style="display:none;"></form>
<a href="#" onclick="document.getElementById('logoutForm').submit();">Logout</a>

    </div>
            </div>
        </div>
    </div>

    <?php
    $current_page = $_GET['page'] ?? 'superadmin'; 
  ?>
  
  <?php
        $page = basename($current_page);
        $file = "superadmin/{$page}.php";
        if (file_exists($file)) {
            include($file);
        } else {
            // echo "<p>Page not found.</p>";
        }
        ?>

  

  


    <script src="script.js"></script>