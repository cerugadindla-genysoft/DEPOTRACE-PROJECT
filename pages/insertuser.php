<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$mysqli = new mysqli('localhost','root','','depotrace_logins');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset('utf8mb4');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('⛔ Wrong method');
}

$id          = bin2hex(random_bytes(12));
$firstname   = $_POST['firstname']   ?? '';
$lastname    = $_POST['lastname']    ?? '';
$username    = $_POST['username']    ?? '';
$password    = password_hash($_POST['password'] ?? '', PASSWORD_BCRYPT);
$organization= $_POST['organization']?? '';
$role        = $_POST['role']        ?? '';
$isActive    = $_POST['isActive']    ?? 'Inactive';
$occupation  = $_POST['occupation']  ?? '';
$email       = $_POST['email']       ?? '';
$phoneNumber = $_POST['phoneNumber'] ?? '';
$city        = $_POST['city']        ?? '';
$state       = $_POST['state']       ?? '';
$country     = $_POST['country']     ?? '';
$v           = 0;

$sql = "INSERT INTO `users`
        (`_id`,`firstname`,`lastname`,`username`,`password`,
         `organization`,`role`,`isActive`,`occupation`,
         `email`,`phoneNumber`,`city`,`state`,`country`,`__v`)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param(
    "ssssssssssssssi",
    $id,$firstname,$lastname,$username,$password,
    $organization,$role,$isActive,$occupation,
    $email,$phoneNumber,$city,$state,$country,$v);

if ($stmt->execute()) {
    header('Location: ../dashboard.php?page=createuser&status=success');
    exit;
}
header('Location: ../dashboard.php?page=createuser&status=insert_failed&msg='.urlencode($stmt->error));
exit;
