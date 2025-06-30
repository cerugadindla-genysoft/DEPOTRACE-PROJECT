<?php
session_start();

// ✅ Block unauthenticated users
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

include 'data.php';

$current_page = $_GET['page'] ?? 'dashboard';
$page = basename($current_page); // sanitize
$file_path = __DIR__ . "/pages/{$page}.php";

// ✅ If page is not "dashboard" and file doesn't exist, show only 404 (no layout)
if ($page !== 'dashboard' && !file_exists($file_path)) {
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
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<style>

    /* Default light mode */
.header {
  background-color: #f2f2f2;
  transition: background-color 0.3s ease;
}

/* Dark mode */
body.dark-mode .header {
  background-color: #21295c; 
}

    body.dark-mode {
  --bg-color: #191f45;
  --text-color: #FFE3A3;
    }

    #toggleDark:focus,
#toggleDark:active,
#toggleDark:focus-visible {
  outline: none !important;
  box-shadow: none !important;
  border: none !important;
}



/* Header left-side icon (close/open icon) in dark mode */
body.dark-mode .left-icon,
body.dark-mode #openSidebar i {
    color: white;
}
body.dark-mode .theme-icon i {
  color: white!important; /* icon becomes white in dark mode */
}
/* Default icon color */
#themeToggle i {
  color: #666;
  transition: color 0.3s ease;
}

/* Make icon white when dark mode is active */
body.dark-mode #themeToggle i {
  color: #fff !important;
}
/* Default icon */
/* .sidebar .menu li i {
  color: #33B0FF;
  transition: color 0.3s ease;
} */

/* Keep sidebar icons blue in dark mode */
body.dark-mode .sidebar .menu li i {
    color: #33B0FF !important;
}
body.dark-mode .sidebar .menu li:hover i {
    color: #ffffff !important;
}
/* Default text */
.sidebar .menu li a {
  color: #dcdcdc;
}
/* Dark mode styles only for Create User page */
.menu li:hover {
  background-color: #33B0FF;
}

.menu li:hover a {
  color: white !important; /* text */
}

.menu li:hover i {
  color: white !important; /* icon */
}
body.dark-mode .createuser-content h5 {
  color: #FFF6E0 !important;
}

body.dark-mode .createuser-content p {
  color: #FFF3A3 !important;
}

body.dark-mode .createuser-content button[type="submit"] {
  background-color:  #FFF6E0 !important;
  
}



body.superadmin-createuser.dark-mode .header {
  background-color: #1f1f3d !important;
}


body.dark-mode .left-icon i {
  color: white !important;
}


</style>



<!-- Sidebar -->
<div class="sidebar">
    <div class="logo">
        <img src="./depotracelogo.png" alt="DepotTrace Logo">
    </div>
    <ul class="menu">
        <li style="margin-left: -4.5px;"><a href="dashboard.php?page=dashboard"><i class="fas fa-home"></i> Dashboard</a></li>
        <li><a href="dashboard.php?page=parsedlogs"><i class="fas fa-file-alt"></i> ParsedLogs</a></li>

        <p class="section-title">Session Stats</p>
        <li><a href="dashboard.php?page=daily"><i class="fas fa-calendar-day"></i> Daily</a></li>
        <li><a href="dashboard.php?page=monthly"><i class="fas fa-calendar-week"></i> Monthly</a></li>
        <li><a href="dashboard.php?page=yearly"><i class="fas fa-calendar-alt"></i> Yearly</a></li>

        <p class="section-title">Sessions Overview</p>
        <li><a href="dashboard.php?page=sessions"><i class="fas fa-chart-line"></i> Sessions</a></li>

        <p class="section-title">User Stats</p>
        <li><a href="dashboard.php?page=breakdown"><i class="fas fa-chart-pie"></i> Breakdown</a></li>
        <li><a href="dashboard.php?page=geography"><i class="fas fa-globe"></i> Geography</a></li>

        <p class="section-title">User Management</p>
        <li><a href="dashboard.php?page=team"><i class="fas fa-users"></i> Team</a></li>
        <li><a href="dashboard.php?page=createuser"><i class="fas fa-user-plus"></i> CreateUser</a></li>
        <li><a href="dashboard.php?page=customers"><i class="fas fa-user-friends"></i> Customers</a></li>
    </ul>
</div>

<!-- Main Content -->
<div class="main">

    <!-- Header: always shown -->
    <div class="header">
        <div class="left-icon" id="closeSidebar"  role="button"><i class="fas fa-times"></i></div>
        <div class="left-icon" id="openSidebar" style="display: none;"><i class="fas fa-bars"></i></div>
        <div class="header-right">
            <button id="themeToggle" class="theme-icon">
                <i class="ri-sun-line" style="color:#666"></i>
            </button>
          

            <!-- <div class="profile-wrapper">
                <img src="./profile img.jpeg" alt="Profile" class="profile-img" id="profileImg">
                <div class="logout-popup" id="logoutPopup" onclick="window.location.href='login.php'">
                    Logout
                </div> -->
                <!-- <div class="profile-wrapper">
                <img src="./profile img.jpeg" alt="Profile" class="profile-img" id="profileImg">
                <div class="logout-popup" id="logoutPopup" onclick="window.location.href='login.php'">
                    Logout
                </div> -->
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
if (isset($_FILES['profileImage'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profileImage"]["name"]);

    // Optionally check image type, size etc.
    if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        echo "Profile uploaded successfully.";
        // Save $target_file path in DB if needed
    } else {
        echo "Error uploading file.";
    }
}
?>




     <?php if ($current_page === 'dashboard'): ?> 

    <!-- Dashboard Intro -->
    <div class="dashboard-intro">
        <h3>DASHBOARD</h3>
        <p>Welcome to your dashboard</p>
    </div>

    <!-- Stats Cards -->
    <div class="stats">
        <div class="card">
            <div class="card-header"><h5>Total Users</h5><i class="fas fa-users"></i></div>
            <h3>2905</h3>
            <p class="card-footer">Current Month Users: 120</p>
        </div>
        <div class="card">
            <div class="card-header"><h5>Total Cases</h5><span class="material-symbols-outlined">cases</span></div>
            <h3>1392</h3>
            <p class="card-footer">Current Month Cases: 3</p>
        </div>
        <div class="card">
            <div class="card-header"><h5>Total Sessions</h5><i class="fas fa-file-alt"></i></div>
            <h3>3280</h3>
            <p class="card-footer">Current Month Sessions: 87</p>
        </div>
    </div>

    <!-- Charts -->
    <div class="dashboard-container">
        <div class="chart-section"><canvas id="lineChart" width="400" height="400"></canvas></div>
        <div class="chart-section">
            <h3 style="color:#69b3dd; font-weight:500;">Sessions By Category</h3>
            <canvas id="donutChart" width="60" height="400"></canvas>
        </div>
    </div>

    <?php else: ?>
      <!-- ✅ Include dynamic page -->
      <?php include $file_path; ?>
  <?php endif; ?>


    <!-- <?php $page = $_GET['page'] ?? 'dashboard'; ?> -->
<!-- <body class="<?= $page ?>"> -->

<!-- <?php $page = $_GET['page'] ?? 'dashboard'; ?> -->
<!-- <body class="superadmin-<?= $page ?>"> -->

<!-- <?php $page = $_GET['page'] ?? 'dashboard'; ?> -->
<!-- <body class="<?= $page ?> superadmin-<?= $page ?>"> -->


</div>

<script src="script.js"></script>
</body>
</html>