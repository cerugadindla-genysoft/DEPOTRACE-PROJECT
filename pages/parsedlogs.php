
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .team-header {
      padding: 20px;
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
    .team-header h2{
      color: #33B0F7;
      font-weight: 800;
      font-size:14px;
      margin-bottom: 5px;
      font-family: Poppins, sans-serif;
    }

    .team-header p {
      color: #33B0F7;
      font-size: 12px;
      margin: 0;
    }

    .team-container {
      margin: 0 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
     
    }

    .team-toolbar {
      display: flex;
      gap: 16px;
      padding: 12px 18px;
      color: #33B0F7;
      font-weight: 500;
      font-size: 11px;
      align-items: center;
      background-color: white;
      position: relative;
    }

    .toolbar-button {
      display: flex;
      align-items: center;
      gap: 6px;
      cursor: pointer;
      position: relative;
    }

    .toolbar-button i {
      font-size: 14px;
    }

    .density-dropdown {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      margin-top: 8px;
      background-color: white;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      border-radius: 8px;
      z-index: 999;
      min-width: 180px;
      padding: 6px 0;
    }

    .dropdown-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 16px;
      font-size: 14px;
      color: #222;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    .dropdown-item:hover {
      background-color: #f2f2f2;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 14px;
    }

    thead {
      background-color: #f5f5f5;
    }

    th, td {
      padding: 10px 8px;
      width: 18px;
      border-bottom: 1px solid #eee;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden;
      font-weight: 400;
    }

    th {
      color: #33B0F7;
      text-align: left;
    }
    tbody tr:hover {
  background-color: #f5f5f5;
}

    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 13px;
      gap: 20px;
      padding: 14px 18px;
      border-top: 1px solid #eee;
      background-color: #f0f0f0;
      
    }

    .pagination select {
      border: none;
      background: transparent;
      font-size: 13px;
    }

    .pagination .nav-buttons {
      display: flex;
      gap: 12px;
      align-items: center;
    }

    .pagination .nav-buttons i {
      cursor: pointer;
      color: #666;
    }
    .export-dropdown {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  margin-top: 8px;
  background-color: white;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  z-index: 999;
  min-width: 180px;
  padding: 6px 0;
}

.export-dropdown .dropdown-item {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px 16px;
  font-size: 14px;
  color: #222;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.export-dropdown .dropdown-item:hover {
  background-color: #f2f2f2;
}
.column-dropdown {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  margin-top: 8px;
  background-color: white;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  border-radius: 8px;
  z-index: 999;
  width: 220px;
  padding: 10px;
  font-family: Poppins, sans-serif;
}

.column-search {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  font-size: 14px;
  border: none;
  border-bottom: 1px solid #ccc;
  outline: none;
}

