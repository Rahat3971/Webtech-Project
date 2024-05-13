<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="edit-patient-container">
        <h2>Edit Patient Information</h2>
        <?php
        session_start();
        if (!isset($_SESSION['doctor_id'])) {
            header("Location: login.html");
            exit();
        }

        // Check if patient ID is provided
        if (!isset($_GET['id'])) {
            echo "Patient ID not provided";
            exit();
        }

        $patient_id = $_GET['id'];

        // Database connection parameters
        require_once 'db.php';

        // Retrieve patient data
        $sql = "SELECT * FROM Patients WHERE Patient_ID = $patient_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="update_patient.php" method="post">
            <input type="hidden" name="patient_id" value="<?php echo $row['Patient_ID']; ?>">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" value="<?php echo $row['Full_Name']; ?>" required><br><br>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male" <?php if ($row['Gender'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if ($row['Gender'] == 'Female') echo 'selected'; ?>>Female</option>
                <option value="Other" <?php if ($row['Gender'] == 'Other') echo 'selected'; ?>>Other</option>
            </select><br><br>
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" value="<?php echo $row['Phone_Number']; ?>" required><br><br>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required><?php echo $row['Address']; ?></textarea><br><br>
            <button type="submit">Update</button>
        </form>
        <?php
        } else {
            echo "Patient not found";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
