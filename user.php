<?php
session_start();

if (!isset($_SESSION['email']) || $_SESSION['email'] !== 'depotrace.user@gmail.com') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>DepoTrace</title>
    <link rel="icon" type="image/x-icon" href="./depotrace-fevicon.png">
    <link rel="stylesheet" href="user.css">
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
        <li style="margin-left: -4.5px;"><a href="user.php?page=dashboard"><i class="fas fa-home"></i> Dashboard</a></li>
        <li><a href="user.php?page=parsedlogs"><i class="fas fa-file-alt"></i> ParsedLogs</a></li>

        <p class="section-title">Session Stats</p>
        <li><a href="user.php?page=daily"><i class="fas fa-calendar-day"></i> Daily</a></li>
        <li><a href="user.php?page=monthly"><i class="fas fa-calendar-week"></i> Monthly</a></li>
        <li><a href="user.php?page=yearly"><i class="fas fa-calendar-alt"></i> Yearly</a></li>

        <p class="section-title">Sessions Overview</p>
        <li><a href="user.php?page=sessions"><i class="fas fa-chart-line"></i> Sessions</a></li>

        <p class="section-title">User Stats</p>
        <li><a href="user.php?page=breakdown"><i class="fas fa-chart-pie"></i> Breakdown</a></li>
        <li><a href="user.php?page=geography"><i class="fas fa-globe"></i> Geography</a></li>

        
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
                <div class="logout-popup" id="logoutPopup" onclick="window.location.href='login.php'">
                    Logout
                </div>
            </div>
        </div>
    </div>

    <?php
    $current_page = $_GET['page'] ?? 'user'; 
  ?>
  
  <?php
        $page = basename($current_page);
        $file = "user/{$page}.php";
        if (file_exists($file)) {
            include($file);
        } else {
            // echo "<p>Page not found.</p>";
        }
        ?>

  

  


    <script src="script.js"></script>