.column-list {
  max-height: 200px;
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.column-list label {
  font-size: 14px;
  color: #999;
  display: flex;
  align-items: center;
  gap: 10px;
}

.column-list input[type="checkbox"] {
  accent-color: #33B0F7;
}

.column-actions {
  display: flex;
  justify-content: space-between;
  margin-top: 12px;
  font-size: 12px;
  color: #ccc;
  font-weight: 600;
  cursor: pointer;
}
.table-wrapper {
  max-height: 400px; /* Adjust height as needed */
  overflow-y: auto;
  border-top: 1px solid #eee;
  border-bottom: 1px solid #eee;
}
thead th {
  position: sticky;
  top: 0;
  background-color: #f5f5f5;
  z-index: 2;
 
}
.toolbar-button {
      position: relative;
      display: inline-block;
      font-size: 14px;
      color: #33B0F7;
      font-weight: 500;
      cursor: pointer;
    }

    .column-dropdown {
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      width: 250px;
      background-color: #fff;
      padding: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .column-search {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      margin-bottom: 10px;
      border: none;
      border-bottom: 1px solid #ccc;
      outline: none;
    }

    .column-list {
      max-height: 300px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .column-toggle {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 14px;
      color: #999;
    }

    /* Toggle Switch */
    .switch {
      position: relative;
      display: inline-block;
      width: 28px;
      height: 16px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: #ccc;
      transition: 0.4s;
      border-radius: 34px;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 12px;
      width: 14px;
      left: 2px;
      bottom: 2px;
      background-color: white;
      transition: 0.4s;
      border-radius: 50%;
    }

    input:checked + .slider {
      background-color:#6c787e;
    }

    input:checked + .slider:before {
      transform: translateX(12px);
    }

    .column-actions {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
      font-size: 12px;
      color: #ccc;
      font-weight: 600;
      cursor: pointer;
    }
    .team-toolbar {
  font-size: 11px; /* Reduce default font size of toolbar items */
}

.toolbar-button {
  font-size: 11px; /* Smaller text for COLUMNS, FILTERS, DENSITY, EXPORT */
  gap: 4px;
}

.toolbar-button i {
  font-size: 12px; /* Smaller icons */
}
/* Smaller switch for clean look */
.switch {
  position: relative;
  display: inline-block;
  width: 30px;
  height: 14px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: #999; /* left = visible */
  transition: 0.3s;
  border-radius: 14px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 10px;
  width: 10px;
  left: 2px;
  bottom: 2px;
  background-color: white;
  transition: 0.3s;
  border-radius: 50%;
}

/* Right side = HIDE (gray background) */
.switch input:checked + .slider {
  background-color: #dcdcdc;
}

.switch input:checked + .slider:before {
  transform: translateX(16px);
}
.role-badge {
  display: inline-block;
  background-color: #33B0F7; /* Blue background */
  color: white;
  padding: 14px 14px;
  border-radius: 3px;
  font-size: 13.7143px;
  font-weight: 500;
  text-align: center;
  width: 100%;
  color: #e0e0e0;
  font-family: poppins, sans-serif;
}
/* Prevent layout collapse when all columns are hidden */
.table-wrapper table {
  min-height: 200px; /* Adjust this as needed */
  position: relative;
}

/* Optional: show placeholder row if table appears empty */
.table-wrapper table tbody:empty::before {
  content: "All columns are hidden";
  display: block;
  text-align: center;
  padding: 60px 0;
  color: #999;
  font-size: 14px;
}
/* DENSITY STYLES */
.table-density-compact td, 
.table-density-compact th {
  padding: 4px 6px;
  font-size: 12px;
}

.table-density-standard td, 
.table-density-standard th {
  padding: 10px 8px;
  font-size: 14px;
}

.table-density-comfortable td, 
.table-density-comfortable th {
  padding: 16px 10px;
  font-size: 16px;
}
.filter-dropdown {
  display: none;
  position: absolute;
  top: 40px; /* adjust based on toolbar height */
  left: 20px; /* adjust to align under FILTERS button */
  background: white;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  padding: 15px;
  border-radius: 8px;
  z-index: 1000;
  width: 650px;
  font-family: 'Roboto', sans-serif;
}

.filter-row {
  display: flex;
  align-items: flex-end;
  gap: 15px;
}

.filter-remove {
  cursor: pointer;
  font-size: 14px;
  color: #333;
  margin-top: 20px;
}

.filter-group {
  display: flex;
  flex-direction: column;
  flex: 1;
  /* margin-right: 12px; */
}

.filter-group label {
  font-size: 12px;
  color: #666;
  margin-bottom: 4px;
  margin-left: 12px;
}

.filter-group select,
.filter-group input {
  padding: 6px 10px;
  border: none;
  border-bottom: 1px solid #ccc;
  font-size: 14px;
  background: transparent;
  outline: none;
  color: #333;
}

.filter-dropdown.show {
  display: block;
}
.toolbar-button {
  position: relative;
  display: inline-block;
  cursor: pointer;
}
/* Optional: hide dropdown initially */
.density-dropdown {
  display: none;
  position: absolute;
  background: white;
  border: 1px solid #ccc;
  z-index: 1000;
}

/* Show on active */
.toolbar-button.active .density-dropdown {
  display: block;
}

/* Density classes for table rows */
.table-row.compact td {
  padding: 4px 6px;
}
.table-row.standard td {
  padding: 8px 12px;
}
.table-row.comfortable td {
  padding: 14px 20px;
}
.header-cell {
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
  padding: 6px 8px;
  cursor: pointer;
}

.header-icons {
  opacity: 0;
  display: flex;
  gap: 12px;
  transition: opacity 0.2s ease;
  font-size: 14px;
  color: #aaa;
}

.header-cell.active .header-icons {
  opacity: 1;
}

.header-cell span {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 110px;
  color: #0099ff;
}






/*  */
.header-cell {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 6px 8px;
  position: relative;
  cursor: pointer;
}

.header-icons {
  display: flex;
  gap: 12px;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.2s ease;
}

.header-cell:hover .header-icons {
  opacity: 1;
  visibility: visible;
}

.header-icons i {
  font-size: 14px;
  color: #aaa;
  cursor: pointer;
}

.icon-wrapper {
  position: relative;
}

.menu-icon .dropdown-menu {
  display: none;
  position: absolute;
  top: 110%;
  right: 0;
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  border-radius: 8px;
  min-width: 160px;
  z-index: 999;
  padding: 6px 0;
  font-size: 14px;
}

.dropdown-item {
  padding: 8px 16px;
  cursor: pointer;
  color: #333;
  white-space: nowrap;
}

.dropdown-item:hover {
  background-color: #f5f5f5;
}

.dropdown-item.disabled {
  color: #bbb;
  cursor: default;
  background-color: transparent;
}


.header-cell {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 6px 8px;
  position: relative;
}

.header-icons {
  display: flex;
  gap: 12px;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.2s ease;
}

.header-cell:hover .header-icons {
  opacity: 1;
  visibility: visible;
}

.header-icons i {
  font-size: 14px;
  color: #aaa;
  cursor: pointer;
}

.icon-wrapper {
  position: relative;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 120%;
  right: 0;
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  border-radius: 8px;
  min-width: 160px;
  z-index: 999;
  padding: 6px 0;
  font-size: 14px;
}

.dropdown-item {
  padding: 8px 16px;
  cursor: pointer;
  color: #333;
  white-space: nowrap;
}

.dropdown-item:hover {
  background-color: #f5f5f5;
}

.dropdown-item.disabled {
  color: #bbb;
  cursor: default;
  background-color: transparent;
}
.table-wrapper {
  max-height: 80vh;     /* Adjust as needed */
  overflow: auto;       /* Enables scrollbars */
  position: relative;   /* Needed for dropdown positioning */
}
table, th, td {
  overflow: visible !important;
  position: relative;   /* Allow dropdown positioning relative to th */
}

/* table {
  overflow: visible !important;
}

th {
  overflow: visible !important;
  position: relative;
} */
.dropdown-menu {
  display: none;
  position: absolute;
  top: calc(100% + 6px); /* Below the icon */
  right: 0;
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  border-radius: 8px;
  min-width: 160px;
  z-index: 9999; /* Ensure it's on top */
  padding: 6px 0;
  font-size: 14px;
  white-space: nowrap;
}
.dropdown-menu {
  top: calc(100% + 8px);
  right: -4px; /* Adjust as needed to align better */
}
/* .table-wrapper {
  position: relative;
  overflow: visible;
}

table, th {
  overflow: visible;
} */
.dropdown-menu {
  display: none;
  position: absolute;
  top: calc(100% + 6px); /* Below the icon */
  left: auto;
  right: 0px; /* Align to the right edge of the icon */
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  border-radius: 8px;
  min-width: 90px!important;
  z-index: 9999;
  padding: 6px 0;
  font-size: 3.7143px;
  padding: 8px,0px;
  font-family: poppins,sans-serif;
  font-weight: 400;
  line-height: 1.2;
  align-items: center;
}
.dropdown-item.active {
  color: #aaa; /* light background */
  font-weight: 400;
}
/* .icon-wrapper {
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 8px;
  height: 18px;
  border-radius: 50%;
  transition: background-color 0.2s;
  cursor: pointer;
}

.icon-wrapper:hover {
  background-color: #e0e0e0; /* Light grey hover */
  html, body {
  height: 100%;
  overflow: auto;
}
body, html, * {
  user-select: none !important;
  caret-color: transparent !important;
}
input, textarea {
  user-select: text !important;
  caret-color: auto !important;
}
/* darkmode functionality */
body.dark-mode {
  background-color: #12172C;
  color: #e0e0e0;
}

/* Header */
body.dark-mode .team-header h2 {
  color: #FFF6E0;
}
body.dark-mode .team-header p {
  color: #FFE3A3;
}

/* Container */
body.dark-mode .team-container {
  border-color: #21295c;
  background-color: #21295c;
}

/* Toolbar */
body.dark-mode .team-toolbar {
  background-color: #191f45;
  color: #33B0F7;
}
body.dark-mode .team-toolbar .toolbar-button {
  color: #33B0F7;
}
body.dark-mode .toolbar-button i {
  color: #33B0F7;
}

/* Table */
body.dark-mode table thead {
  background-color: #191f45;
}
body.dark-mode th {
  color: #33B0F7;
}
body.dark-mode td {
  color: #e0e0e0;
}
body.dark-mode table tbody tr {
  background-color: #1a1d2e;
}
body.dark-mode tbody tr:hover {
  background-color: #2c2f45;
}

/* Role badge */
body.dark-mode .role-badge {
  background-color: #33B0F7;
  color: white;
}

/* Status column */
body.dark-mode .col-status span {
  color: green !important;
}

/* Preserve other spans (like name, email) as white */
body.dark-mode td span:not(.col-status span) {
  color: white !important;
}

/* Dropdowns */
body.dark-mode .dropdown-menu,
body.dark-mode .column-dropdown,
body.dark-mode .filter-dropdown,
body.dark-mode .density-dropdown {
  background-color: #121212;
  color: #f2f2f2;
  /* border-color: #444; */
}
body.dark-mode .dropdown-item {
  color: #f2f2f2;
}
body.dark-mode .dropdown-item:hover {
  background-color: #333;
}

/* Column list labels inside dropdown */
body.dark-mode .column-list label {
  color: #ddd;
}

/* Pagination select */
body.dark-mode .pagination {
  background-color: #191f45;
  color: #f2f2f2;
}
body.dark-mode .pagination select {
  background: transparent;
  color: #f2f2f2;
}
/* Pagination in dark mode */
body.dark-mode .pagination {
  background-color: #191f45;
  color: #f2f2f2;
  border-top: 1px solid #2f3454;
}

body.dark-mode .pagination select {
  background-color: #191f45;
  color: #f2f2f2;
  border: none;
}

body.dark-mode .pagination .nav-buttons i {
  color: #f2f2f2;
}
/* Hover effect for dropdown select */
body.dark-mode .pagination select:hover {
  background-color: #1e1e1e;
  border-radius: 4px;
}

/* Fix for table header not applying dark mode */
/* Dark mode table header fix */
body.dark-mode .table-wrapper thead {
  background-color: #191f45 !important;
}

body.dark-mode .table-wrapper thead tr {
  background-color: #191f45 !important;
}

body.dark-mode .table-wrapper thead th {
  background-color: #191f45 !important;
  color: #FFF6E0 !important;
  border-bottom: 1px solid #2c2f45;
}

body.dark-mode .table-wrapper .header-cell {
  background-color: transparent !important;
}

body.dark-mode .table-wrapper .header-cell span {
  color: #FFF6E0 !important;
}

body.dark-mode .table-wrapper .icon-wrapper i {
  color: #FFF6E0 !important;

}
/* Remove top white border line above the table */
body.dark-mode .team-toolbar {
  border-bottom: none !important;
}

/* Match thead and headers with #12172C background */
body.dark-mode .table-wrapper,
body.dark-mode .table-wrapper thead,
body.dark-mode .table-wrapper thead tr,
body.dark-mode .table-wrapper thead th {
  background-color:  #191f45 !important;
  border: none !important;
}
body.dark-mode .team-toolbar {
  background-color: #12172C !important;
  border-bottom: none !important;
  border: 1px solid rgba(81, 81, 81, 1);
}
body.dark-mode table tbody tr {
  border-bottom: 1px solid #aaa !important;
}

body.dark-mode table tbody tr {
  border-bottom:1px solid rgba(81, 81, 81, 1);
}

/* 1. Outer table border */
body.dark-mode table {
  /* border: 1px solid rgba(81, 81, 81, 1); */
  border-collapse: collapse; /* ensures borders don’t double */
}
/* 2. Optional: Keep only bottom border for rows (soft grey) */
body.dark-mode table tbody tr {
  border-bottom: 1px solid rgba(81, 81, 81, 1);
}
/* Remove ALL default borders from table cells */
body.dark-mode table,
body.dark-mode table * {
  border: none !important;
  border-color: transparent !important;
}

/* Add soft grey bottom line only for each row */
body.dark-mode table tbody tr {
  border-bottom: 1px solid #2c2f45 !important;
}

/* Optional: Soft outer border for entire table */
body.dark-mode table {
  border: 1px solid #2c2f45 !important;
  border-collapse: collapse;
}
/* Export dropdown menu container */
body.dark-mode .export-dropdown {
  background-color: #121212 !important;
  color: #f2f2f2 !important;
  border: 1px solid #2c2f45 !important;
}

/* Export dropdown menu items */
body.dark-mode .export-dropdown .dropdown-item {
  color: #f2f2f2 !important;
}

/* Hover effect for export dropdown items */
body.dark-mode .export-dropdown .dropdown-item:hover {
  background-color: #333 !important;
}
body.dark-mode .density-icon {
  color: #ccc !important;
}



/* Ensure options have dark background and white text */
body.dark-mode select option {
  background-color: #1e1e1e;
  color: #ffffff;
}

/* Filter dropdown section: labels and values */
body.dark-mode .filter-dropdown,
body.dark-mode .filter-row {
  color: #ffffff;
  background-color: #1e1e1e;
  border-color: #444;
}
/* Density dropdown background and text */
body.dark-mode .density-dropdown {
  background-color: #1e1e1e;
  color: #ffffff;
  border: 1px solid #444;
}

/* Icons inside density dropdown */
body.dark-mode .density-dropdown i {
  color: #ffffff;
}

/* Optional: Highlight selected option */
body.dark-mode .density-dropdown .selected {
  background-color:#1e1e1e;
  color: #ffffff;
}
body.dark-mode .density-dropdown .dropdown-item:hover {
  background-color: #333;
}
/* Make placeholder text white too */
body.dark-mode .filter-dropdown input::placeholder {
  color: #ffffff !important;
}
body.dark-mode .filter-dropdown label,
body.dark-mode .filter-dropdown input,
body.dark-mode .filter-dropdown select {
  color: #ffffff !important;
}
body.dark-mode .filter-dropdown button,
body.dark-mode .filter-dropdown span {
  color: #ffffff !important;
}
.material-icons {
  vertical-align: middle;
  /* font-size: 28px; */
  margin-right: 0px;
  color: #2196f3; /* Matches the blue in the image */
}


  </style>
</head>
<body>

  <div class="team-header">
    <h2>PARSED LOGS</h2>
    <p>List of Parsed Logs</p>
  </div>

  <div class="team-container">
    <!-- Toolbar -->
    <div class="team-toolbar">
      <!-- <div class="toolbar-button"><i class="fas fa-columns"></i> COLUMNS</div> -->
      <div class="toolbar-button" id="columnToggle">
  <!-- <i class="fas fa-columns"></i> COLUMNS -->
  <i class="material-icons" style="font-size: 14px; color: #33b0ff;">view_column</i> COLUMNS
  <div class="column-dropdown" id="columnDropdown">
    <input type="text" class="column-search" placeholder="Find column" />
    <div class="column-list">
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>ID</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>ReferenceID</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>UserName</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>OperationName</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Direction</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>FormServer</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>ToServer</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Status</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>EventTimeStamp</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>LogMessage</span></div>
    
    </div>
    <div class="column-actions">
      <span class="hide-all">HIDE ALL</span>
      <span class="show-all">SHOW ALL</span>
    </div>
  </div>
</div>
<div class="toolbar-button" id="filterToggle">
  <!-- <i class="fas fa-filter"></i> FILTERS -->
  <i class="material-icons" style="font-size: 14px; color: #33b0ff;">filter_list</i> FILTERS
</div>

<!-- Filter dropdown -->
<div class="filter-dropdown" id="filterDropdown" style="display: none;">
  <div class="filter-row">
    <span class="filter-remove" id="closeFilter">✕</span>

    <div class="filter-group">
      <label>Columns</label>
      <select id="filterColumn">
      <option value="0">ID</option>
  <option value="1">ReferenceID</option>
  <option value="2">UserName</option>
  <option value="3">OperationName</option>
  <option value="4">Direction</option>
  <option value="5">FormServer</option>
  <option value="6">ToServer</option>
  <option value="7">Status</option>
  <option value="8">EventTimeStamp</option>
  <option value="9">LogMessage</option>
      </select>
    </div>

    <div class="filter-group">
      <label>Operator</label>
      <select id="filterOperator">
        <option value="contains">contains</option>
        <option value="equals">equals</option>
        <option value="starts">starts with</option>
        <option value="ends">ends with</option>
        <option value="empty">is empty</option>
        <option value="notempty">is not empty</option>
        <option value="any">is any of</option>
      </select>
    </div>

    <div class="filter-group">
      <label>Value</label>
      <input type="text" id="filterValue" placeholder="Filter value" />
    </div>
  </div>
</div>

      <!-- DENSITY Button with dropdown -->
      <!-- <div class="toolbar-button" id="densityToggle">
        <i class="fas fa-align-justify"></i> DENSITY
        <div class="density-dropdown" id="densityDropdown">
          <div class="dropdown-item"><i class="fas fa-bars"></i> Compact</div>
          <div class="dropdown-item"><i class="fas fa-bars-staggered"></i> Standard</div>
          <div class="dropdown-item"><i class="fas fa-bars-progress"></i> Comfortable</div>
        </div>
      </div> -->

      <div class="toolbar-button" id="densityToggle">
  <i class="fas fa-align-justify"></i> DENSITY
  <div class="density-dropdown" id="densityDropdown">
    <div class="dropdown-item" data-density="compact"><i class="fas fa-bars"></i> Compact</div>
    <div class="dropdown-item" data-density="standard"><i class="fas fa-bars-staggered"></i> Standard</div>
    <div class="dropdown-item" data-density="comfortable"><i class="fas fa-bars-progress"></i> Comfortable</div>
  </div>
</div>


       <!-- <div class="toolbar-button"><i class="fas fa-download"></i> EXPORT</div>  -->
    <!-- </div>  -->
    <!-- EXPORT Button with dropdown  -->
 <div class="toolbar-button" id="exportToggle">
  <i class="fas fa-download"></i> EXPORT

  <div class="export-dropdown" id="exportDropdown">
    <div class="dropdown-item" id="downloadCSV"> Download as CSV</div>
  </div>
</div>
</div>

    <!-- Table -->
    
    <div class="table-wrapper">
  <table id="userTable">
    <thead>
      <tr>
      <th data-column="0"  style="min-width: 150px; max-width: 120px;">
  <div class="header-cell">
    <span>ID</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>

<th data-column="1">
  <div class="header-cell">
    <span>ReferenceID</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>

<th data-column="2">
  <div class="header-cell">
    <span>UserName</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>

<th data-column="3">
  <div class="header-cell">
    <span>OperationName</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>

<th data-column="4">
  <div class="header-cell">
    <span>Direction</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>

<th data-column="5">
  <div class="header-cell">
    <span>FormServer</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>

<th data-column="6">
  <div class="header-cell">
    <span>ToServer</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>

<th data-column="7">
  <div class="header-cell">
    <span>Status</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>

<th data-column="8">
  <div class="header-cell">
    <span>EventTimeStamp</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>

<th data-column="9">
  <div class="header-cell">
    <span>LogMessage</span>
    <div class="header-icons">
      <div class="icon-wrapper sort-icon" data-order="asc"><i class="fas fa-arrow-up"></i></div>
      <div class="icon-wrapper menu-icon">
        <i class="fas fa-ellipsis-v"></i>
        <div class="dropdown-menu">
          <div class="dropdown-item">Unsort</div>
          <div class="dropdown-item">Sort by ASC</div>
          <div class="dropdown-item">Sort by DESC</div>
          <div class="dropdown-item">Filter</div>
          <div class="dropdown-item">Hide</div>
          <div class="dropdown-item">Show columns</div>
        </div>
      </div>
    </div>
  </div>
</th>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'depotrace_parsedlogs');
$mysqli->set_charset('utf8mb4');

$sql = "SELECT _id, referenceid, username, operationname, direction, fromserver, toserver, status, eventtimestamp, logmessage FROM parsedlogs";
$result = $mysqli->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='table-row standard'>
            <td>" . htmlspecialchars($row['_id']) . "</td>
            <td>" . htmlspecialchars($row['referenceid']) . "</td>
            <td>" . htmlspecialchars($row['username']) . "</td>
            <td>" . htmlspecialchars($row['operationname']) . "</td>
            <td>" . htmlspecialchars($row['direction']) . "</td>
            <td>" . htmlspecialchars($row['fromserver']) . "</td>
            <td>" . htmlspecialchars($row['toserver']) . "</td>
            <td>" . htmlspecialchars($row['status']) . "</td>
            <td>" . htmlspecialchars($row['eventtimestamp']) . "</td>
            <td>" . htmlspecialchars($row['logmessage']) . "</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='10' style='text-align:center;'>No data found</td></tr>";
}
?>


       
      
      </tr>
    </thead>


      <tbody>
        <!-- No data; only layout -->
       
      </tbody>
    </table>
    </div>

    <!-- Pagination -->
    <div class="pagination">
      <div>
        Rows per page:
        <select>
        <option>25</option>
<option>50</option>
<option>100</option>
<option>250</option>
<option>500</option>
<option>1000</option>

        </select>
      </div>
      <div class="nav-buttons">
        <span>1–0 of 0</span>
        <i class="fas fa-chevron-left"></i>
        <i class="fas fa-chevron-right"></i>
      </div>
    </div>
  </div>

  <script  >
    const densityToggle = document.getElementById("densityToggle");
    const densityDropdown = document.getElementById("densityDropdown");

    // Toggle dropdown on click
    densityToggle.addEventListener("click", (event) => {
      event.stopPropagation();
      densityDropdown.style.display =
        densityDropdown.style.display === "block" ? "none" : "block";
    });

    // Hide dropdown when clicking outside
    document.addEventListener("click", (event) => {
      if (!densityToggle.contains(event.target)) {
        densityDropdown.style.display = "none";
      }
    });
    
    const exportToggle = document.getElementById("exportToggle");
const exportDropdown = document.getElementById("exportDropdown");

// Toggle dropdown on click
exportToggle.addEventListener("click", (event) => {
  event.stopPropagation();
  exportDropdown.style.display =
    exportDropdown.style.display === "block" ? "none" : "block";
});

// Hide dropdown when clicking outside
document.addEventListener("click", (event) => {
  if (!exportToggle.contains(event.target)) {
    exportDropdown.style.display = "none";
  }
});

const columnToggle = document.getElementById("columnToggle");
  const columnDropdown = document.getElementById("columnDropdown");

  columnToggle.addEventListener("click", (e) => {
    e.stopPropagation();
    columnDropdown.style.display =
      columnDropdown.style.display === "block" ? "none" : "block";
  });

  document.addEventListener("click", (e) => {
    if (!columnToggle.contains(e.target)) {
      columnDropdown.style.display = "none";
    }
  });

  // Hide All / Show All Functionality
  document.querySelector(".hide-all").addEventListener("click", () => {
    document.querySelectorAll("#columnDropdown input[type='checkbox']").forEach(cb => cb.checked = false);
  });

  document.querySelector(".show-all").addEventListener("click", () => {
    document.querySelectorAll("#columnDropdown input[type='checkbox']").forEach(cb => cb.checked = true);
  });

  // Filter Columns
  document.querySelector(".column-search").addEventListener("input", function () {
    const search = this.value.toLowerCase();
    document.querySelectorAll(".column-list label").forEach(label => {
      const text = label.textContent.toLowerCase();
      label.style.display = text.includes(search) ? "flex" : "none";
    });
  });
// switch toggle Button// HIDE ALL: move all toggles to RIGHT (checked = hidden)
document.querySelector(".hide-all").addEventListener("click", () => {
  document.querySelectorAll("#columnDropdown input[type='checkbox']").forEach(cb => cb.checked = true);
});

// SHOW ALL: move all toggles to LEFT (unchecked = visible)
document.querySelector(".show-all").addEventListener("click", () => {
  document.querySelectorAll("#columnDropdown input[type='checkbox']").forEach(cb => cb.checked = false);
});





  // Attach index and save original text for all toggles
  document.querySelectorAll(".column-toggle").forEach((toggle, index) => {
    const checkbox = toggle.querySelector("input[type='checkbox']");
    checkbox.setAttribute("data-column", index);

    // Save original content
    cacheColumnContent(index);

    // Set initial state
    updateColumnContent(index, checkbox.checked);

    checkbox.addEventListener("change", () => {
      updateColumnContent(index, checkbox.checked);
    });
  });

  // Cache original text content in data attributes
  function cacheColumnContent(index) {
    const table = document.querySelector("table");

    // Header
    const headerCell = table.querySelectorAll("thead th")[index];
    if (headerCell && !headerCell.hasAttribute("data-original")) {
      headerCell.setAttribute("data-original", headerCell.innerHTML);
    }

    // Body rows
    const rows = table.querySelectorAll("tbody tr");
    rows.forEach(row => {
      const cell = row.cells[index];
      if (cell && !cell.hasAttribute("data-original")) {
        cell.setAttribute("data-original", cell.innerHTML);
      }
    });
  }

  // Hide or restore content without affecting layout
  function updateColumnContent(index, show) {
    const table = document.querySelector("table");

    // Header
    const headerCell = table.querySelectorAll("thead th")[index];
    if (headerCell) {
      headerCell.innerHTML = show ? headerCell.getAttribute("data-original") : "<span style='visibility:hidden'>" + headerCell.getAttribute("data-original") + "</span>";
    }

    // Body
    const rows = table.querySelectorAll("tbody tr");
    rows.forEach(row => {
      const cell = row.cells[index];
      if (cell) {
        const content = cell.getAttribute("data-original");
        cell.innerHTML = show ? content : "<span style='visibility:hidden'>" + content + "</span>";
      }
    });
  }

  // Hide All (keep structure, hide content)
  document.querySelector(".hide-all").addEventListener("click", (e) => {
    e.stopPropagation(); // Keep dropdown open
    document.querySelectorAll("#columnDropdown input[type='checkbox']").forEach((cb, idx) => {
      cb.checked = false;
      updateColumnContent(idx, false);
    });
  });

  // Show All (restore content)
  document.querySelector(".show-all").addEventListener("click", (e) => {
    e.stopPropagation(); // Keep dropdown open
    document.querySelectorAll("#columnDropdown input[type='checkbox']").forEach((cb, idx) => {
      cb.checked = true;
      updateColumnContent(idx, true);
    });
  });
  const columnData = {}; // Store removed column data once

// Setup toggle listeners
document.querySelectorAll(".column-toggle").forEach((toggle, index) => {
  const checkbox = toggle.querySelector("input[type='checkbox']");
  checkbox.setAttribute("data-column", index);

  // Save original column content (once)
  if (!columnData[index]) {
    cacheColumn(index);
  }

  // Attach change event once
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      restoreColumn(index); // Show column
    } else {
      removeColumn(index);  // Hide column
    }
  });
});

