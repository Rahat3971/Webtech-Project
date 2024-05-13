<?php
session_start();
if (!isset($_SESSION['doctor_id'])) {
    header("Location: login.html");
    exit();
}

// Check if appointment ID is provided
if (!isset($_GET['id'])) {
    echo "Appointment ID not provided";
    exit();
}

// Database connection parameters
require_once 'db.php';

// Retrieve appointment ID from URL parameter
$appointment_id = $_GET['id'];

// SQL to delete appointment from Appointments table
$sql = "DELETE FROM Appointments WHERE Appointment_ID=$appointment_id";

if ($conn->query($sql) === TRUE) {
    echo "Appointment cancelled successfully";
} else {
    echo "Error cancelling appointment: " . $conn->error;
}

$conn->close();
?>
