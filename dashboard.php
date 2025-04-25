<?php
include 'data.php'; // Import data
$current_page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DepotTrace Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="logo">
        <img src="./depotracelogo.png" alt="DepotTrace Logo">
    </div>
    <ul class="menu">
        <li><a href="dashboard.php?page=dashboard"><i class="fas fa-home"></i> Dashboard</a></li>
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

    <?php if ($current_page === 'dashboard'): ?>
    <!-- Header -->
    <div class="header">
        <div class="left-icon" id="closeSidebar"><i class="fas fa-times"></i></div>
        <div class="left-icon" id="openSidebar" style="display: none;"><i class="fas fa-bars"></i></div>
        <div class="header-right">
            <button id="themeToggle" class="theme-icon"><i class="ri-sun-line" style="color:#666"></i></button>
            <img src="./profile img.jpeg" alt="" class="profile-img">
        </div>
    </div>

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
        <div class="chart-section"><h3 style="color:#69b3dd; font-weight:500;">Sessions By Category</h3><canvas id="donutChart" width="60" height="400"></canvas></div>
    </div>

    <?php else: ?>
        <!-- Include other page content -->
        <?php
        $page = basename($current_page);
        $file = "pages/{$page}.php";
        if (file_exists($file)) {
            include($file);
        } else {
            echo "<p>Page not found.</p>";
        }
        ?>
    <?php endif; ?>

</div>

<script src="script.js"></script>
</body>
</html>
