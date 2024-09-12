<?php
$result = "";
if (isset($_GET['msg'])) {
    $result = $_GET['msg'];
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>AgriFund - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css" />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <style>
        html {
            height: 100%;
            width: 100%;
        }

        body {
            margin: 0;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
        }

        .main-wthree {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f4f4f4;
            padding-bottom: 10rem;
        }

        .footer {
            width: 100%;
            background-color: #010101;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .hero {
            background-color: #4e6865;
            color: #fff;
            padding: 50px;
            text-align: center;
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
            position: fixed;
            /* Fixed position to stay at the top */
            width: 100%;
            /* Full width */
            z-index: 999;
            /* Ensure it's above other content */
        }

        .logo {
            margin-right: auto;
            margin-left: 20px;
            /* Adjust margin to move to the left */
        }

        .navigation {
            margin-right: 20px;
            /* Adjust margin to move to the left */
        }

        .navigation ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navigation ul li {
            display: inline;
            margin-right: 10px;
        }

        .navigation ul li:first-child {
            margin-left: 0;
        }

        .navigation ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <header class="header-container">
        <div class="logo">
            <h1>AgriFund</h1>
        </div>
        <div class="navigation">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="./controller/login.php">Login</a></li>
                    <li><a href="./controller/signup.php">Signup</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <h2>Welcome to AgriFund</h2>
        <p>Empowering small-scale farmers through peer-to-peer lending.</p>
    </section>
    <footer class="footer">
        <h3>Contact-Us</h3>
    </footer>
</body>

</html>