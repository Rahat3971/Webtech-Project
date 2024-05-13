<?php
session_start();

// Database connection parameters
require_once 'db.php';
// Retrieve form data
$doctor_id = $_POST['doctor_id'];
$password = $_POST['password'];

// Prepare SQL statement to fetch doctor with given credentials
$sql = "SELECT * FROM Doctors WHERE Doctor_ID = '$doctor_id' AND Password = '$password'";
$result = $conn->query($sql);

// Check if any row is returned
if ($result->num_rows > 0) {
    // Doctor credentials are valid
    $_SESSION['doctor_id'] = $doctor_id; // Store doctor ID in session
    header("Location: dashboard.php"); // Redirect to doctor's dashboard
    exit();
} else {
    // Invalid credentials
    echo "Invalid username or password";
}

$conn->close();
?>
