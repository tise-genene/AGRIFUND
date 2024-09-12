<!DOCTYPE html>
<html>

<head>
    <title>Add Farmer - AgriFund</title>
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

        form {
            background-color: #fff;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            margin-top: 200px;
            margin-bottom: 60px;
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    


    <form action="insert_farmer.php" method="post">
        <h2>Add Farmer</h2>
        <label for="farmername">Farmer Name:</label><br>
        <input type="text" id="farmername" name="farmername" required><br><br>
        <label for="farmeraddress">Farmer Address:</label><br>
        <input type="text" id="farmeraddress" name="farmeraddress" required><br><br>
        <label for="expectedyields">Expected Yields:</label><br>
        <input type="number" id="expectedyields" name="expectedyields" required><br><br>
        <label for="LoanAmount">Loan Amount:</label><br>
        <input type="number" id="LoanAmount" name="LoanAmount" required><br><br>
        <label for="otherdetails">Other Details:</label><br>
        <textarea id="otherdetails" name="otherdetails" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Add Farmer">
    </form>
</body>
<footer class="bg-dark text-light text-center py-3">
    &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
</footer>

</html>