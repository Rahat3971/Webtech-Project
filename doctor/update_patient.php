<?php
session_start();
if (!isset($_SESSION['doctor_id'])) {
    header("Location: login.html");
    exit();
}

// Database connection parameters
require_once 'db.php';

// Retrieve form data
$patient_id = $_POST['patient_id'];
$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

// SQL to update patient data in Patients table
$sql = "UPDATE Patients SET Full_Name='$full_name', Gender='$gender', Phone_Number='$phone_number', Address='$address' WHERE Patient_ID=$patient_id";

if ($conn->query($sql) === TRUE) {
    echo "Information updated";
    echo "<script>window.location.href = 'view_patients.php';</script>"; // Redirect to view_patients.php
} else {
    echo "Error updating patient information: " . $conn->error;
}

$conn->close();
?>
