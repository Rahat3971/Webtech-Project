<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patients</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="view-patients-container">
        <h2>View Patients</h2>
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                if (!isset($_SESSION['doctor_id'])) {
                    header("Location: login.html");
                    exit();
                }

                require_once 'db.php';

                // SQL to retrieve patient data from Patients table
                $sql = "SELECT Patient_ID, Full_Name, Gender, Phone_Number, Address FROM Patients";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Full_Name"] . "</td>";
                        echo "<td>" . $row["Gender"] . "</td>";
                        echo "<td>" . $row["Phone_Number"] . "</td>";
                        echo "<td>" . $row["Address"] . "</td>";
                        // Edit button
                        echo "<td><a href='edit_patient.php?id=" . $row["Patient_ID"] . "' class='button'>Edit</a></td>";
                        // Delete button
                        echo "<td><a href='delete_patient.php?id=" . $row["Patient_ID"] . "' class='button' onclick='return confirm(\"Are you sure you want to delete this patient?\");'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>0 results</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
        <a href="patients.php" class="button">Go to Patient Management</a>
        <?php include 'footer.php'; ?>

    </div>
</body>
</html>