// Cache original column contents
function cacheColumn(index) {
  const table = document.querySelector("table");
  const th = table.querySelectorAll("thead th")[index];
  const tds = [];

  if (th) {
    columnData[index] = {
      th: th.cloneNode(true),
      tds: []
    };

    const rows = table.querySelectorAll("tbody tr");
    rows.forEach((row, i) => {
      const td = row.cells[index];
      if (td) {
        columnData[index].tds[i] = td.cloneNode(true);
      }
    });
  }
}

// Remove column by index
function removeColumn(index) {
  const table = document.querySelector("table");

  // Remove <th>
  const ths = table.querySelectorAll("thead th");
  if (ths[index]) {
    ths[index].remove();
  }

  // Remove corresponding <td>
  const rows = table.querySelectorAll("tbody tr");
  rows.forEach(row => {
    const cell = row.cells[index];
    if (cell) {
      cell.remove();
    }
  });
}

// Restore column (clean and re-insert)
function restoreColumn(index) {
  const table = document.querySelector("table");

  // Check if already exists
  const headerRow = table.querySelector("thead tr");
  if (headerRow.children[index]?.textContent === columnData[index]?.th?.textContent) {
    return; // Already restored
  }

  // Insert header <th>
  if (columnData[index]?.th) {
    insertAt(headerRow, columnData[index].th.cloneNode(true), index);
  }

  // Insert corresponding <td> for each row
  const rows = table.querySelectorAll("tbody tr");
  rows.forEach((row, i) => {
    const td = columnData[index]?.tds[i];
    if (td) {
      insertAt(row, td.cloneNode(true), index);
    }
  });
}

