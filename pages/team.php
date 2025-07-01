
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
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
  margin-top: 22px;
}

.filter-group {
  display: flex;
  flex-direction: column;
  flex: 1;
  /* padding-right: 20px; */
}

.filter-group label {
  font-size: 12px;
  color: #666;
  margin-bottom: 4px;
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
      <div class="toolbar-button"><i class="fas fa-filter"></i> FILTERS</div>

      <!-- Filter dropdown -->
<div class="filter-dropdown" id="filterDropdown">
  <div class="filter-row">
    <span class="filter-remove">✕</span>
    <div class="filter-group">
      <label>Columns</label>
      <select>
      <option>First Name</option>
      <option>Last Name</option>
      <option>User Name</option>
      <option>Password</option>
      <option>Organization</option>
      <option>Role</option>
      <option>Status</option>
      <option>Occupation</option>
      <option>Email</option>
      <option>Phone Number</option>
      <option>City</option>
      <option>State</option>
      <option>Country</option>

      
      </select>
    </div>

    <div class="filter-group">
      <label>Operator</label>
      <select>
        <option>contains</option>
        <option>equals</option>
        <option>starts with</option>
        <option>ends with</option>
        <option >is empty</option>
        <option >is not empty</option>
        <option >is any of</option>
      </select>
    </div>

    <div class="filter-group">
      <label>Value</label>
      <input type="text" placeholder="Filter value" />
    </div>
  </div>
</div>


      <!-- DENSITY Button with dropdown -->
      <div class="toolbar-button" id="densityToggle">
        <i class="fas fa-align-justify"></i> DENSITY
        <div class="density-dropdown" id="densityDropdown">
          <div class="dropdown-item"><i class="fas fa-bars"></i> Compact</div>
          <div class="dropdown-item"><i class="fas fa-bars-staggered"></i> Standard</div>
          <div class="dropdown-item"><i class="fas fa-bars-progress"></i> Comfortable</div>
        </div>
      </div>

       <!-- <div class="toolbar-button"><i class="fas fa-download"></i> EXPORT</div>  -->
    <!-- </div>  -->
    <!-- EXPORT Button with dropdown  -->
 <div class="toolbar-button" id="exportToggle">
  <i class="fas fa-download"></i> EXPORT

  <div class="export-dropdown" id="exportDropdown">
    <div class="dropdown-item"> Download as CSV</div>
  </div>
</div>
</div>

    <!-- Table -->
    
    <div class="table-wrapper">
    
    <table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>User Name</th>
          <th>Password</th>
          <th>Organization</th>
          <th>Role</th>
          <th>Status</th>
          <th>Occupation</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>City</th>
          <th>State</th>
          <th>Country</th>
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
          echo "<tr>
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








  </script>
</body>
</html>
