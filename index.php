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
    <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
            min-height: calc(100%);
            width: calc(100%);
        }

        body,
        .main-wthree {
            width: calc(100%);
            min-height: 100vh;
        }

        .main-wthree {
            padding-bottom: 10rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .footer {
            width: 100%;
            bottom: 0;
            left: 0;
            background-color: #010101;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .hero {
            background-color: #4e6865;
            background-repeat: no-repeat;
            color: #fff;
            padding: 90px;
            text-align: center;
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 3rem;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1px;
            background-color: #007bff;
            color: #fff;
        }

        .logo {
            margin-right: auto;
        }

        .navigation {
            margin-left: auto;
        }

        .navigation ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navigation ul li {
            display: inline;
            margin-left: 20px;
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


        .container {
            display: flex;
            align-items: center;
            background-color: black;
        }

        .paragraph {
            flex: 1;
            margin-right: 20px;
            padding: 10px;
            font-size: 20px;
            color: lightgreen;
        }

        .image {
            flex: 1;
            margin-right: 50px;
        }

        body {
            background-image: url("./images/card.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background: white;
            font-size: 27px;
        }

        #contact {
            background-image: url(" ");
            display: flex;
            /* Added flex display */
            justify-content: center;
            /* Center content horizontally */
            align-items: center;
            /* Center content vertically */
            height: 100vh;
            /* Set height to occupy the full viewport */
        }

        span.error {
            padding: 5px;
            color: white;
        }

        span.hidden {
            visibility: hidden;
            padding: 0;
            margin: 0;
        }

        span.success {
            display: block;
            padding: 5px;
            background: green;
            color: white;
        }

        .submit {
            font-size: 27px;
        }

        span.success.hidden {
            visibility: hidden;
            padding: 0;
            margin: 0;
        }

        h2 {
            font-size: 30px;
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
                    <li><a href="#">About Us</a></li>
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
    <section class="Home">
        <h1 style="text-align: center;">About Us</h1>
        <div class="container">
            <div class="paragraph">
                <p>Welcome to Agri Fund!<br> We are a financial institution dedicated to supporting agricultural ventures and rural communities. Our mission is to provide funding solutions and resources to help farmers, agricultural businesses, and organizations thrive. With our expertise in the agricultural industry, we aim to drive innovation, sustainability, and growth in the agricultural sector. Explore our website to learn more about our services and how we can assist you in achieving your agricultural goals.</p>
            </div>
            <div class="image">
                <img src="./images/agrifintech.jpg" alt="Image Description">
            </div>
        </div>
    </section>
    <section id="contact">
        <div>
            <div>
                <div>
                    <h2><u>Contact Us</u></h2>
                    <?php
                    // define variables and set to empty values
                    $nameErr = $emailErr = $phoneErr = $inquiryErr = "";
                    $name = $email = $phone = $inquiry = $email_message = "";
                    $submitted = 0;

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["name"])) {
                            $nameErr = "Name is required";
                        } else {
                            $name = clean_data($_POST["name"]);
                            $fill["name"] = $name;
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z ]{2,255}$/", $name)) {
                                $nameErr = "Your Name cannot contain a single character, maximum of 255 characters, digits, and white space";
                            }
                        }
                        if (empty($_POST["email"])) {
                            $emailErr = "Email is required";
                        } else {
                            $email = clean_data($_POST["email"]);
                            $fill["email"] = $email;
                            // check if e-mail address is well-formed
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $emailErr = "Invalid email format";
                            }
                        }

                        if (empty($_POST["phone"])) {
                            $phone = "";
                        } else {
                            $phone = clean_data($_POST["phone"]);
                            $fill["phone"] = $phone;
                            // check if phone number format is valid
                            if (ctype_alpha(preg_replace('/[0-9]+/', '', $phone))) {
                                $phoneErr = "Phone Number Cannot Include Letters";
                            }
                            if (!ctype_digit(preg_replace('~[^0-9]~', '', $phone))) {
                                $phoneErr = "Your Phone Number Does Not Include Digits";
                            }
                        }

                        if (empty($_POST["inquiry"])) {
                            $inquiryErr = "You Cannot Submit an Empty Inquiry";
                        } else {
                            $inquiry = clean_data($_POST["inquiry"]);
                            $fill["inquiry"] = $inquiry;
                        }
                    }

                    function clean_data($data)
                    {
                        // Strip whitespace (or other characters) from the beginning and end of string
                        $data = trim($data);
                        // Un-quotes quoted string
                        $data = stripslashes($data);
                        // Convert special characters to HTML entities
                        $data = htmlspecialchars($data);
                        return $data;
                    }

                    // Send email if no errors
                    if (isset($fill)) {
                        if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($inquiryErr)) {
                            // Inquiry sent from address below
                            $email_from = "no-reply@emailadress.com";

                            // Send form contents to address below
                            $email_to = "info@emailadress.com";

                            // Email message subject
                            $today = date("j F, Y. H:i:s");
                            $email_subject = "Website Submission [$today]";

                            function clean_string($string)
                            {
                                $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                                return str_replace($bad, "", $string);
                            }

                            $email_message .= "Name: " . clean_string($name) . "\n";
                            $email_message .= "Email: " . clean_string($email) . "\n";
                            $email_message .= "Phone: " . clean_string($phone) . "\n";
                            $email_message .= "Inquiry: " . clean_string($inquiry) . "\n";

                            // Create email headers
                            $headers = 'From: ' . $email_from . "\r\n" .
                                'Reply-To: ' . $email . "\r\n" .
                                'X-Mailer: PHP/' . phpversion();

                            // Send the email
                            if (mail($email_to, $email_subject, $email_message, $headers)) {
                                $submitted = 1; // Set submitted flag to true
                            } else {
                                echo "Oops! An error occurred while submitting the form. Please try again later.";
                            }
                        }
                    }
                    ?>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" placeholder="Full Name" value="<?php echo isset($fill['name']) ? $fill['name'] : ''; ?>">
                            <span class="error"><?php echo $nameErr; ?></span>
                        </div><br>
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" placeholder="example@gmail.com" value="<?php echo isset($fill['email']) ? $fill['email'] : ''; ?>">
                            <span class="error"><?php echo $emailErr; ?></span>
                        </div><br>
                        <div>
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" id="phone" placeholder="+251" value="<?php echo isset($fill['phone']) ? $fill['phone'] : ''; ?>">
                            <span class="error"><?php echo $phoneErr; ?></span>
                        </div><br>
                        <div>
                            <label for="inquiry">Inquiry:</label>
                            <textarea name="inquiry" id="inquiry" placeholder="We need your suggestion!"><?php echo isset($fill['inquiry']) ? $fill['inquiry'] : ''; ?></textarea>
                            <span class="error"><?php echo $inquiryErr; ?></span>
                        </div><br>
                        <div>
                            <button type="submit">Submit</button>
                            <input type="submit" name="submit" value="Submit">
                        </div>
                        <span class="success <?php echo $submitted ? '' : 'hidden'; ?>">Thank you for your submission!</span>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <h3>Contact-Us</h3>
    </footer>
</body>

</html>