// Insert node at correct index
function insertAt(parent, element, index) {
  const children = Array.from(parent.children);
  if (index >= children.length) {
    parent.appendChild(element);
  } else {
    parent.insertBefore(element, children[index]);
  }
}

// Global click handler: hide dropdowns only if clicked outside
document.addEventListener("click", (event) => {
  const isColumnArea = columnToggle.contains(event.target) || columnDropdown.contains(event.target);
  if (!isColumnArea) {
    columnDropdown.style.display = "none";
  }

  const isDensityArea = densityToggle.contains(event.target) || densityDropdown.contains(event.target);
  if (!isDensityArea) {
    densityDropdown.style.display = "none";
  }

  const isExportArea = exportToggle.contains(event.target) || exportDropdown.contains(event.target);
  if (!isExportArea) {
    exportDropdown.style.display = "none";
  }
});

// filter dropdown

  // Toggle filter dropdown when clicking the FILTERS button
  document.querySelector('.toolbar-button:nth-child(2)').addEventListener('click', function (e) {
    document.getElementById('filterDropdown').classList.toggle('show');
    e.stopPropagation(); // Prevent closing immediately
  });

  // Close filter dropdown when clicking outside
  document.addEventListener('click', function () {
    document.getElementById('filterDropdown').classList.remove('show');
  });

  // Prevent closing when clicking inside filter dropdown
  document.getElementById('filterDropdown').addEventListener('click', function (e) {
    e.stopPropagation();
  });

  // Close when clicking ✕
  document.querySelector('.filter-remove').addEventListener('click', function () {
    document.getElementById('filterDropdown').classList.remove('show');
  });


  //  filters functionality
  
 
  document.addEventListener("DOMContentLoaded", function () {
  const filterToggle = document.getElementById("filterToggle");
  const filterDropdown = document.getElementById("filterDropdown");
  const closeFilter = document.getElementById("closeFilter");

  const columnSelect = document.getElementById("filterColumn");
  const operatorSelect = document.getElementById("filterOperator");
  const valueInput = document.getElementById("filterValue");

  // Show/Hide the filter dropdown
  filterToggle.addEventListener("click", (e) => {
    e.stopPropagation(); // prevent bubbling
    filterDropdown.style.display = filterDropdown.style.display === "none" ? "block" : "none";
  });

  // Close the filter
  closeFilter.addEventListener("click", (e) => {
    e.stopPropagation();
    filterDropdown.style.display = "none";
  });

  // Trigger filter on any change or click
  columnSelect.addEventListener("change", applyFilter);
  operatorSelect.addEventListener("change", applyFilter);
  valueInput.addEventListener("change", applyFilter); // when a value is clicked or entered

  function applyFilter() {
    const colIndex = parseInt(columnSelect.value);
    const operator = operatorSelect.value;
    const inputValue = valueInput.value.trim().toLowerCase();

    const rows = document.querySelectorAll("table tbody tr");

    rows.forEach(row => {
      const cell = row.cells[colIndex];
      if (!cell) return;

      const cellValue = cell.textContent.trim().toLowerCase();
      let matched = false;

      switch (operator) {
        case "contains":
          matched = cellValue.includes(inputValue);
          break;
        case "equals":
          matched = cellValue === inputValue;
          break;
        case "starts":
          matched = cellValue.startsWith(inputValue);
          break;
        case "ends":
          matched = cellValue.endsWith(inputValue);
          break;
        case "empty":
          matched = cellValue === "";
          break;
        case "notempty":
          matched = cellValue !== "";
          break;
        case "any":
          const list = inputValue.split(",").map(s => s.trim());
          matched = list.includes(cellValue);
          break;
      }

      row.style.display = matched ? "" : "none";
    });
  }

  // ✅ Close dropdown when clicking outside
  document.addEventListener("click", function (event) {
    const isClickInsideDropdown = filterDropdown.contains(event.target);
    const isClickOnToggle = filterToggle.contains(event.target);

    if (!isClickInsideDropdown && !isClickOnToggle) {
      filterDropdown.style.display = "none";
    }
  });
});


