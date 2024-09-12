<!DOCTYPE html>
<html>

<head>
    <title>Signup - AgriFund</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
            display: none;
            /* Initially hide the error message */
        }
    </style>
    <script>
        // Function to show error message
        function showError() {
            var errorMessage = document.getElementById('error-message');
            errorMessage.style.display = 'block'; // Show the error message
        }
    </script>
</head>

<body>
    <div class="signup-container">
        <h2>Signup</h2>
        <form action="register.php" method="post" onsubmit="return checkPasswords()">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <input type="submit" value="Signup">
        </form>
        <div id="error-message" class="error-message">
            Passwords do not match.
        </div>
    </div>

    <script>
        // Function to check passwords before form submission
        function checkPasswords() {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm_password').value;
            if (password !== confirmPassword) {
                showError(); // Show error message if passwords do not match
                return false; // Prevent form submission
            }
            return true; // Allow form submission if passwords match
        }
    </script>
</body>

</html>