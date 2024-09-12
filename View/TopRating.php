<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Rated Farmers</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <style>
        .navbar-sidebar {
            height: 87vh;
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
         .mt-5{
            margin-left:120px;
            padding: 10px;
         }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            margin-bottom: 100px; /* Added margin-bottom to create space between the main content and footer */
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

        /* Custom styles for farmer cards */
        .farmer-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .farmer-card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
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
        <h1></h1>

        <section id="top-rated-farmers" class="mt-5" fixed-top>
            <h2>List of Top Rated Farmers</h2>
            <div class="row">
                <?php
                // Replace with your own code to fetch and display top-rated farmers
                $ratings = [
                    ['farmer_name' => 'Abebe', 'rating' => 4.5, 'image' => 'ars.jpg'],
                    ['farmer_name' => 'kebede', 'rating' => 4.2, 'image' => 'far.jpg'],
                    ['farmer_name' => 'abrish', 'rating' => 4.8, 'image' => 'fare.jpg'],
                    ['farmer_name' => 'aalmaz', 'rating' => 4.4, 'image' => 'img.jpg'],
                    ['farmer_name' => 'someone', 'rating' => 4.3, 'image' => 'farm.jpg']
                ];

                // Sort the ratings array by rating in descending order
                usort($ratings, function($a, $b) {
                    return $b['rating'] <=> $a['rating'];
                });

                // Display the top-rated farmers
                foreach ($ratings as $rating) {
                    echo '<div class="col-md-4">';
                    echo '<div class="farmer-card">';
                    echo '<img src="images/' . $rating['image'] . '" alt="' . $rating['farmer_name'] . '">';
                    echo '<h3>' . $rating['farmer_name'] . '</h3>';
                    echo '<p>Rating: ' . $rating['rating'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> AgriFund. All rights reserved.</p>
        </div>
    </footer>

    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>