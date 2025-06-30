
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

  </script>
</body>
</html>
