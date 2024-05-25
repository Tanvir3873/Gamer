<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];

    // Validate input
    if (empty($user) || empty($email) || empty($pass) || empty($confirmPass)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } elseif ($pass !== $confirmPass) {
        echo "Passwords do not match.";
    } elseif (strlen($pass) < 6) {
        echo "Password must be at least 6 characters long.";
    } else {
        // Check if username or email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $user, $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            echo "Username or email already exists.";
        } else {
            // Hash the password
            $hashedPass = password_hash($pass, PASSWORD_BCRYPT);

            // Insert user into database
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $user, $email, $hashedPass);

            if ($stmt->execute()) {
                echo "<script>alert('Registration successful!');</script>";
                echo "<script>window.location.href = 'Registration.php';</script>";
                exit();
                
            } else {
                echo "Error: " . $stmt->error;
            }
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - Gamer</title>
    <style>
    body {
            font-family: 'Josefin Sans', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            font-family: 'Josefin Sans', sans-serif;
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            font-family: 'Josefin Sans', sans-serif;
            width: 100%;
            padding: 10px;
            background-color: #e64fd9;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #db9256;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form id="signUpForm" action="" method="POST" onsubmit="return validateForm()">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            if (username === "" || email === "" || password === "" || confirmPassword === "") {
                alert("All fields must be filled out");
                return false;
            }
            if (password.length < 6) {
                alert("Password must be at least 6 characters long");
                return false;
            }
            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>