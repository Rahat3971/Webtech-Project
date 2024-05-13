<?php
session_start();
if (!isset($_SESSION['doctor_id'])) {
    header("Location: login.html");
    exit();
}

// Database connection parameters
require_once 'db.php';

// SQL to retrieve appointments data from Appointments table
$sql = "SELECT * FROM Appointments";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointments</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="appointments-container">
        <h2>Appointments</h2>
        <table>
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Phone Number</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Reason</th>
                    <th>Action</th> <!-- New column for the cancel button -->
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Patient_Name"] . "</td>";
                        echo "<td>" . $row["Phone_Number"] . "</td>";
                        echo "<td>" . $row["Date"] . "</td>";
                        echo "<td>" . $row["Time"] . "</td>";
                        echo "<td>" . $row["Reason"] . "</td>";
                        echo "<td><a href='cancel_appointment.php?id=" . $row["Appointment_ID"] . "' class='button'>Cancel</a></td>"; // Cancel button with link to cancel_appointment.php
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No appointments found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>

        </table>
                         <a href="dashboard.php" class="button">Go to Dashboard</a>
                         <?php include 'footer.php'; ?>


    </div>

</body>
</html>
