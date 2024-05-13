<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="add-patient-container">
        <h2>Add Patient</h2>
        <form action="add_patient_process.php" method="post">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required><br><br>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br><br>
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required><br><br>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br><br>
            <button type="submit">Add Patient</button>
        </form>
    </div>
</body>
</html>
