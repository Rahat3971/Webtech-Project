<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Patient</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="add-patient-message">
        <?php
        session_start();
        if (!isset($_SESSION['doctor_id'])) {
            header("Location: login.html");
            exit();
        }

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
            echo "<a href='patients.php' class='button'>Go to Patient Management</a>";
        } else {
            echo "Error adding patient: " . $conn->error;
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
