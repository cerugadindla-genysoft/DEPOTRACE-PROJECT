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
dashboard-intro {
    margin-top: 30px;
    margin-bottom: 20px;
    padding-left: 20px;
  }
  
  .dashboard-intro h3 {
    color: #69b3dd;
    font-weight: 300px;
    font-size: 20px;
    margin-left:0px;
  }
  
  .dashboard-intro p {
    color: #69b3dd;
    font-size: 14px;
    margin: 5px 0 0;
  }
  .stats {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
}

/* Individual Card */
.card {
    background: #f2f2f2;
    padding: 20px;
    width: 30%;
    height: 200px;
    border-radius: 8px; /* sharp edges */
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
    text-align: left;
    color: #69b3dd;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header h5 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.card-header i {
    font-size: 20px;
    color: #69b3dd;
}

.card h3 {
    font-size: 23px;
    margin: 10px 0;
    color: #69b3dd;
}

.card-footer {
    font-size: 14px;
    color: #69b3dd;
}
.dashboard-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    padding: 30px;
    gap: 30px;
    flex-wrap: wrap;
}

.chart-section {
    background: #e6e4e4;;
    padding: 20px;
    border-radius: 20px;
    width: 45%;
    min-width: 300px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
}
.chart-section.h3{
    color:#7daac4;
}




.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}

#donutChart {
    width: 300px !important;
    height: 360px !important;
    border-radius: 10px;
    
}

#linechart{
    width: 300px !important;
    height: 300px !important;
}



</style>
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

    <script src="script.js"></script>