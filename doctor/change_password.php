<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="change-password-container">
        <h2>Change Password</h2>
        <form action="change_password_process.php" method="post">
            <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" required><br><br>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required><br><br>
            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>
            <button type="submit">Change Password</button>
        </form>
    </div>
</body>
</html>
