<?php
session_start();
if (!isset($_SESSION['doctor_id'])) {
    header("Location: login.html");
    exit();
}

// Database connection parameters
require_once 'db.php';


// Retrieve form data
$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

// SQL to insert patient data into Patients table
$sql = "INSERT INTO Patients (Full_Name, Gender, Phone_Number, Password, Address) VALUES ('$full_name', '$gender', '$phone_number', '$password', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Patient added successfully";
} else {
    echo "Error adding patient: " . $conn->error;
}

$conn->close();
?>
