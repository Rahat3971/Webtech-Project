<?php
session_start();
if (!isset($_SESSION['doctor_id'])) {
    header("Location: ../view/login.html");
    exit();
}

// Database connection parameters
require_once 'db.php';



// Retrieve form data
$doctor_id = $_SESSION['doctor_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_number = $_POST['phone_number'];

// Update doctor's information in the database
$sql = "UPDATE Doctors SET First_Name = '$first_name', Last_Name = '$last_name', Phone_Number = '$phone_number' WHERE Doctor_ID = '$doctor_id'";

if ($conn->query($sql) === TRUE) {
    // Redirect back to profile page after successful update
    header("Location: profile.php");
    exit();
} else {
    echo "Error updating profile: " . $conn->error;
}

$conn->close();
?>
