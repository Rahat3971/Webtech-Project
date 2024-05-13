<?php 
session_start();
require_once '../../Model/User.php';
if(!isset($_SESSION['isAdmin'])){
    header('Location: ../../Views/Home/Login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Assistant Registration</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

fieldset {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
}

legend {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"],
select,
textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

#error {
    color: red;
    font-size: 14px;
}

/* Additional styles as needed */


    </style>
    
</head>
<body>
    <div class="container">
        <form action="../../Controllers/OnBoardLabAssistant.php" method="POST" onsubmit="return validateForm()">
            <fieldset>
                <legend>Lab Assistant Registration</legend>
                <label for="fullName">Full Name:</label><br>
                <input type="text" id="fullName" name="fullName"><br>

                <label for="gender">Gender:</label><br>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select><br>

                <label for="contactNo">Contact Number:</label><br>
                <input type="text" id="contactNo" name="contactNo"><br>

                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>

                <label for="confirmPassword">Confirm Password:</label><br>
                <input type="password" id="confirmPassword" name="confirmPassword"><br>

                <label for="address">Address:</label><br>
                <textarea id="address" name="address" rows="4" cols="50"></textarea><br>

                <input type="submit" value="Register" >

                <span id="error"></span>

            </fieldset>
        </form>
    </div>

    <script src="../Js/AddLabAssistant.js"></script>
</body>
</html>
