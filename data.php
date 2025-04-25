<?php
// Simulated Database Data
$totalUsers = 2905;
$totalCases = 1389;
$totalSessions = 3277;
$sessionsByCategory = [
    "Deposition" => 1581,
    "Demo" => 298,
    "Arbitration" => 253,
    "Trial" => 226
];

// If you want to integrate a real database, use the following:

// $conn = new mysqli("localhost", "username", "password", "database_name");
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $result = $conn->query("SELECT COUNT(*) as total FROM users");
// $row = $result->fetch_assoc();
// $totalUsers = $row['total'];
?>
