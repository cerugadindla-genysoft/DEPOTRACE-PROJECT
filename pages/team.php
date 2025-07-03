
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

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
    .team-header h2 {
      color: #33B0F7;
      font-weight: 900;
      font-size: 20px;
      margin-bottom: 6px;
    }

    .team-header p {
      color: #33B0F7;
      font-size: 14px;
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

  </style>
</head>
<body>

  <div class="team-header">
    <h2>TEAM</h2>
    <p>Managing the Team Members</p>
  </div>

  <div class="team-container">
    <!-- Toolbar -->
    <div class="team-toolbar">
      <!-- <div class="toolbar-button"><i class="fas fa-columns"></i> COLUMNS</div> -->
      <div class="toolbar-button" id="columnToggle">
  <i class="fas fa-columns"></i> COLUMNS
  <div class="column-dropdown" id="columnDropdown">
    <input type="text" class="column-search" placeholder="Find column" />
    <div class="column-list">
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>First Name</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Last Name</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>User Name</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Password</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Organization</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Role</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Status</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Occupation</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Email</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Phone Number</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>City</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>State</span></div>
      <div class="column-toggle"><label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><span>Country</span></div>
    </div>
    <div class="column-actions">
      <span class="hide-all">HIDE ALL</span>
      <span class="show-all">SHOW ALL</span>
    </div>
  </div>
</div>
<div class="toolbar-button" id="filterToggle">
  <i class="fas fa-filter"></i> FILTERS
</div>

<!-- Filter dropdown -->
<div class="filter-dropdown" id="filterDropdown" style="display: none;">
  <div class="filter-row">
    <span class="filter-remove" id="closeFilter">✕</span>

    <div class="filter-group">
      <label>Columns</label>
      <select id="filterColumn">
        <option value="0">First Name</option>
        <option value="1">Last Name</option>
        <option value="2">User Name</option>
        <option value="3">Password</option>
        <option value="4">Organization</option>
        <option value="5">Role</option>
        <option value="6">Status</option>
        <option value="7">Occupation</option>
        <option value="8">Email</option>
        <option value="9">Phone Number</option>
        <option value="10">City</option>
        <option value="11">State</option>
        <option value="12">Country</option>
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
  <table>
    <thead>
      <tr>
      <th>
          <div class="header-cell">
            <span>First Name</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <!-- Repeat this structure for each column -->
        <th>
          <div class="header-cell">
            <span>Last Name</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>User Name</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>Password</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>Organization</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>Role</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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
        <th>
          <div class="header-cell">
            <span>Status</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>Occupation</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>Email</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>Phone Number</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>City</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>State</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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

        <th>
          <div class="header-cell">
            <span>Country</span>
            <div class="header-icons">
              <div class="icon-wrapper"><i class="fas fa-arrow-up"></i></div>
              <div class="icon-wrapper menu-icon">
                <i class="fas fa-ellipsis-v"></i>
                <div class="dropdown-menu">
                  <div class="dropdown-item disabled">Unsort</div>
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
      </tr>
    </thead>


      <tbody>
        <!-- No data; only layout -->
        <?php
  $mysqli = new mysqli('localhost', 'root', '', 'depotrace_logins');
  $mysqli->set_charset('utf8mb4');
  $sql = "SELECT firstname, lastname, username, password, organization, role, isActive, occupation, email, phoneNumber, city, state, country FROM users";
  $result = $mysqli->query($sql);

  if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<tr class='table-row standard'>
              <td>" . htmlspecialchars($row['firstname']) . "</td>
              <td>" . htmlspecialchars($row['lastname']) . "</td>
              <td>" . htmlspecialchars($row['username']) . "</td>
              <td>" . substr(htmlspecialchars($row['password']), 0, 10) . "...</td>
              <td>" . htmlspecialchars($row['organization']) . "</td>
              <td class='col-role'><span class='role-badge'>" . htmlspecialchars($row['role']) . "</span></td>

             <td class='col-status'>" . ($row['isActive'] ? "<span style='color:green;'>Active</span>" : "<span style='color:red;'>Inactive</span>") . "</td>

              <td>" . htmlspecialchars($row['occupation']) . "</td>
              <td>" . htmlspecialchars($row['email']) . "</td>
              <td>" . htmlspecialchars($row['phoneNumber']) . "</td>
              <td>" . htmlspecialchars($row['city']) . "</td>
              <td>" . htmlspecialchars($row['state']) . "</td>
              <td>" . htmlspecialchars($row['country']) . "</td>
          </tr>";
      }
  } else {
      echo "<tr><td colspan='13' style='text-align:center;'>No data found</td></tr>";
  }
  ?>
      </tbody>
    </table>
    </div>

    <!-- Pagination -->
    <div class="pagination">
      <div>
        Rows per page:
        <select>
          <option>100</option>
          <option>50</option>
          <option>25</option>
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
  const table = document.getElementById("userTable");
  let csv = [];
  
  // Get headers
  const headers = table.querySelectorAll("thead th");
  let headerRow = [];
  headers.forEach(th => {
    headerRow.push('"' + th.textContent.trim().replace(/"/g, '""') + '"');
  });
  csv.push(headerRow.join(","));

  // Get rows
  const rows = table.querySelectorAll("tbody tr");
  rows.forEach(row => {
    let rowData = [];
    row.querySelectorAll("td").forEach(td => {
      rowData.push('"' + td.textContent.trim().replace(/"/g, '""') + '"');
    });
    csv.push(rowData.join(","));
  });

  // Create and download CSV file
  const csvContent = csv.join("\n");
  const blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });
  const url = URL.createObjectURL(blob);
  const link = document.createElement("a");
  link.setAttribute("href", url);
  link.setAttribute("download", "users.csv");
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


  </script>
</body>
</html>
