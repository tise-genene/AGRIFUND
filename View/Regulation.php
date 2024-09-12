<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rules and Regulations</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <style>
    .navbar-sidebar {
            height: 90vh;
            width: 250px;
            position: fixed;
            top: 10px;
            left: 0;
            z-index: 1;
            padding-top: 100px;
            background-color: green;
            color: #fff;
            display: flex;
            flex-direction: row; /* Added flex-direction to make the sidebar appear in a column */
        }

       .navbar-sidebar .nav-link {
            color: white;
            font-weight: bold; /* Added font-weight to make the text bold */
            font-size: 20px; /* Added font-size to increase the text size */
            border-bottom: 2px solid white; /* Added border-bottom to create a border */
            padding: 10px; /* Added padding for better spacing */
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            margin-bottom: 100px; /* Added margin-bottom to create space between the main content and footer */
        }
    .mt-5{
            margin-left: 250px;
            padding: 20px;
            margin-bottom: 100px;
        }
        /* Custom styles for header and footer */
        header {
            background-color: #f8f9fa;
            padding: 10px;
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
       
    
    /* Container styles */
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f8f8;
        border: 1px solid #ddd;
    }
    
    /* Heading styles */
    h1, h2 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }
    
    /* Section styles */
    section {
        margin-top: 40px;
    }
    
    /* List styles */
    ul, ol {
        margin-left: 20px;
    }
    
    /* List item styles */
    li {
        margin-bottom: 10px;
    }

    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">AgriFund</a>
        </nav>
    </header>
 <div class="navbar-sidebar">
        <ul class="nav flex-column">
             <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FarmerList.php">Farmers List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Regulation.php">Rules and Regulations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="TopRating.php">Top Rated Farmers</a>
                    </li>
                     <li class="nav-item">
                <a class="nav-link" href="Payment.php">Payment</a>
            </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?logout">Logout</a>
                    </li> <!-- Navbar items -->
        </ul>
    </div>
    <main class="container mt-5">
        <h1>Rules and Regulations</h1>

        <section id="rules-policies" class="mt-5">
            <h2>Organization Rules and Policies</h2>
            <p>Here are the rules and policies of our organization:</p>
            <ul>
                <li>Rule 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Rule 2: Nullam faucibus ex nec consectetur rhoncus.</li>
                <li>Rule 3: Fusce non elit non arcu luctus commodo eu vel ipsum.</li>
            </ul>
        </section>

        <section id="loan-process" class="mt-5">
            <h2>Loan Process</h2>
            <p>Our loan process works as follows:</p>
            <ol>
                <li>Step 1: Submit the loan application form online or in person.</li>
                <li>Step 2: Our team will review the application and conduct a credit check.</li>
                <li>Step 3: If approved, you will be notified and provided with loan terms and conditions.</li>
                <li>Step 4: Sign the loan agreement and provide any required documentation.</li>
                <li>Step 5: Upon completion, the loan amount will be disbursed to your designated account.</li>
                <li>Step 6: Repay the loan according to the agreed-upon schedule.</li>
            </ol>
        </section>
    </main>

    <footer class="bg- text-light text-center py-3">
        &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
    </footer>

    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>