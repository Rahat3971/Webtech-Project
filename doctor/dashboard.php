<?php
session_start();
if (!isset($_SESSION['doctor_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome to Doctor's Dashboard</h2>
        <div class="buttons-container">
            <a href="profile.php" class="button">Profile</a>
            <a href="change_password.php" class="button">Change Password</a>
            <a href="patients.php" class="button">Patients</a>
            <a href="appointments.php" class="button">Appointments</a>
            <a href="pharmaceuticals.php" class="button">Pharmaceuticals</a>
            <a href="logout.php" class="button">Logout</a>
        </div>
    </div>
</body>
</html>
