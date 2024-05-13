<?php
session_start();
if (!isset($_SESSION['doctor_id'])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Database connection parameters
    require_once 'db.php';

    // Retrieve patient ID from URL parameter
    $patient_id = $_GET['id'];

    // SQL to delete patient data from Patients table
    $sql = "DELETE FROM Patients WHERE Patient_ID=$patient_id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['delete_message'] = "Information deleted";
        header("Location: view_patients.php");
        exit();
    } else {
        echo "Error deleting patient information: " . $conn->error;
    }

    $conn->close();
} else {
    header("Location: view_patients.php"); // Redirect if accessed without patient ID
    exit();
}
?>
