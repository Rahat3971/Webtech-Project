<?php
session_start();
if (!isset($_SESSION['doctor_id'])) {
    header("Location: login.html");
    exit();
}

// Database connection parameters
require_once 'db.php';


// Retrieve form data
$doctor_id = $_SESSION['doctor_id'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

// Check if new password matches the confirmed password
if ($new_password !== $confirm_password) {
    echo "New password and confirm password do not match";
    exit();
}

// Retrieve current password from the database
$sql = "SELECT Password FROM Doctors WHERE Doctor_ID = '$doctor_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $stored_password = $row['Password'];
    // Verify if the entered current password matches the stored password
    if ($current_password === $stored_password) {
        // Update the password in the database
        $update_sql = "UPDATE Doctors SET Password = '$new_password' WHERE Doctor_ID = '$doctor_id'";
        if ($conn->query($update_sql) === TRUE) {
            echo "Password changed successfully";
            // Redirect to login page after successful password change
            header("Location: login.html");
            exit();
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Current password is incorrect";
    }
} else {
    echo "Doctor not found";
}

$conn->close();
?>
