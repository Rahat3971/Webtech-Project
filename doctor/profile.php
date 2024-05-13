<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="profile-container">

        <?php
        session_start();
        if (!isset($_SESSION['doctor_id'])) {
            header("Location: login.html");
            exit();
        }

        require_once 'db.php';


        // Retrieve doctor's information from the database
        $doctor_id = $_SESSION['doctor_id'];
        $sql = "SELECT * FROM Doctors WHERE Doctor_ID = '$doctor_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Doctor found, display profile
            $row = $result->fetch_assoc();
            $first_name = $row["First_Name"];
            $last_name = $row["Last_Name"];
            $phone_number = $row["Phone_Number"];
            // Display doctor's profile
            echo "<h2>Doctor Profile</h2>";
            echo "<div class='profile-info'>";
            echo "<p><strong>Doctor ID:</strong> $doctor_id</p>";
            echo "<p><strong>Name:</strong> $first_name $last_name</p>";
            echo "<p><strong>Phone Number:</strong> $phone_number</p>";
            echo "</div>";
            // Add Update Profile button
            echo "<a href='update_profile.php' class='button'>Update Profile</a>";
        } else {
            echo "Doctor profile not found";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