// export functionality

document.getElementById("downloadCSV").addEventListener("click", function () {
  const table = document.querySelector(".table-wrapper table");
  if (!table) {
    alert("Table not found!");
    return;
  }

  let csv = [];

  // Extract headers
  const headers = table.querySelectorAll("thead th");
  let headerRow = [];
  headers.forEach(th => {
    const text = th.innerText || th.textContent;
    headerRow.push('"' + text.trim().replace(/"/g, '""') + '"');
  });
  csv.push(headerRow.join(","));

  // Extract body rows
  const rows = table.querySelectorAll("tbody tr");
  rows.forEach(row => {
    let rowData = [];
    row.querySelectorAll("td").forEach(td => {
      rowData.push('"' + td.textContent.trim().replace(/"/g, '""') + '"');
    });
    csv.push(rowData.join(","));
  });

  // Trigger download
  const csvContent = csv.join("\n");
  const blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });
  const url = URL.createObjectURL(blob);
  const link = document.createElement("a");
  link.setAttribute("href", url);
  link.setAttribute("download", "team_members.csv");
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
});


// density functionality
document.addEventListener("DOMContentLoaded", function () {
  const densityToggle = document.getElementById("densityToggle");
  const densityDropdown = document.getElementById("densityDropdown");

  // Show/hide dropdown
  densityToggle.addEventListener("click", function (event) {
    event.stopPropagation();
    densityToggle.classList.toggle("active");
  });

  // Dropdown item click
  densityDropdown.querySelectorAll(".dropdown-item").forEach(item => {
    item.addEventListener("click", function () {
      const selectedDensity = item.getAttribute("data-density");

      // Apply to all table rows
      document.querySelectorAll(".table-row").forEach(row => {
        row.classList.remove("compact", "standard", "comfortable");
        row.classList.add(selectedDensity);
      });

      // Hide dropdown
      densityToggle.classList.remove("active");
    });
  });

  // Close dropdown on outside click
  document.addEventListener("click", function (event) {
    if (!densityToggle.contains(event.target)) {
      densityToggle.classList.remove("active");
    }
  });
});


// columns functionality

  document.querySelectorAll('.header-cell').forEach(cell => {
    cell.addEventListener('click', function (e) {
      // Remove active from all headers
      document.querySelectorAll('.header-cell').forEach(c => c.classList.remove('active'));

      // Set active to the clicked one
      this.classList.add('active');

      // Prevent table sorting or bubbling
      e.stopPropagation();
    });
  });

  // Optional: Remove active class when clicking outside
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.header-cell')) {
      document.querySelectorAll('.header-cell').forEach(c => c.classList.remove('active'));
    }
  });

