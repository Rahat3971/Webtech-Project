<?php
session_start();

require_once '../Model/User.php'; // Assuming User.php contains the necessary functions for lab assistant registration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $gender = $_POST['gender'];
    $contactNo = $_POST['contactNo'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $address = $_POST['address'];

    // Perform basic validation
    if (empty($fullName) || empty($gender) || empty($contactNo) || empty($username) || empty($email) || empty($password) || empty($confirmPassword) || empty($address)) {
        $_SESSION['error_message'] = 'All fields are required.';
        header('Location: ../../Views/Admin/OnboardLabAssistant.php');
        exit();
    }

    if ($password !== $confirmPassword) {
        $_SESSION['error_message'] = 'Passwords do not match.';
        header('Location: ../../Views/Admin/OnboardLabAssistant.php');
        exit();
    }

    // Assuming User.php has a function to add a lab assistant
    if (AddLabAssistantRecord($fullName, $gender, $contactNo, $username, $email, $password, $address)) {
        $_SESSION['success_message'] = 'Lab assistant registered successfully!';
        header('Location: ../../Views/Admin/Dashboard.php');
        exit();
    } else {
        $_SESSION['error_message'] = 'Failed to register lab assistant. Please try again.';
        header('Location: ../../Views/Admin/OnboardLabAssistant.php');
        exit();
    }
} else {
    $_SESSION['error_message'] = 'Invalid request method.';
    header('Location: ../../Views/Admin/OnboardLabAssistant.php');
    exit();
}