//  columns functionnality

document.addEventListener("DOMContentLoaded", function () {
    const allMenus = document.querySelectorAll(".menu-icon");

    allMenus.forEach(menuIcon => {
      const triggerIcon = menuIcon.querySelector("i.fas.fa-ellipsis-v");
      const dropdown = menuIcon.querySelector(".dropdown-menu");

      triggerIcon.addEventListener("click", function (e) {
        e.stopPropagation();

        // Hide other open menus
        document.querySelectorAll(".dropdown-menu").forEach(menu => {
          if (menu !== dropdown) menu.style.display = "none";
        });

        // Toggle current
        dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
      });
    });

    // Click outside to close all
    document.addEventListener("click", () => {
      document.querySelectorAll(".dropdown-menu").forEach(menu => {
        menu.style.display = "none";
      });
    });
  });


  // column filter functionality

  

// 
document.addEventListener("DOMContentLoaded", function () {
  const table = document.getElementById("userTable");
  const originalRows = Array.from(table.querySelectorAll("tbody tr")).map(row => row.cloneNode(true));

  table.querySelectorAll("th").forEach(th => {
    const colIndex = parseInt(th.dataset.column);
    if (isNaN(colIndex)) return;

    const menu = th.querySelector(".dropdown-menu");
    if (!menu) return;

    const items = menu.querySelectorAll(".dropdown-item");

    // Set 'Unsort' active by default
    items.forEach(item => item.classList.remove("active"));
    items[0].classList.add("active");

    // Unsort
    items[0].addEventListener("click", () => {
      setActive(items[0], items);
      const tbody = table.querySelector("tbody");
      tbody.innerHTML = '';
      originalRows.forEach(row => {
        Array.from(row.children).forEach(cell => cell.style.display = "");
        row.style.display = "";
        tbody.appendChild(row.cloneNode(true));
      });
    });

    // Sort ASC
    items[1].addEventListener("click", () => {
      setActive(items[1], items);
      sortTable(colIndex, true);
    });

    // Sort DESC
    items[2].addEventListener("click", () => {
      setActive(items[2], items);
      sortTable(colIndex, false);
    });

    // Filter
    items[3].addEventListener("click", () => {
      setActive(items[3], items);
      document.getElementById("filterDropdown").style.display = "block";
      document.getElementById("filterColumn").value = colIndex.toString();
    });

    // Hide
    items[4].addEventListener("click", () => {
      setActive(items[4], items);
      table.querySelectorAll("tr").forEach(row => {
        if (row.children[colIndex]) row.children[colIndex].style.display = "none";
      });
    });

    // Show Columns
    items[5].addEventListener("click", () => {
      setActive(items[5], items);
      const dropdown = document.getElementById("columnDropdown");
      if (dropdown) {
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
      }
    });
  });

  function setActive(selected, allItems) {
    allItems.forEach(item => item.classList.remove("active"));
    selected.classList.add("active");
  }

  function sortTable(colIndex, asc = true) {
    const tbody = table.querySelector("tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));
    rows.sort((a, b) => {
      const aText = a.children[colIndex]?.innerText.trim().toLowerCase() || "";
      const bText = b.children[colIndex]?.innerText.trim().toLowerCase() || "";
      return asc ? aText.localeCompare(bText) : bText.localeCompare(aText);
    });
    tbody.innerHTML = "";
    rows.forEach(row => tbody.appendChild(row));
  }
});

// arrow functionality
document.addEventListener("DOMContentLoaded", function () {
  const table = document.getElementById("userTable");

  document.querySelectorAll(".sort-icon").forEach(iconWrapper => {
    const th = iconWrapper.closest("th");
    const colIndex = parseInt(th.dataset.column);
    const icon = iconWrapper.querySelector("i");

    iconWrapper.addEventListener("click", () => {
      const currentOrder = iconWrapper.getAttribute("data-order");

      if (currentOrder === "asc") {
        icon.classList.remove("fa-arrow-up");
        icon.classList.add("fa-arrow-down");
        iconWrapper.setAttribute("data-order", "desc");
        sortTable(colIndex, false);
      } else {
        icon.classList.remove("fa-arrow-down");
        icon.classList.add("fa-arrow-up");
        iconWrapper.setAttribute("data-order", "asc");
        sortTable(colIndex, true);
      }
    });
  });

  function sortTable(colIndex, asc = true) {
    const tbody = table.querySelector("tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));
    rows.sort((a, b) => {
      const aText = a.children[colIndex]?.innerText.trim().toLowerCase() || "";
      const bText = b.children[colIndex]?.innerText.trim().toLowerCase() || "";
      return asc ? aText.localeCompare(bText) : bText.localeCompare(aText);
    });
    tbody.innerHTML = "";
    rows.forEach(row => tbody.appendChild(row));
  }
});


  // pagination
 
document.addEventListener("DOMContentLoaded", function () {
  const table = document.getElementById("userTable");
  const rowsPerPageSelect = document.querySelector(".pagination select");
  const navText = document.querySelector(".nav-buttons span");
  const prevBtn = document.querySelector(".fa-chevron-left");
  const nextBtn = document.querySelector(".fa-chevron-right");

  let currentPage = 1;
  let rowsPerPage = parseInt(rowsPerPageSelect.value);
  let rows = Array.from(table.querySelectorAll("tbody tr"));

  function renderTable() {
    const totalRows = rows.length;
    const totalPages = Math.ceil(totalRows / rowsPerPage);

    // Clamp current page if needed
    if (currentPage > totalPages) currentPage = totalPages || 1;

    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    rows.forEach((row, index) => {
      row.style.display = (index >= start && index < end) ? "" : "none";
    });

    const showingStart = totalRows === 0 ? 0 : start + 1;
    const showingEnd = Math.min(end, totalRows);
    navText.textContent = `${showingStart}–${showingEnd} of ${totalRows}`;

    // Disable/enable buttons
    prevBtn.style.opacity = currentPage === 1 ? "0.5" : "1";
    nextBtn.style.opacity = currentPage === totalPages ? "0.5" : "1";
  }

  rowsPerPageSelect.addEventListener("change", () => {
    rowsPerPage = parseInt(rowsPerPageSelect.value);
    currentPage = 1;
    renderTable();
  });

  prevBtn.addEventListener("click", () => {
    if (currentPage > 1) {
      currentPage--;
      renderTable();
    }
  });

  nextBtn.addEventListener("click", () => {
    const totalPages = Math.ceil(rows.length / rowsPerPage);
    if (currentPage < totalPages) {
      currentPage++;
      renderTable();
    }
  });

  // Initial render
  renderTable();
});

// cursor 
document.addEventListener('mousedown', function (e) {
    // Only allow focus on form fields like input, textarea, or contenteditable
    const tag = e.target.tagName;
    const isEditable = e.target.isContentEditable;
    if (
      tag !== 'INPUT' &&
      tag !== 'TEXTAREA' &&
      !isEditable &&
      document.activeElement &&
      typeof document.activeElement.blur === 'function'
    ) {
      document.activeElement.blur();
    }
  });

//   column

  document.addEventListener("DOMContentLoaded", function () {
    const columnToggle = document.getElementById("columnToggle");
    const columnDropdown = document.getElementById("columnDropdown");
    const searchInput = columnDropdown.querySelector(".column-search");
    const columnToggles = columnDropdown.querySelectorAll(".column-toggle");

    // Toggle dropdown visibility
    columnToggle.addEventListener("click", function (e) {
      columnDropdown.classList.toggle("show");
      e.stopPropagation();
    });

    // Filter columns as you type
    searchInput.addEventListener("input", function () {
      const filter = this.value.toLowerCase();
      columnToggles.forEach(toggle => {
        const label = toggle.querySelector("span").innerText.toLowerCase();
        toggle.style.display = label.includes(filter) ? "flex" : "none";
      });
    });

    // Close dropdown if clicked outside
    document.addEventListener("click", function (e) {
      if (!columnToggle.contains(e.target)) {
        columnDropdown.classList.remove("show");
      }
    });
  });





  </script>
</body>
</html>



